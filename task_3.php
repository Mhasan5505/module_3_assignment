<?php
$grades=[85, 92, 78, 88, 95];

function sortGrades($grades) {
    arsort($grades);
    return $grades;
}

$sortedGrades=sortGrades($grades);
print_r($sortedGrades);
?>