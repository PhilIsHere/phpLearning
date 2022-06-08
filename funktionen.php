<?php

function hello(bool $a, int $b) {
    if ($a) {
        return '3';
    }
    return 3;
}

//var_dump(hello(false, 3));

//Funktion die ein Array als Parameter annimmt und alle Werte aufsummiert
//Call bei Value
$zahlenArray = [1,2,3,4,5,6];

function addieren(array $zahlenArray = []) : int {
    $result = 0;
    foreach ($zahlenArray as $value){
        //$result = $result + $value;
        $result += $value;
    }
    return $result;
}

//echo (addieren($zahlenArray) . PHP_EOL);

// Call bei Reference

$res = 0;
function addOne(int &$res) {
    $res++;
}
addOne($res);
addOne($res);
echo $res . PHP_EOL;


$result = 0;

function addierenRef(array $zahlenArray, int &$res) {
    foreach ($zahlenArray as $value){
        $res += $value;
    }
}
addierenRef($zahlenArray, $result);
echo $result  . PHP_EOL;

// generatoren

function iAmAGenerator() {
    $testValue = 0;
    for ($i = 0; $i < 10; $i++) {
        $testValue += $i;
        yield $testValue; //stack bleibt erhalten und wird beim nächsten aufruf z. B. mit der eins fortgesetzt
    }
}


foreach (iAmAGenerator() as $value) {
    echo $value . PHP_EOL;
}
//Generator/Funktion der ein Zahlenwert annimmt und damit ein entsprechend langes Array erstellt. Wenn 0 übergeben wird, soll auch die länge des Arrays zufällig sein.
//Das Array soll mit Zufallszahlen gefüllt werden. Die Zahlen sollen dann durch eine andere Funktion miteinander multipliziert werden
echo mt_rand(1, 100) . PHP_EOL;

//function createArray(int $arrayGroesse) : array{
//    if ($arrayGroesse === 0){
//        $tempArrayGroesse = mt_rand(0, 9);
//        //echo 'TEMPARRAYGROESSE IST JETZT ' . $tempArrayGroesse . PHP_EOL;
//        for ($counter = 0; $counter < $tempArrayGroesse; $counter++){
//            echo 'COUNTER IST JETZT ' . $counter . PHP_EOL;
//            $multiplizierenArray[] = mt_rand(1, 100);
//        }
//        echo 'ARRAY ERFOLGREICH ERSTELLT' . PHP_EOL;
//        //var_dump($multiplizierenArray);
//        return $multiplizierenArray;
//
//    }else{
//        echo 'FALL ZWEI!!!';
//        for ($counter = 0; $counter < $arrayGroesse; $counter++){
//            $multiplizierenArray[] = mt_rand(1, 100);
//        }
//        var_dump($multiplizierenArray);
//
//    }
//    return $multiplizierenArray;
//}

/**
 * Erstellt der Array der groesse $arrayGroesse, wenn 0 dann zufällige Länge
 * @param int $arrayGroesse Das ist die Länge vom Array
 * @return array
 */
function createArray(int $arrayGroesse) : array {
    $multiplizierenArray = [];
    if ($arrayGroesse === 0) {
        $arrayGroesse = mt_rand(1, 10); //mt_rand generiert INKLUSIVE der Grenzen.
    }
    for ($counter = 0; $counter < $arrayGroesse; $counter++){
        $multiplizierenArray[] = mt_rand(1, 100);
    }
    return $multiplizierenArray;
}
$multiplizierenArray = createArray(10);

function arrayMultiplizieren(array $multiplizierenArray) : int{
    $tempVal = 1;
    foreach ($multiplizierenArray as $value){
        $tempVal *= $value;
        //echo  'TEMPVAL ist jetzt ' . $tempVal . PHP_EOL;
    }
    return $tempVal;
}
echo arrayMultiplizieren($multiplizierenArray) . PHP_EOL;

//ToDo Matthias: rekursive Funktionen und callbacks

// ------ Callbacks ------

function callback() {
    echo 'in der Callback-Funktion' . PHP_EOL;
}

function keineCallback($param) {
    echo 'in \'keineCallback\' Funktion' . PHP_EOL;
    $param();
}
//Eine Callback funktion ruft den übergabeparameter als funktion auf
keineCallback('callback');

// ------ Rekursive Function ------

function rekursiv($x) {
    echo $x-- . PHP_EOL;
    if ($x > 0) {
        rekursiv($x);
    }
}
rekursiv(7);
// ToDo Philip: Schreibe eine Rekursive Funktion die ab einem Ordner deiner Wahl das Filesystem durchsucht und den namen aller Files ausgibt.
// ToDo Philip: Fibunacci Folge Rkursiv berechnen 0 1 1 2 3 und berechne die Fibunacci-Zahl von 5 und 30
// Bonus: Wenn du Lust hast vergleiche die Rechenzeit mit einer nicht-rekursiven Funktion - time();


//Dirwalker aufgabe
?>