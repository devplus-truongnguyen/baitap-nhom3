<html>
<link rel="stylesheet" href="../style.css" />

<body>
    <div class="calculationForm">
        <h1>Calculation</h1>
        <form method="post" action="calculationForm.php">
            First Number: <input type="number" name="number1"><br>
            Second Number: <input type="number" name="number2"><br>
            Operation:
            <select name="operation" id="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>

        <?php include 'calculation.php';
        echo $result;
        ?>
    </div>
</body>

</html>