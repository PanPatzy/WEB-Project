
<?php

$studentName = "Jan Novák";

$test1 = 75;
$test2 = 90;
$test3 = 60;

if ($test1 < 0 || $test1 > 100 || $test2 < 0 || $test2 > 100 || $test3 < 0 || $test3 > 100) {
    echo "Neplatne bodove hodnoceni!";
} else {

    $total = $test1 + $test2 + $test3;
    $average = $total / 3;
    $percentage = ($total / 300) * 100;

    if ($percentage >= 90) {
        $grade = 1;
        $wordGrade = "Výborný";
    } elseif ($percentage >= 75) {
        $grade = 2;
        $wordGrade = "Chvalitebný";
    } elseif ($percentage >= 60) {
        $grade = 3;
        $wordGrade = "Dobrý";
    } elseif ($percentage >= 40) {
        $grade = 4;
        $wordGrade = "Dostatečný";
    } else {
        $grade = 5;
        $wordGrade = "Nedostatečný";
    }

    echo "<h1>Hodnocení studenta</h1>";

    echo "Jméno: $studentName <br>";
    echo "Test 1: $test1 bodů <br>";
    echo "Test 2: $test2 bodů <br>";
    echo "Test 3: $test3 bodů <br>";

    echo "Celkem bodů: $total <br>";
    echo "Průměr: $average <br>";
    echo "Úspěšnost: $percentage % <br>";

    echo "Známka: $grade <br>";
    echo "Slovní hodnocení: $wordGrade <br>";

    if ($grade == 5) {
        echo "Bonusové úkoly";
    } else {
        echo "Student prospěl";
    }
}

?>
