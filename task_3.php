<?php
function sortDescending($grades) {
    
    arsort($grades);

echo "<pre>";
print_r ($grades);
echo "</pre>";

    
}

$grades = array(85, 92, 78, 88, 95);
sortDescending($grades);
?>
