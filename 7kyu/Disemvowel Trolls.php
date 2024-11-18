<?php
function disemvowel($string) {
    // Удаляем гласные (как строчные, так и прописные) с помощью регулярного выражения
    return preg_replace('/[aeiouAEIOU]/', '', $string);
}

// Пример использования
$input = "This website is for losers LOL!";
$result = disemvowel($input);
echo $result; // Вывод: "Ths wbst s fr lsrs LL!"
?>
