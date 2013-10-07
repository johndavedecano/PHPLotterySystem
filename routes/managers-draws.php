<?php
$app->get('/managers/draws/',function() use ($app){
    
    // AUTHENTICATION FIRST
    if (!Sentry::check())
    {
        // User is not logged in, or is not activated
        $app->flash('error','User is not logged in, or is not activated');
        $app->redirect('/managers/login');
    }
    $user = Sentry::getUser();
    if (!$user->isSuperUser())
    {
        $app->flash('error','Your are not administrator.');
        $app->redirect('/managers/login');
    }
    
    
    
    $twig = Twig::get();
    $template = $twig->loadTemplate('managers-draws.html');
    echo $template->render(array());
    
});

$app->get('/managers/draws/request/',function() use ($app){

    $data = array();
    $counter  = 0;
    $draws = Draw::orderBy('id','desc')->get()->toArray();
    foreach($draws as $draw){
        
        $numbers = json_decode($draw['numbers']);
        $data[$counter]['id'] = $draw['id'];
        $data[$counter]['numbers'] = $draw['numbers'];
        $data[$counter]['winning_price'] = number_format($draw['winning_price'],2);
        $data[$counter]['date'] = date("F j,Y",strtotime($draw['date']));
        $data[$counter]['status'] = $draw['status'];  
        $counter++;
        
    }
    header("Content-Type:text/json");
    echo json_encode(array(array(
        'per_page' => 25,
        'total_entries' => count($data),
        'total_pages' => ceil(count($data)/25),
        'page'      => 1,
    ),$data));
    
    
});

$app->get('/managers/draws/request/latest/',function() use ($app){

    $data = array();
    $counter  = 0;
    $draws = Draw::orderBy('id','desc')->take(10)->get()->toArray();
    foreach($draws as $draw){
        
        $numbers = json_decode($draw['numbers']);
        $data[$counter]['id'] = $draw['id'];
        $data[$counter]['numbers'] = $draw['numbers'];
        $data[$counter]['winning_price'] = number_format($draw['winning_price'],2);
        $data[$counter]['date'] = date("F j,Y",strtotime($draw['date']));
        $data[$counter]['status'] = $draw['status'];  
        $counter++;
        
    }
    header("Content-Type:text/json");
    echo json_encode(array(array(
        'per_page' => 10,
        'total_entries' => count($data),
        'total_pages' => ceil(count($data)/10),
        'page'      => 1,
    ),$data));
       
});

$app->post('/managers/draws/',function() use ($app){
    
    // AUTHENTICATION FIRST
    if (!Sentry::check())
    {
        // User is not logged in, or is not activated
        $app->flash('error','User is not logged in, or is not activated');
        $app->redirect('/managers/login');
    }
    $user = Sentry::getUser();
    if (!$user->isSuperUser())
    {
        $app->flash('error','Your are not administrator.');
        $app->redirect('/managers/login');
    }
    
    $gump = new GUMP(); 
    $_POST = $gump->sanitize($_POST); // You don't have to sanitize, but it's safest to do so.
    
    $gump->validation_rules(array(
        'winning_price'     => 'required|numeric',
        'draw_date'         => 'required|max_len,10|min_len,6',
    ));
    
    $gump->filter_rules(array(
        'winning_price'    => 'trim',
        'draw_date'        => 'trim',
    ));
    
    if(!preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $_POST['draw_date'])){
        $app->flash('error',"Invalid Date");
        $app->redirect('/managers/draws');
    }
    
    $validator = $gump->run($_POST);
    
    if($validator ===  false){
        $app->flash('error',$gump->get_readable_errors(true));
        $app->redirect('/managers/draws');
    }else{
        
        if(!Draw::isExists($_POST['draw_date']) && Draw::validDate($_POST['draw_date'])){
            
            $draw = new Draw;
            $draw->winning_price = $_POST['winning_price'];
            $draw->date = date("Y-m-d H:i:s",strtotime($_POST['draw_date']));
            $draw->status = "open";
            $draw->save();
            
            $app->flash('info',"Draw has been successfully created.");
            $app->redirect('/managers/draws');
            
        }else{
            $app->flash('error',"There is already a draw scheduled for this day or the date is invalid.");
            $app->redirect('/managers/draws');
        }
    }
    
});