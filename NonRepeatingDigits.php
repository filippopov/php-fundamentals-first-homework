<?php
$inputNumber = 1000;
if ($inputNumber < 100) {
    echo 'no';
} else {
    $limit = $inputNumber >= 1000 ? 1000 : $inputNumber;
    for ($i = 100; $i <= $limit; $i++) {
        $stringResult = (string) $i;
        $firstNumber = $stringResult[0];
        $secondNumber = $stringResult[1];
        $thirdNumber = $stringResult[2];
        if ($firstNumber != $secondNumber && $firstNumber != $thirdNumber && $secondNumber != $thirdNumber) {
            echo $i . ' ';
        }
    }
}
?>