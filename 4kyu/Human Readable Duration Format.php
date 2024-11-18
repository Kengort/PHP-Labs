<?php
function format_duration(int $seconds): string
{
    if ($seconds === 0) {
        return "now";
    }

    $units = [
        "year" => 365 * 24 * 60 * 60,
        "day" => 24 * 60 * 60,
        "hour" => 60 * 60,
        "minute" => 60,
        "second" => 1
    ];

    $components = [];

    foreach ($units as $unit => $value) {
        if ($seconds >= $value) {
            $quantity = intdiv($seconds, $value);
            $seconds %= $value;
            $components[] = $quantity . " " . $unit . ($quantity > 1 ? "s" : "");
        }
    }

    if (count($components) > 1) {
        $last = array_pop($components);
        return implode(", ", $components) . " and " . $last;
    }

    return $components[0];
}

// Пример использования
echo format_duration(62); // "1 minute and 2 seconds"
?>
