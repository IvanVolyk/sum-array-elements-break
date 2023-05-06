<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = $_POST["number"];

    if (!is_numeric($inputNumber) || ((int)$inputNumber != $inputNumber)) {
        echo "Помилка. Введіть ціле число";
        exit();
    }

    $inputNumber = (int)$inputNumber;

    if ($inputNumber <= 0) {
        echo "Помилка. Введіть додатне число";
        exit();
    }
    echo 'Ваше число: ' . $inputNumber . '<br><hr>';
}
?>

<form action="result.php" method="post" autocomplete="off">
    <?php
    for ($i=1; $i <= $inputNumber; $i++) { 
        echo $i . ' Введіть число: <input type="text" name="numbers[]">' . '<br>';
    }
    ?>
    <input type="hidden" name="totalNumbers" value="<?php echo $inputNumber; ?>">
    <button type="submit">Відправити</button>
</form>
<br>
<br>
<br>
<a href="index.php">Головна</a>