<?php

//While schleife, die 10x durchläuft

$counter = 0;
// eine while Schleife ist eine kopfgesteuerte Schleife die dann am besten verwendet wird, wenn man eine bestimmte anzahl an Durchläufen benötigt
while($counter < 10){
    echo 'Counter hat den Wert ' . $counter . PHP_EOL;
    $counter++;
}

//eine for Schleife wird dann genutzt, wenn man mit variablen Durchläufen arbeitet, z.B. Listen oder ähnliches.
for ($zaehler = 0; $zaehler < 10; $zaehler++){
    echo 'Ich bin die Nummer ' . ($zaehler+1) . PHP_EOL;
}

//do Schleifen sind fußgesteuerte Schleifen, die mindestens einmal den Code ausführen und erst danach eine prüfung machen, ob die Bedingung erfüllt sind oder nicht.
$benutzer = 0;
do {
    echo 'Ich bin Benutzer Nummer ' . ($benutzer+1) . PHP_EOL;
    $benutzer++;
}while ($benutzer < 10);
//selbes beispiel mit pre-increment
$benutzer = 0;
do {
    echo 'Ich bin Benutzer Nummer ' . ++$benutzer . PHP_EOL;
}while ($benutzer < 10);

//foreach Schleifen sind am besten geeignet um Arrays zu durchlaufen.
$testAddition = [1,2,3,4,5,6]; //erstellt ein Array mit Werten
$res = 0; //erstellt eine Variable für das Ergebnis
//Syntaxlogik: gebe mir von ARRAYNAME die WERTE heraus, solange bis ich keine Werte mehr habe
foreach ($testAddition as $value) {
    $res += $value; //pre-increment der Ergebnisse. 1. Durchlauf: 0+1, zweiter Durchlauf 1+2 usw.
}
echo 'Resultat: ' .  $res . PHP_EOL;

//Erstelle ein assoziiertes (benanntes) Array im Array.
$assocArray = [['id' => 1, 'price' => 15.2, 'name' => 'Apple iPod', 'brand' => 'Apple'], ['id' => 2, 'price' => 699.99, 'name' => 'Teures Smartphone', 'brand' => 'Samsung']];
foreach ($assocArray as $key => $value) { //Syntaxlogik: Gebe mir von ARRAYNAME solange den NAMEN der Werte sowie den WERT der Namen heraus, bis nichts übrig ist.
    echo '----- neues Produkt -----' . PHP_EOL;
    foreach ($value as $iKey => $iVal) { //Syntaxlogik: hole mir aus den verschachtelten Arrays so lange die NAMEN und die WERTE raus, bis nichts mehr übrig ist.
        if ($key === 0 && $iKey === 'id' || $key === 1 && $iKey === 'price') {
            continue; //Wie verfassen?
        }
        echo 'key: ' . $iKey . ' => ' . $iVal . PHP_EOL;
        //break; //Bricht die innere Schleife nach einem durchgang ab
        //break x; //schließt die darüberliegenden Schleifen ab. x = abzubrechende Ebenen.
    }
}
