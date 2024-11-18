<?php
function removeEveryOther($array) {
    return array_filter($array, function($value, $index) {
        return $index % 2 === 0;
    }, ARRAY_FILTER_USE_BOTH);
}

// Пример использования:
$input = range(1, 27); // Пример массива для проверки
$output = removeEveryOther($input);

print_r($output);
?>