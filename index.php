
<?php


require('Ironman.php');
require('Mark1.php');
require('Mark2.php');
require('Mark3.php');


$esercito = [];


$numeroIronman = rand(5, 10);

for ($i = 0; $i < $numeroIronman; $i++) {

    $armatura = rand(1, 3);

    switch ($armatura) {

        case 1:
            $esercito[] = new Mark1();
            break;

        case 2:
            $esercito[] = new Mark2();
            break;

        case 3:
            $esercito[] = new Mark3();
            break;
    }
}


foreach ($esercito as $ironman) {
    $ironman->getInfo();
    echo "-------------------\n";
}


echo "Totale Ironman creati: " . Ironman::getCounter();

?>
