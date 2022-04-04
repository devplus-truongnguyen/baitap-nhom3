<html>

<body>
    <h1>Circle</h1>
    <form method="post" action="circleForm.php">
        Supercifies: <input type="number" name="supercifies"><br>
        Radius: <input type="number" name="radius"><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    include 'circle.php';
    echo $result;
    ?>

</body>

</html>