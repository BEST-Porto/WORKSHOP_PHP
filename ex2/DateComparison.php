<?php
 
    $return_date2 = 'Date2 is bigger than Date1';
    $return_date1 = 'Date1 is bigger than Date2';
    $return_dateEqual = 'Dates are Equal';

  
    $day1 = $_GET['day1']; 
    $day2 = $_GET['day2']; 
    $month1 = $_GET['month1']; 
    $month2 = $_GET['month2']; 
    $year1 = $_GET['year1']; 
    $year2 = $_GET['year2']; 

    ##TODO
    if($year1<$year2)
        echo $return_date2;
    else if($year1>$year2)
        echo $return_date1;
    else if($month1<$month2)
        echo $return_date2;
    else if($month1>$month2)
        echo $return_date1;
    else if($day1<$day2)
        echo $return_date2;
    else if($day1>$day2)
        echo $return_date1;
    else 
        echo $return_dateEqual;

    
?>