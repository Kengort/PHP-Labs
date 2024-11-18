<?php
function sum_intervals(array $intervals): int
{
    if (empty($intervals)) {
        return 0;
    }

    // Сортируем интервалы по началу, а затем по концу
    usort($intervals, function ($a, $b) {
        return $a[0] <=> $b[0] ?: $a[1] <=> $b[1];
    });

    $merged_intervals = [];
    $current_interval = $intervals[0];

    foreach ($intervals as $interval) {
        // Если интервалы пересекаются или соприкасаются, объединяем их
        if ($interval[0] <= $current_interval[1]) {
            $current_interval[1] = max($current_interval[1], $interval[1]);
        } else {
            // Добавляем текущий интервал в список и обновляем текущий
            $merged_intervals[] = $current_interval;
            $current_interval = $interval;
        }
    }

    // Добавляем последний интервал
    $merged_intervals[] = $current_interval;

    // Считаем сумму длин всех объединённых интервалов
    $total_length = 0;
    foreach ($merged_intervals as $interval) {
        $total_length += $interval[1] - $interval[0];
    }

    return $total_length;
}

// Примеры использования
echo sum_intervals([[1, 2], [6, 10], [11, 15]]) . "\n"; // 9
echo sum_intervals([[1, 4], [7, 10], [3, 5]]) . "\n"; // 7
echo sum_intervals([[1, 5], [10, 20], [1, 6], [16, 19], [5, 11]]) . "\n"; // 19
echo sum_intervals([[0, 20], [-100000000, 10], [30, 40]]) . "\n"; // 100000030
?>