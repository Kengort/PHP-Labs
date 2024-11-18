<?php
function solve($s) {
    // Указываем гласные для исключения
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    
    // Разбиваем строку на массив согласных подстрок, используя гласные как разделители
    $consonantSubstrings = preg_split('/[aeiou]/', $s);

    // Инициализируем переменную для хранения максимального значения
    $maxValue = 0;

    // Перебираем каждую согласную подстроку
    foreach ($consonantSubstrings as $substring) {
        // Вычисляем сумму значений букв подстроки
        $currentValue = array_sum(array_map(function($char) {
            return ord($char) - ord('a') + 1; // Преобразуем символ в его значение
        }, str_split($substring)));

        // Обновляем максимальное значение
        $maxValue = max($maxValue, $currentValue);
    }

    return $maxValue;
}

// Примеры использования
echo solve("zodiacs"); // Вывод: 26
echo "\n";
echo solve("strength"); // Вывод: 57
?>
