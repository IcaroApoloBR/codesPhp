<?php

$healthPoints = 100;
$maxHealthPoints = 100;

$monsterAttackDamage = 25;

while($healthPoints > 0) {
    echo "HP: $healthPoints/$maxHealthPoints" . PHP_EOL;
    echo "Character attacked! -$monsterAttackDamage de HP" . PHP_EOL;

    $healthPoints -= $monsterAttackDamage;

    if ($healthPoints <= 0) {
        echo "Character died" . PHP_EOL;
    }
}

?>