<?php

$hiddenNumber = random_int(1, 100);
$fileWithNumber = fopen("file.txt", "w");
fwrite($fileWithNumber, ($hiddenNumber));
fclose($fileWithNumber);
$attempts = 0;

echo PHP_EOL . "There is hidden number in range (1...100). Guess the number!" . PHP_EOL;

while (1) {
    $inputNumber = (int)(readline("Enter your number: "));
    if (is_numeric($inputNumber) && $inputNumber > 0 && $inputNumber < 101) {
        if ($inputNumber < $hiddenNumber) {
            $attempts++;
            echo PHP_EOL . "Your number is less then hidden number!" . PHP_EOL;
        } elseif ($inputNumber > $hiddenNumber) {
            $attempts++;
            echo PHP_EOL . "Your number is more then hidden number!" . PHP_EOL;
        } elseif ($inputNumber === $hiddenNumber) {
            $attempts++;
            echo PHP_EOL . "You guessed right! Hidden number is " . $hiddenNumber . "." . PHP_EOL;
            echo "Number of attempts: " . $attempts . PHP_EOL;
            break;
        }
    } else {
        echo PHP_EOL . "Your input must be number in range (1...100)!" . PHP_EOL;
    }
}


