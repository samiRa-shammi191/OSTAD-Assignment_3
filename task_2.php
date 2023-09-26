<?php
function removeEvenNumbers($numbers) {
    $result = array(); 

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
           
            $result[] = $number;
        }
    }
    
    echo "<pre>";
    print_r ($result);
    echo "</pre>";
    
    
}

$numbers = range(1, 10);
removeEvenNumbers($numbers);
?>
