<?php

    //GET PARAMS
    $start = $_GET['start']; 
    $end = $_GET['end']; 


    $numberOfPrimes=0;
    
    for($i=$start;$i<$end;$i++){
        $bool=true;
        for($j=2;$j<$i;$j++){
            if($i%$j===0)
                $bool=false;
        }
        if($bool)
            $numberOfPrimes++;
    }

    echo "There are $numberOfPrimes prime numbers between $start and $end"
    
?>