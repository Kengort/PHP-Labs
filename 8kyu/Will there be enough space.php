<?php
function enough($cap, $on, $wait) {
    // Вычисляем количество оставшихся мест на автобусе
    $available_space = $cap - $on;

    // Если всех пассажиров можно разместить, возвращаем 0
    if ($available_space >= $wait) {
        return 0;
    }

    // Если места недостаточно, возвращаем количество пассажиров, которые не помещаются
    return $wait - $available_space;
}

// Примеры использования:
echo enough(10, 5, 5); // Вывод: 0
echo "\n";
echo enough(100, 60, 50); // Вывод: 10
?>