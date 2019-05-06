<?php

    function findPrimes(&$numberOfPrimes) {
        
        for($i=$start;$i<$end;$i++){
            $bool=true;
            for($j=2;$j<$i;$j++){
                if($i%$j===0)
                    $bool=false;
            }
            if($bool)
                $numberOfPrimes++;
        }
    }

    //GET PARAMS
    global $start; 
    global $end; 
    $start = $_GET['start']; 
    $end = $_GET['end']; 

    $numberOfPrimes=0;
    findPrimes($numberOfPrimes);
    
    
    echo "There are $numberOfPrimes prime numbers between $start and $end"
    
?>