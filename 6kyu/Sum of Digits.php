<?php
function digital_root($number): int
{
    // Пока число имеет больше одной цифры
    while ($number >= 10) {
        // Суммируем цифры числа
        $number = array_sum(str_split((string)$number));
    }
    
    // Возвращаем итоговое однозначное число
    return $number;
}

// Примеры использования
echo digital_root(16);      // Вывод: 7
echo "\n";
echo digital_root(942);     // Вывод: 6
echo "\n";
echo digital_root(132189);  // Вывод: 6
echo "\n";
echo digital_root(493193);  // Вывод: 2
?>
