<?php

$size = $argv [1];
$maxNumber = $size ** 2;
$number = 1;
$array = [];

/*первая строка массива*/
for ($column = 0; $column < $size; $column++) {
    $array[0][$column] = $number;
    $number++;
}
/*последний столбец массива */
for ($row = 1; $row < $size; $row++) {     //начинаем с $row=1, потому что 0-строка уже заполнена
    $array[$row][$size - 1] = $number;       //$size-1 потому что индекс с 0
    $number++;
}
/*последняя строка массива*/
for ($column = $size - 2; $column >= 0; $column--) { //с $size-2 из-за 0-индекса и заполнения последнего столбца в пред.цикле
    $array[$size - 1][$column] = $number;            //и идем в обратном порядке по столбцам от предпоследнего до первого
    $number++;
}

/*первый столбец массива*/
for ($row = $size - 2; $row > 0; $row--) { //$row строго > 0, т.к. 0-строка уже заполнена; $size-2 - т.к. последняя заполнена
    $array[$row][0] = $number;            //идем в обратном порядке по строкам от предпоследней до предпервой
    $number++;
}

$row = 1;                               // стартовая позиция (1;1), ведь 0 строка и 0 столбец заполнены
$column = 1;

/*заполнение внутри*/

while ($number < $maxNumber) {
    while (empty($array[$row][$column + 1])) {  //проверяем заполненность след.ячейки по текущей строке вперед
        $array[$row][$column] = $number; /*пока след. значение пусто - заполняем текущее*/
        $number++;
        $column++;
    }
    while (empty($array[$row + 1][$column])) { //проверяем заполненность след.ячейки по текущему столбцу вперед
        $array[$row][$column] = $number;
        $number++;
        $row++;
    }
    while (empty($array[$row][$column - 1])) { //проверяем заполненность след.ячейки по текущей строке назад
        $array[$row][$column] = $number;
        $number++;
        $column--;
    }
    while (empty($array[$row - 1][$column])) { //проверяем заполненность след.ячейки по текущему столбцу назад
        $array[$row][$column] = $number;
        $number++;
        $row--;
    }
}
/*заполнение одного последнего "следующего пустого" значения, перед которым завершился прошлый цикл*/
for ($row = 0; $row < $size; $row++) {
    for ($column = 0; $column < $size; $column++) {
        if (empty($array[$row][$column])) {
            $array[$row][$column] = $number;
        }
    }
}
echo ("ARRAY:") . PHP_EOL;
print_r($array);

echo ("PRETTY LOOKING ARRAY:") . PHP_EOL;

for ($row = 0; $row < $size; $row++) {
    for ($column = 0; $column < $size; $column++) {
        echo($array[$row][$column] . "       ");
    }
    echo PHP_EOL;
}