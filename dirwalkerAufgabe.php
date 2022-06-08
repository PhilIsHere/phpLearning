<?php
function dirwalker($foldername){
    //Prüft ob der Ordner existiert, wenn ja --> gehe rein
    if(chdir($foldername) === true){
        echo 'Ordner gefunden! Starte dirwalker!' . PHP_EOL;
        //Hole den Inhalt des Ordners und speichere es als Array in $files
        $files = scandir($foldername);
        foreach ($files as $key => $value){
            //Wenn Ordner, dann gehe rein
            if (is_dir($foldername.'/'.$value) && !($value === "." || $value === "..")){
                $nextdir[$key] = $foldername.$value;
                echo 'Nextstring ist: '. $nextdir . PHP_EOL;
                echo 'Inhalt von: ' . $foldername . PHP_EOL;
                foreach ($files as $item) {
                    echo $item . PHP_EOL;
                }
                foreach ($files as $key => $index){
                    if ($index != "." || $index != "..") {
                        echo 'HALLO' . PHP_EOL;
                        //unset($files[$index]);
                        foreach ($files as $item) {
                            echo $item . PHP_EOL;
                        }
                    }
                }
                dirwalker($nextdir);
            }

        }


    }else{
        echo 'Der Ordner wurde leider nicht gefunden. Bitte starte das Programm neu und gib ein gültiges Verzeichnis an!' . PHP_EOL;
    }

}
dirwalker('/home/phil/PhpstormProjects/phpLearning/dirwalker/');
?>