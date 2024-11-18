<?php
function square_sum($numbers) {
    // Переменная для хранения суммы
    $sum = 0;
    
    // Перебор всех чисел в массиве
    foreach ($numbers as $number) {
        // Квадрат числа и добавление к сумме
        $sum += $number * $number;
    }
    
    return $sum;
}

// Пример использования
$result = square_sum([1, 2, 2]);
echo $result; // Вывод: 9
?>