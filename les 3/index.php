<?php
/*
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без
остатка.
*/

$n = 100;
$i = 0;
while ($i <= $n) {
if ($i % 3 === 0){
   echo $i . PHP_EOL;
}
$i++;
}

/*
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат
выглядел так:
0 – это ноль.
1 – нечётное число.
2 – чётное число.
3 – нечётное число.
…
10 – чётное число.
*/

$n = 10;
$i = 0;
while ($i <= $n) {
    if($i==0){
        echo "0 – это ноль." . PHP_EOL;
    }else{
$res = ($i & 1)? " нечётное число.": " чётное число.";
 echo $i . $res . PHP_EOL;
}
$i++;
}

/*
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в
качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин.
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
Рязанская область…(названия городов можно найти на maps.yandex.ru)
*/


/*
4. Объявить массив, индексами которого являются буквы русского языка, а значениями –
соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’,
‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает
видоизмененную строчку.
© geekbrains.ru 10
6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать,
как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. Выглядеть это
должно так:
            for(…){
                // здесь пусто
            }
8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
9. *Объединить две ранее написанные функции в одну, которая получает строку на русском
языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача
решается при конструировании url-адресов на основе названия статьи в блогах).

*/




