<?php

// arbeiten mit if Anweisungen, beinhaltet if, else if und else beachte typensicher und nicht typensicher vergleichen, also == === ! !=
//$dieb = 'Link';
//$dieb = readline('Wie heißt du? ');
//
//if ($dieb != 'Link'){ //Prüft ob der Kunde der Dieb ist, der ohne Rubine zu zahlen Dinge geklaut hat!
//    echo 'Hallo, verehrter Kunde!' . PHP_EOL;
//} else{ //Wenn Link sich zu erkennen gibt: Entsprechend begrüßen!
//    echo 'HALLO!! D I E B!!!' . PHP_EOL;
//}
//var_dump((int) 'beliebiger String, anderer beliebiger String');


//$alterMensch = (int)readline('Wie alt bist du? ');
$alterMensch = 28;
//$int = (int)$alterMensch = readline('Wie alt bist du? '); // versuch eines Typecast, leider fehlgeschlagen
$int = (int)$alterMensch; //Funktionierende Variante
//echo 'DEBUG: alterMensch ist gleich ' . $alterMensch;
//var_dump($alterMensch);
if (is_int($alterMensch)) {

//Prüft, ob eine Zahl eingegeben wurde, wenn ja, gehe in die möglichen Ergebnisse rein.
    if ($alterMensch > 0 && $alterMensch <= 150) {
        if ($alterMensch <= 25) {
            echo 'Du bist ein junger Hüpfer!' . PHP_EOL;
        } elseif ($alterMensch >= 26 && $alterMensch <= 45) { //bei mehreren Bedingungen muss immer der Variablenname angegeben werden!
            echo 'Du hast schon einiges an Lebenserfahrung!' . PHP_EOL;
        } elseif ($alterMensch >= 46 && $alterMensch <= 65) { //Darauf achten dass größer bzw. kleiner als Zeichen richtig gesetzt sind.
            echo 'Ein gesundes Fittes alter! Oho!' . PHP_EOL;
        } else { //Wenn keines der angegebenen Fällen zutrifft, dann ist der Benutzer im Alter des Ruhestandes.
            echo 'Ich wünsche dir einen angenehmen Ruhestand!' . PHP_EOL;
        }
    } else {// Sollte keine gültige Zahl eingegeben worden sein dann wird ein Fehler gemeldet.
        echo 'Du hast eine ungültige Zahl eingegeben! Bitte starte das Programm neu und gib eine Zahl von 1 bis 150 ein!' . PHP_EOL;
        //return 1;
        exit(1);
    }
}

/**
// arbeiten mit switch case Anweisung. Prüfen von variable und den Default Wert
$bier = readline('Wieviele Biere hast du getrunken? ');
//echo 'Der Wert von Bier ist ' . $bier . PHP_EOL;
switch ($bier){ //In den antworten ist kein Größer gleich und ähnliches möglich.
case 3: echo 'Du hast gute Laune' . PHP_EOL;
break;
case 4: echo 'Du fängst an zu lallen' . PHP_EOL;
break;
case 5: echo 'Du bist deutlich angetrunken' . PHP_EOL;
break;
case 6: echo 'Ein schwindelgefühl tritt ein' . PHP_EOL;
break;
case 7: echo 'Wir rufen einen Krankenwagen' . PHP_EOL;
// case >=7 nicht möglich...
break;
default: echo 'Du hast eine entspannte Runde mit den Jungs' . PHP_EOL;
}**/
// arbeiten mit switch case Anweisung. Prüfen von variable und den Default Wert
$bier = readline('Wieviele Biere hast du getrunken? ');
//echo 'Der Wert von Bier ist ' . $bier . PHP_EOL;
switch ($bier){ //In den antworten ist kein Größer gleich und ähnliches möglich.
    case 1:
    case 2: echo 'Du hast eine entspannte Runde mit den Jungs' . PHP_EOL;
        break;
    case 3: echo 'Du hast gute Laune' . PHP_EOL;
        break;
    case 4: echo 'Du fängst an zu lallen' . PHP_EOL;
        break;
    case 5: echo 'Du bist deutlich angetrunken' . PHP_EOL;
        break;
    case 6: echo 'Ein schwindelgefühl tritt ein' . PHP_EOL;
        break;
    default: echo 'Wir rufen einen Krankenwagen' . PHP_EOL;
}
?>