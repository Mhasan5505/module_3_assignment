<?php

$studentGrades = [
    "student_1" => ["Math" => 85, "English" => 92, "Science" => 88],
    "student_2" => ["Math" => 78, "English" => 88, "Science" => 76],
    "student_3" => ["Math" => 90, "English" => 85, "Science" => 93],
];

function averageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = 0;
        $count = 0;
        foreach ($subjects as $subject => $grade) {
            $total += $grade;
            $count++;
        }
        $average = $total / $count;
        echo "$student's average grade : $average\n";
    }
}

averageGrades($studentGrades);
?>