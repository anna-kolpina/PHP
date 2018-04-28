<?php

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
значения. Затем написать скрипт, который работает по следующему принципу:
a. если $a и $b положительные, вывести их разность;
b. если $а и $b отрицательные, вывести их произведение;
c. если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/
$a = -5;
$b = -1;
if ($a >= 0 && $b >= 0 ) {
    echo $result = $a - $b;
}
    else if ($a < 0 && $a < 0) {
        echo $result = $a * $b;
    }
        else echo $result = $a + $b;
        
/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return.*/

function sum($x,$y) {
    return $x+$y;
}
$z = sum(5,6);
echo $z . '<br>';

function div($x,$y) {
    return $x/$y;
}
$z = div(18,6);
echo $z . '<br>';

function sub($a,$b) {
    return $a-$b;
}
$z = sub(10,6);
echo $z . '<br>';

function mul($a,$b) {
    return $a*$b;
}
$z = mul(2,7);
echo $z . '<br>';


/*  4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где
$arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
переданного значения операции выполнить одну из арифметических операций (использовать
функции из пункта 3) и вернуть полученное значение (использовать switch).*/
function sum($arg1,$arg2) {
                return $sum = $arg1+$arg2;
                }
function div($arg1,$arg2) {
                return $div = $arg1/$arg2;
                }
function sub($arg1,$arg2) {
                return $sub = $arg1-$arg2;
                }
function mul($arg1,$arg2) {
                return $mul = $arg1*$arg2;
                }
$operation = '';
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
          case 'сложение';
            echo sum($arg1,$arg2);
            break;
          case 'деление';
            echo div($arg1,$arg2);
            break;
          case 'разность';
            echo sub($arg1,$arg2);
            break;
          case 'умножение';
            echo mul($arg1,$arg2);
            break;
          default;
            echo 'что-то не так';
            break;
    }
}
$result = mathOperation(3, 3, 'сложение');
echo $result;

/*  5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
текущий год в подвале при помощи встроенных функций PHP.*/
echo date("d.m.y");











