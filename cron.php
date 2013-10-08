<?php
require_once('bootstrap.php');
$time = date("H:i");
// GETS THE DRAW FOR THE DAY
$date = date("Y-m-d 00:00:00");
$draw = Draw::where("date","=",$date)->first();

if(!empty($draw)){
    // CHECKS IF THE TIME IS 9:00PM PHILIPPINE TIME. ALSO CHECKS IF THE NUMBERS ARE NOT YET FIELD
    if($time == "21:00" && $draw->numbers == ''){
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
        $bets = Bet::where("draw_id","=",$draw_id)->where("numbers","=",implode(",",$shuffled));
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
?>