<?php
//Patrik hašek
// Úkol A
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";

}

echo "<hr>";

for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}

echo "<hr>";

// Úkol B
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

echo "<hr>";

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

echo "<hr>";

// Úkol C
$number = 7;

for ($i = 1; $i <= 10; $i++) {
    echo $number . " x " . $i . " = " . ($number * $i) . "<br>";
}

echo "<hr>";

// Úkol D
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo $sum;

echo "<hr>";

// Úkol E
$counter = 10;

while ($counter >= 1) {
    echo $counter . "<br>";
    $counter--;
}

echo "Hotovo!";

echo "<hr>";

// Úkol F
$number = 8;

while ($number < 5) {
    echo "While cyklus<br>";
}

do {
    echo "Do while cyklus<br>";
} while ($number < 5);

?>
// Úkol J
$number = 10;

while ($number < 6) {
    echo "While cyklus<br>";
}

do {
    echo "Do while cyklus<br>";
} while ($number < 6);
?>