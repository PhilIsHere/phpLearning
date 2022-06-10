<?php
//Fibonacci Folge rekursiv berechnen 0 1 1 2 3 und berechne die Fibunacci-Zahl von 5 und 30

//function fibonacciFolge($fiboZahl){
//    if ($fiboZahl > 0) {
//        $fiboZahl--;
//        echo 'fiboZahl ist jetzt ' . $fiboZahl;
//        fibonacciFolge($fiboZahl);
//    }
//
//}
//$fiboZahl = fibonacciFolge(readline("Welche Zahl soll berechnet werden? "));
//fibonacciFolge(30);

// Die ersten beiden Zahlen können nicht berechnet werden. Sie sind vorgegeben

//function fibonacci(int $number): int {
//    if ($number === 0) {
//       return 0;
//    } elseif ($number === 1) {
//        return 1;
//    } else {
//        return (fibonacci($number - 1) + fibonacci($number - 2));
//    }
//}
//  (if-Anweisung) ? wenn true : wenn false;
//function fibonacci(int $number): int {
//    return ($number < 2) ? $number : (fibonacci($number - 1) + fibonacci($number - 2));
//}
//$startTime = time();
//echo fibonacci(39) . ' nach ' . (time() - $startTime) . ' s' . PHP_EOL;

//for ($i = 0; $i <= 39; $i ++) {
//    $startTime = time();
//    echo fibonacci($i) . ' nach ' . (time() - $startTime) . ' s' . PHP_EOL;
//}

function fibonacci(int $eingabe){
    $fibominuseins = ($eingabe-1);
    $fibominuszwei = ($eingabe-2);
    $result = 0;
    if($eingabe > 2){
            $result += $fibominuseins+$fibominuszwei;
        }
} fibonacci(5);