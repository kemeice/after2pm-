<?php

/**
 * @author kem parson 
 * @copyright 2016
 */
 // set time zone 
date_default_timezone_set('America/New_York');
$actual=date("Y/m/d");
// check time of day if after 2 pm 
if (date('H') > 13) {
 $today= date("N") +1;  
 $date= date('Y/m/d', strtotime($actual . ' + 1 day'));   
    }
    else
    {
  $date=date("Y/m/d");      
  $today=date("N");  
    }
    
    
    function calday($today)
    {
  if($today=='6')
  {
    $nextday=3;
    $twodays=4; 
    
  }
   elseif ($today==7)
   {
   $nextday=2;
   $twodays=3; 
    
   }
   
   
   
   else
   {
    $nextday=1;
   $twodays=2; 
    
   }
   
   $out="$nextday , $twodays";
   return $out;
  
  } 
  
 $add= calday ($today);
 $shipdays=explode(" ,",$add );
 $nex=$shipdays['0'];
 $two=$shipdays['1'];
 //echo $two;
 
 
 $estimatenexday= date('F-d-Y', strtotime($date . ' +'.$nex . 'day'));
 $estimatetwoday= date('F-d-Y', strtotime($date . ' +'.$two . 'day'));
    
echo $estimatenexday; 
echo $estimatetwoday;
$daynext=date('l', strtotime($estimatenexday));
$daytwoday=date('l', strtotime($estimatetwoday));
echo $daynext;
echo $daytwoday;
    

?>