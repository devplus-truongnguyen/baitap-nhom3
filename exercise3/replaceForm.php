<html>

<body>
    <h1>Replace String</h1>
    <form method="post" action="replaceForm.php">
        Input: <input type="text" name="input"><br>
        Find: <input type="text" name="find">
        Replace: <input type="text" name="replace"><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    include 'replace.php';
    echo $result;

    ?>

</body>

</html>