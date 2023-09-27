<?php

// Task 4: Multidimensional Array

// Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.


$studentGrades = [
    'student1' => ['Math' => 95, 'English' => 90, 'Science' => 85],
    'student2' => ['Math' => 90, 'English' => 80, 'Science' => 70],
    'student3' => ['Math' => 90, 'English' => 60, 'Science' => 60]
];
function gradeCalculate($average)
{
    if ($average <= 100 && $average >= 80) {
        $result = "A+";
    } elseif ($average < 80 && $average >= 60) {
        $result = "A";
    } elseif ($average < 60 && $average >= 45) {
        $result = "B";
    } else {
        $result = "F";
    }
    return $result;
}
function studentGrades($grades)
{
    foreach ($grades as $student => $Grade) {
        
        $average = array_sum($Grade)/count($Grade);

        $result=gradeCalculate($average);

        echo "$student average: $average & grade: $result ";
    }
}
studentGrades($studentGrades);
