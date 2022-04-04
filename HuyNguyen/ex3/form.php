<?php
require_once "replace.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>REPLACE STRING</title>
</head>

<body>

    <form action="" method="POST">
        <div class="container">
            <div class="title">
                REPLACE STRING
            </div>
            <p>
                Input:
            </p>
            <input
            type="text" 
            name="input_text" 
            class="string"
            value="<?php echo $input_text;?>"
            >
            <div class="flex">
                <div>
                    <label for="find" class="size">Find:</label>
                    <input
                    type="text" 
                    placeholder="Find Text..." 
                    class="string" 
                    name="find_text"
                    value="<?php echo $find_text;?>"
                    >
                </div>
                <div>
                    <label for="replace" class="size">replace:</label>
                    <input
                    type="text" 
                    placeholder="Replace..." 
                    class="string" 
                    name="replace_text"
                    value="<?php echo $replace_text;?>"
                    >
                </div>
            </div>
            <input type="text" class="string" value="<?php echo $output_text; ?>">
            <div class="btn">
                <input type="submit" value="Submit" class="submit">
            </div>
        </div>
    </form>

</body>

</html>