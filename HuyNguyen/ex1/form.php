<?php
require_once "caculator.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caculator</title>
</head>
<body>
    <form action="form.php" method="POST">
        <p>
            First Number:
            <input type="text" name="number1">
        </p>
        <p>
            Second Number:
            <input type="text" name="number2">
        </p>
        <p>
            Oparation
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </p>
        <p>
            <?php echo $caculator->caculator() ?>
        </p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>