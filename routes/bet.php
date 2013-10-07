<?php
$app->get('/bet/',function() use ($app){
    
    $twig = Twig::get();
    $template = $twig->loadTemplate('bet.html');
    
    // LETS GET THE TODAYS DRAW
    $draw = Draw::where("date","=",date("Y-m-d 00:00:00"))->where("status","=","open");
    $cur = strtotime(date("Y-m-d H:i:s"));
    $lap = strtotime(date("Y-m-d 20:00:00"));
    
    $_SESSION['csrf_token'] = md5(date("YmdHis"));
    
    $left = $lap - $cur;
    
    // CHECKS IF THERE A DRAW AVAILABLE FOR TODAY
    if($draw->count() == 0){
        $app->flash('error','Sorry there is available draws for today.');
        $app->redirect('/');
    }
    // CHECKS IF PAST 8:00
    if($cur >= $lap){
        $app->flash('error','Sorry you just reach our cut off time.Please try back tommorow.');
        $app->redirect('/');
    }
    
    echo $template->render(array(
        'draw' => $draw->first(),
        'left' => $left,
        'csrf_token'=> $_SESSION['csrf_token'],
    ));
});

$app->post('/bet/',function() use ($app){
    
    // LETS GET THE TODAYS DRAW
    $draw = Draw::where("date","=",date("Y-m-d"))->where("status","=","open");
    $cur = strtotime(date("Y-m-d H:i:s"));
    $lap = strtotime(date("Y-m-d 20:00:00"));
    
    $left = $lap - $cur;
    
    // CHECKS IF THERE A DRAW AVAILABLE FOR TODAY
    if($draw->count() == 0){
        $app->flash('error','Sorry there is available draws for today.');
        $app->redirect('/');
    }
    // CHECKS IF PAST 8:00
    if($cur >= $lap){
        $app->flash('error','Sorry you just reach our cut off time.Please try back tommorow.');
        $app->redirect('/');
    }
    
    if($_POST['csrf_token'] != $_SESSION['csrf_token']){
        $app->flash('error','Invalid Token.');
        $app->redirect('/');
    }
    
    unset($_POST['submit']);
    // VALIDATE UNIQUE
    $numbers = array();
    foreach($_POST['bet'] as $bet){
        if(!in_array($bet,$numbers)){
            $numbers[] = trim(intval($bet));
        }
    }
    
    if(count($_POST['bet']) != 6 && count($numbers) != 6){
        $app->flash('error','Sorry you have to select atleast 6 numbers');
        $app->redirect('/bet');
    }
    $last = Bet::orderBy("id","desc")->first();
    $additional_number = (is_object($last))?$last->id + 1:0;
    // FIND THE DRAW
    $todays_draw = $draw->first();
    $bet = new Bet;
    $bet->draw_id = $todays_draw->id;
    $bet->numbers =  implode(",",$numbers);
    $bet->ticket_number = date("Ymd").$additional_number;
    $bet->security_code = md5(date("YmdHis"));
    if(isset($_POST['lucky_pick'])){
        $bet->lucky_pick = 1;
    }else{
          $bet->lucky_pick = 0;
    }
    $bet->save();
    $ticket = array();
    $ticket['draw_id'] = $bet->draw_id;
    $ticket['numbers'] = $bet->numbers;
    $ticket['ticket_number'] =  $bet->ticket_number;
    $ticket['security_code'] =  $bet->security_code;
    $ticket['lucky_pick'] =  $bet->lucky_pick;
    $ticket['created_at'] =  date("Y-m-d");
    $app->flash('info',$ticket);
    $app->redirect('/print/');

});

$app->get('/print/',function() use ($app){
    if(isset($_SESSION['slim.flash']['info'])){
        $ticket = $_SESSION['slim.flash']['info'];
        $twig = Twig::get();
        $template = $twig->loadTemplate('print.html');
        //print_r($ticket);
        echo $template->render(array(
            'ticket' => $ticket,
        ));
    }else{
        unset($_SESSION['slim.flash']);
        $app->flash('error','Unexpected error occured. Please contact the customer service.');
        $app->redirect('/');
    }
});
$app->get('/test/',function(){
$time = date("H");
// GETS THE DRAW FOR THE DAY
$date = date("Y-m-d 00:00:00");
$draw = Draw::where("date","=",$date)->first();

if(!empty($draw)){
    // CHECKS IF THE TIME IS 9:00PM PHILIPPINE TIME. ALSO CHECKS IF THE NUMBERS ARE NOT YET FIELD
    if($time == "5" && $draw->numbers == ''){
        //
        $draw_id = $draw->id;
        $draw_winning_price = $draw->winning_price;
        // GENERATE RANDOM NUMBERS FROM 1-42
        $range = range(1,42);
        shuffle($range);
        $num = 6;
        $r = array();
        for ($i = 0; $i < $num; $i++) {
            $r[] = $range[$i];
        }
        $shuffled = $num == 1 ? $r[0] : $r;
        sort($shuffled,SORT_NUMERIC);
        // SAVE THE WINNING NUMBER TO DATABASE
        $draw = Draw::where("date","=",$date)->update(array('numbers' => implode(",",$shuffled),'status' => 'closed'));
        // FIND WINNERS
        $bets = Bet::where("draw_id","=",$draw_id)->where("winning_numbers","=",implode(",",$shuffled));
        // GET NUMBER OF WINNERS AND DIVIDED IT
        $price = $draw_winning_price / $bets->count();
        // WINNERS
        $winners = $bets->get();
        // SAVE WINNERS TO DATABASE
        foreach($winners as $winner){
            $w = new Winner;
            $w->draw_id = $draw_id;
            $w->winning_numbers = implode(",",$shuffled);
            $w->winning_price = $price;
            $w->ticket_number = $winner->ticket_number;
            $w->security_code = $winner->security_code;
            $w->draw_date = $date;
            $w->save();
            echo "Winner Saved";
        }
        
    }
} 
});