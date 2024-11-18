<?php
function square_digits($number) {
    // Преобразуем число в строку, чтобы работать с каждой цифрой отдельно
    $digits = str_split((string)$number);
    
    // Возводим каждую цифру в квадрат и собираем результат в массив
    $squaredDigits = array_map(function($digit) {
        return $digit * $digit;
    }, $digits);
    
    // Объединяем все квадраты в одну строку
    $result = implode('', $squaredDigits);
    
    // Преобразуем строку обратно в целое число и возвращаем результат
    return (int)$result;
}

// Пример использования
echo square_digits(9119); // Вывод: 811181
echo "\n";
echo square_digits(765); // Вывод: 493625
?>
