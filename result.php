<?php

function calculateResult($marks) {
    // Mark range validation
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            return "Mark range is invalid.";
        }
        if ($mark < 33) {
            return "The student has failed.";
        }
    }

    // Total and average calculation
    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);

    // Grade assignment using switch-case
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    return "Total Marks: $totalMarks\nAverage Marks: $averageMarks\nGrade: $grade";
}

// Example marks input for 5 subjects
$marks = [50, 70, 85, 90, 40]; // Modify this array with the student's actual marks

// Output result
echo calculateResult($marks);

?>
