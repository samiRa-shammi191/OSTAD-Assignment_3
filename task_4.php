<?php
function averageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
            echo " $student <br />";
            echo "Average Grade: $average<br />";
    }
}

$studentGrades = array(
    'Samira' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Samaira' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Shammi' => array('Math' => 75, 'English' => 82, 'Science' => 88)
);

averageGrades($studentGrades);
?>
