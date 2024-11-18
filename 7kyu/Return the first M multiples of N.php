<?php
function multiples($m, $n) {
    // Инициализация пустого массива для хранения результатов
    $multiples = [];

    // Генерация первых m кратных числа n
    for ($i = 1; $i <= $m; $i++) {
        $multiples[] = $i * $n;
    }

    return $multiples;
}

// Пример использования
$m = 3;
$n = 5.0;
$result = multiples($m, $n);

// Вывод результата
print_r($result);
?>
