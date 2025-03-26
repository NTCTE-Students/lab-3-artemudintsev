<?php
$table = [
    ["Имя", "Возраст", "Город"],
    ["Иван", 25, "Москва"],
    ["Анна", 30, "Санкт-Петербург"],
    ["Петр", 22, "Казань"]
];

echo "<table border='1'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";