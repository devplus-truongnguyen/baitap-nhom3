<?php
    require_once "acreage.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acreage</title>
</head>
<body>
    <h1>Tính Diện Tích</h1>
    <form action="" method="POST">
    <label for="radius">Radius</label>
    <input type="text" name="radius" placeholder="Input number....">
    <p>
        Result : <?php echo $acreage->Acreage(); ?>
    </p>
    <input type="submit" value="Submit">
    </form>
    
</body>
</html>