<?php
/**
 * Varaiblen in php sind nicht typitisiert
 * Das heißt, dass ich Variablen keinen direkten Typ zuweisen muss (char, int usw.); php interpretiert und wandelt um.
 */

$testVariable = 'Test' . PHP_EOL; //Erzeugt einen String mit dem Inhalt 'test' + neue Zeile
echo $testVariable; //Gibt den String aus.
var_dump($testVariable); // Zeigt den Variablentyp und den Wert des gespeicherten Inhaltes an (analog z. Speicher dump)

$testVariable = 5; //Ändert den vorher gespeicherten String zu einem int Wert ab.
echo $testVariable; //Gibt 5 aus.
var_dump($testVariable);

/**
 * Der Modulo-operator (%) gibt als Ergebnis die ganze Restzahlen aus.
 */
$moduloBeispiel1 = 4; //Erzeugt eine Variable mit dem Wert 4
$moduloBeispiel2 = 3; //Erzeugt eine Variable mit dem Wert 3

$ergebnis = $moduloBeispiel1 % $moduloBeispiel2;
echo $ergebnis; //Gibt 1 aus. 3 passt 1x in die vier. Rest 1 (beispiel Mathe, mit Rest runterziehen)
var_dump($ergebnis);

//Zwei Möglichkeiten Arrays zu initialisieren. Innerhalb von Arrays können typen gemischt werden
$array1 = []; //leere eckige klammern bedeuten leeres Array
$array2 = array(); //Eingebaut array Funktion gibt ein leeres Array zurück
$arrayNamen = ['Peter', 'Anton', 'Philip', 'Dieter', 'Matthias']; //Speichert einen Array mit mehreren Namen.
echo $arrayNamen[2]; //Gibt "Philip" aus, Start der Zählung auch bei php bei 0.
echo count($arrayNamen); //Gibt die gesamte Anzahl der gespeicherten Werte aus.
$arrayMixed = ['Peter', 5, 2.3, 'c', true];
var_dump($arrayMixed);
$assocArray = ['id' => 1, 'price' => 15.2, 'name' => 'Apple iPod', 'neuesArray' => [5]];
?>