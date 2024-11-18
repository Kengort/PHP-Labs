<?php
function is_solved(array $board): int {
    // Проверяем строки на победу
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) {
            if ($board[$i][0] === 1) return 1; // "X" выиграл
            if ($board[$i][0] === 2) return 2; // "O" выиграл
        }
    }

    // Проверяем столбцы на победу
    for ($i = 0; $i < 3; $i++) {
        if ($board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i]) {
            if ($board[0][$i] === 1) return 1; // "X" выиграл
            if ($board[0][$i] === 2) return 2; // "O" выиграл
        }
    }

    // Проверяем диагонали на победу
    if ($board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) {
        if ($board[0][0] === 1) return 1; // "X" выиграл
        if ($board[0][0] === 2) return 2; // "O" выиграл
    }
    
    if ($board[0][2] === $board[1][1] && $board[1][1] === $board[2][0]) {
        if ($board[0][2] === 1) return 1; // "X" выиграл
        if ($board[0][2] === 2) return 2; // "O" выиграл
    }

    // Проверяем, есть ли пустые клетки
    foreach ($board as $row) {
        foreach ($row as $cell) {
            if ($cell === 0) {
                return -1; // Игра не закончена
            }
        }
    }

    // Если нет победителя и нет пустых клеток, это ничья
    return 0; // Ничья (cat's game)
}

// Пример использования
$board = [
    [0, 0, 1],
    [0, 1, 2],
    [2, 1, 0]
];

$result = is_solved($board);
echo $result; // Вывод: -1 (игра не закончена)
?>