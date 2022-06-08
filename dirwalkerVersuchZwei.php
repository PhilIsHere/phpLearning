<?php
/**
 * Schritt 1: User soll gültigen Pfad angeben, bzw soll geprüft werden
 * Schritt 2: Inhalt des Pfades soll gespeichert werden (Array?)
 * Schritt 3: Dot-Folder sollen aus dem Array entfernt werden
 * Schritt 4: Wenn File --> Print, wenn Ordner --> als String speichern
 * Schritt 5: Ordnerstrings an den Userpfad anhängen und bei Schritt 1 neu beginnen
 * @param $ordnername
 * $foldername ist das Verzeichnis, was der User rekursiv angezeigt haben möchte. Akzeptiert wird ausschließlich ein gültiger Verzeichnispfad, auf den der User Zugriffsrechte hat.
 */


function dirwalker($ordnername){
    if(is_dir($ordnername)){
        echo 'Ordner gefunden! Starte dirwalker für Verzeichnis: '.$ordnername.PHP_EOL;
        //Lösche dot-Ordner aus array, falls vorhanden. array_diff gibt nur werte raus, die sich unterschieden. In dem Fall ist der Vergleichsarray selbst erstellt array('..', '.')
        //Quelle: Scandir Notes https://www.php.net/manual/de/function.scandir.php
        $arbeitsordner = array_diff(scandir($ordnername), array('..', '.'));
        echo 'Inhalt von ' . $ordnername.':'.PHP_EOL;
        //Gehe den Arbeitsordner durch
        foreach ($arbeitsordner as $value){
            //Wenn VALUE gleich eine Datei ist, soll sie ausgegeben werden.
            if (is_file($ordnername.'/'.$value)){
                echo $value . PHP_EOL;
            }else{ //Wenn VALUE ein Ordner ist, dann kommt der Moonwalker...
                echo 'Are you okay Annie?' . PHP_EOL;
                //...und klebt den VALUE-Wert an den Ursprünglich vom User angegebenen Pfad und startet dirwalker erneut.
                dirwalker($ordnername.'/'.$value);
            }
        }
    }else{
        echo 'Der angegebene Ordner wurde nicht gefunden. Starte das Programm neu und gib ein gültiges Verzeichnis an!' . PHP_EOL;
    }
}dirwalker('/home/phil/PhpstormProjects/phpLearning/dirwalker');
?>