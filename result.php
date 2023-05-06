<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = $_POST["numbers"];
    $totalNumbers = (int)$_POST["totalNumbers"];
    if (count($numbers) !== $totalNumbers) {
        echo "Помилка. Введена неправильна кількість елементів.<br>";
        exit();
    }
    $sum = 0;
    echo "Введені числа: ";
    foreach ($numbers as $number) {
        $number = (int)$number;
        if ($number < 0) {
            break;
        }
        echo $number . "<br>";
        $sum += $number;
    }
    echo "Сума чисел: " . $sum . "<br>";
}
?>
<a href="index.php">Головна</a>
