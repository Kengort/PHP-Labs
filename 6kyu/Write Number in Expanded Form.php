<?php
function expanded_form(int $n): string {
    // Преобразуем число в строку для работы с каждой цифрой отдельно
    $digits = str_split((string)$n);
    $length = count($digits);

    // Преобразуем каждую цифру в ее разрядное значение
    $expanded = [];
    foreach ($digits as $index => $digit) {
        if ($digit !== '0') {
            // Разрядное значение = цифра * (10^(количество оставшихся цифр - 1))
            $expanded[] = $digit * pow(10, $length - $index - 1);
        }
    }

    // Соединяем разрядные значения через " + " и возвращаем
    return implode(' + ', $expanded);
}

// Пример использования
echo expanded_form(12);    // Вывод: "10 + 2"
echo "\n";
echo expanded_form(45);    // Вывод: "40 + 5"
echo "\n";
echo expanded_form(70304); // Вывод: "70000 + 300 + 4"
?>
