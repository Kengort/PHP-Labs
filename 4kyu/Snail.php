<?php
function snail($array) {
    $result = [];

    while (count($array) > 0) {
        // Add the first row to the result
        $result = array_merge($result, array_shift($array));

        // Add the last element of each remaining row
        foreach ($array as &$row) {
            if (!empty($row)) {
                $result[] = array_pop($row);
            }
        }

        // Add the last row in reverse order, if any rows remain
        if (!empty($array)) {
            $result = array_merge($result, array_reverse(array_pop($array)));
        }

        // Add the first element of each remaining row in reverse order
        for ($i = count($array) - 1; $i >= 0; $i--) {
            if (!empty($array[$i])) {
                $result[] = array_shift($array[$i]);
            }
        }
    }

    return $result;
}

// Example usage
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r(snail($array)); // Output: [1, 2, 3, 6, 9, 8, 7, 4, 5]
?>