<?php
$app->get('/',function(){
    $twig = Twig::get();
    $template = $twig->loadTemplate('index.html');
    $cur = strtotime(date("Y-m-d H:i:s"));
    $lap = strtotime(date("Y-m-d 20:00:00"));
    $left = $lap - $cur;
    
    echo $template->render(array(
        'left' => $left,
        'time' => date("Hi"),
    ));
});

$app->get('/live-draw/',function() use ($app){ 
    $draw = Draw::where("date","=",date("Y-m-d 00:00:00"))->where("status","=","closed")->where("numbers","!=","")->first();
    header("Content-Type:text/json");
    if(is_object($draw)){
        echo json_encode(explode(",",$draw->numbers));
    } 
});