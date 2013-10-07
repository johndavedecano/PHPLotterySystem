<?php 
class Draw extends \Illuminate\Database\Eloquent\Model {
    
    public static function isExists($date){
        
        $draw = Draw::where('date','=',date("Y-m-d H:i:s",strtotime($date)))->count();
        if($draw > 0){
            return true;
        }else{
            return false;
        }
        
    }
    public static function validDate($date){
        $date = strtotime($date);
        $date2 = strtotime(date("Y-m-d"));
        if($date < $date2){
            return false;
        }else{
            return true;
        }
    }
}