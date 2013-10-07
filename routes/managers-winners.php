<?php
$app->get('/managers/winners/',function() use ($app){
    
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
    $template = $twig->loadTemplate('managers-winners.html');
    echo $template->render(array());
 
});
$app->get('/managers/winners/request/',function() use ($app){
    
    // AUTHENTICATION FIRST
    if (!Sentry::check())
    {
        // User is not logged in, or is not activated
        $app->status(401);
    }
    $user = Sentry::getUser();
    if (!$user->isSuperUser())
    {
        $app->status(401);
    }
    
    $data = array();
    $counter  = 0;
    $draws = Winner::orderBy('id','desc')->get()->toArray();
    foreach($draws as $draw){
        
        $data[$counter]['id'] = $draw['id'];
        $data[$counter]['draw_id'] = $draw['draw_id'];  
        $data[$counter]['winning_numbers'] = $draw['winning_numbers'];
        $data[$counter]['winning_price'] = number_format($draw['winning_price'],2);
        $data[$counter]['ticket_number'] = $draw['ticket_number'];  
        $data[$counter]['security_code'] = $draw['security_code'];  
        $data[$counter]['draw_date'] = $draw['draw_date'];  
        $counter++;
        
    }
    header("Content-Type:text/json");
    echo json_encode(array(array(
        'per_page' => 25,
        'total_entries' => count($data),
        'total_pages' => ceil(count($data)/25),
        'page'      => 1,
    ),$data),JSON_NUMERIC_CHECK);
});