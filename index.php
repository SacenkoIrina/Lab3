<?php 
//1.1. Задание №1 Цикл For
$a = 0; 
$b = 0; 
for ($i = 0; $i <= 5; $i++) { 
$a += 10; 
$b += 5; 
} 
echo "<br />Конец цикла, и значение a = " . $a . ", а значение b = " . $b; 

//Поменяйте скрипт так чтобы, выводились, дополнительно, и все промежуточные значения для a и b.
$a = 0; 
$b = 0; 
echo "Начальные значения: a = $a, b = $b<br/>"; // Вывод начальных значений
for ($i = 0; $i <= 5; $i++) { 
    $a += 10; 
    $b += 5; 
    echo "Шаг $i: a = $a, b = $b<br/>"; // Вывод промежуточных значений
} 
echo "<br/>Конец цикла, и значение a = $a, а значение b = $b"; 

//1.2. Задание №2 Цикл while
$a = 0; 
$b = 0; 
$i = 0; 
echo "Начальные значения: a = $a, b = $b<br/>"; // Вывод начальных значений
while ($i <= 5) { 
    $a += 10; 
    $b += 5; 
    echo "Шаг $i: a = $a, b = $b<br/>"; // Вывод промежуточных значений
    $i++;
} 
echo "<br/>Конец цикла, и значение a = $a, а значение b = $b <br/>"; 

//1.3. Задание №3 Определение массива
$arr = array(); // Создание пустого массива

// Генерация случайных чисел от 1 до 100 и добавление их в массив
for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1, 100);
}

// Вывод массива на экран
echo "Случайные числа: ";
foreach ($arr as $number) {
    echo $number . " ";
}
?>