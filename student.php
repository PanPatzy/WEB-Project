<?php
$jmeno = "Jan Novák";
$vek = 18;
$trida = "9.A";
$vyska = 1.78;
$jeStudent = true;
$jazyk = "PHP";

/*
Tato část převede logickou hodnotu
na text Ano nebo Ne.
*/
$status = $jeStudent ? "Ano" : "Ne";
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Můj studentský profil</title>
</head>
<body>

    <h1>Můj studentský profil</h1>

    <p><strong>Jméno a příjmení:</strong> <?php echo $jmeno; ?></p>
    <p><strong>Věk:</strong> <?php echo $vek; ?></p>
    <p><strong>Třída:</strong> <?php echo $trida; ?></p>
    <p><strong>Výška:</strong> <?php echo $vyska; ?> m</p>
    <p><strong>Jsem student:</strong> <?php echo $status; ?></p>
    <p><strong>Oblíbený programovací jazyk:</strong> <?php echo $jazyk; ?></p>

    <h2>Datové typy</h2>

    <?php
    // Výpis hodnot a datových typů proměnných
    echo "<p>";
    var_dump($jmeno);
    echo "</p>";

    echo "<p>";
    var_dump($vek);
    echo "</p>";

    echo "<p>";
    var_dump($trida);
    echo "</p>";

    echo "<p>";
    var_dump($vyska);
    echo "</p>";

    echo "<p>";
    var_dump($jeStudent);
    echo "</p>";

    echo "<p>";
    var_dump($jazyk);
    echo "</p>";
    ?>

</body>
</html>