<?php

/*1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без
остатка.*/
$x = 0;
while ($x <= 100) {
    $x++;
    if ($x%3==0)
    echo $x . '</br>';    
}


/*2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат
выглядел так:
0 – это ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.*/
$x = 0;
do {
    if ($x === 0) {
       echo $x . ' - это ноль. </br>'; 
    } else if ($x % 2 == 0) {
        echo $x . ' - четное число. </br>'; 
    } else {
        echo $x . ' - нечетное число. </br>'; 
    }
    $x++;
}
while ($x<=10);

/*3. 
ДОДЕЛАТЬ
Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в
качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин.
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
Рязанская область…(названия городов можно найти на maps.yandex.ru)*/
$city = array ("Московская область" => "Москва",
              "Московская область" => "Зеленоград",
              "Московская область" => "Клин",
              "Ленинградская область" => "Санкт-Петербург",
              "Ленинградская область" => "Всеволожск",);
/*$keys = array_keys($city);
print_r($keys);*/
$c = implode (", ",$city);
echo $c . '.';

/*4.
ДОДЕЛАТЬ
Объявить массив, индексами которого являются буквы русского языка, а значениями –
соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’,
‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.*/
function my_translit($string) {
    $array = array ('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'de', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
                    'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
                    'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
                    'ь' => '\'', 'ы' => 'y', 'ъ' => '\'', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya');
    
    foreach ($array as $index => $val);
    echo $string = "$index = $val </br>";
}
my_translit("мама привет");

/*5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает
видоизмененную строчку.*/
function string($string) {
    $b = explode(' ',$string); //разбиваем строку на элементы
    $c = implode('_',$b);      //преобразуем массив в строку, добавляя _
    echo $c;                   //выводим на экран
}
string('Mama go to home');

/*6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать,
как можно реализовать меню с вложенными подменю? Попробовать его реализовать.*/
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <ul style="display: none;">
      <li>main</li>
      <li>about</li>
      <li>contact</li>
    </ul>
      <?php
        $menu = array('<li>main</li>',
                      '<li>about</li>',
                      '<li>contact</li>',
                      );
       $len_menu = count ($menu);
        for ($i=0; $i < $len_menu; $i++) {
          echo $menu[$i] . '<br>';
        }
      ?>
  </body>
</html>

/*7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. Выглядеть это
должно так:
for(…){// здесь пусто}*/
for ($i=0; $i<10; print $i, $i++) {/*здесь пусто*/}

/*8. 
ДОДЕЛАТЬ                  
*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».*/
$city = array ("moscow", "zelenograd", "klin", "spb", "vsevologck",);
$c = implode (", ",$city);
echo $c . '.';









