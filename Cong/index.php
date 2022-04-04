<?php 
if($_SERVER['REQUEST_METHOD']== "POST"){
    if(empty($_POST['num1Inserted'])){
        $error_1 = 'Nhập thiếu kìa má';
    }
    if(empty($_POST['num2Inserted'])){
        $error_2 = 'Nhập thiếu kìa má';
    }
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise</title>
        <style>
            html{
                background-color: #FDDCF4;
            }
            input {
                display: flex;
                background: transparent;
                width: 200px;
                padding: 1em;
                margin-bottom: 2em;
                border: none;
                border-left: 1px solid white;
                border-top: 1px solid white;
                border-radius: 5000px;
                backdrop-filter: blur(5px);
                box-shadow: 4px 4px 60px rgba(0,0,0,0.2);
                color: #000;
                font-family: Montserrat, sans-serif;
                font-weight: 500;
                transition: all 0.2s ease-in-out;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            }
            input:hover{
                background: rgba(255,255,255,0.1);
                box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
            }
            input:focus{
                background: rgba(255,255,255,0.1);
                box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
            }
            button {
                font-weight: bold;
                font-size: 14px;
                /* letter-spacing: 16px; */
                text-decoration: none;
                color: #38908F;
                background-color: #FBDD97;
                display: inline-block;
                padding: 5px 20px 5px 20px;
                position: relative;
                border: 2px solid #957DAD;
                border-radius: 10px;
            }
            .form-b3-container {
            width: 800px;
            border: 1px solid #ccc;
            }
            .form-b3-container .form-b3-title {
                display: block;
                padding: 10px;
                background-color: #4682B4;
                display: flex;
                justify-content: center;
            }
            .form-b3-container .form-b3 {
            padding: 20px 20px;
            }
        </style>
    </head>
<body>
    <?php 

    class Calc {

        public $num1;
        public $num2;
        public $cal;

        public function __construct($num1Inserted, $num2Inserted, $calInserted) {
            $this->num1 = $num1Inserted;
            $this->num2 = $num2Inserted;
            $this->cal = $calInserted;
        }

        public function calcMethod() {
        switch ($this->cal) {
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;

            default:
                $result = "Cant not calculate";
                break;
        }
        return $result;
        }

    }

    $num1 =  isset($_POST['num1Inserted']) ? $_POST['num1Inserted']:'';
    $num2 =  isset($_POST['num2Inserted']) ? $_POST['num2Inserted']:'';
    $cal = isset($_POST['calInserted']) ? $_POST['calInserted']:'';

    $calculator = new Calc($num1, $num2, $cal);

    
    
    ?>
    <h2>Exercise 1</h2>
  <form action="index.php" method="POST">
      <input type="text" name="num1Inserted">
    
      <input type="text" name="num2Inserted">
        

      <select name="calInserted">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divine</option>
      </select>
      <button type="submit">Calculate</button>
  </form>
  
<p>Result: 
    <?php 
        if(isset($error_1)) echo $error_1;

        elseif(isset($error_2)) echo $error_2;

        else
        echo $calculator->calcMethod(); 
    ?>
</p> 

<?php
    class Circle
    {
        private $radius;

        public function __construct($radius)
        {
            $this->radius = $radius;
        }


        public function Area()
        {
            $area =  3.14 * (int)$this->radius  * (int)$this->radius;
            return $area;
        }
    }
    $radius = isset($_POST['radius']) ? $_POST['radius'] : '';
    $circle = new Circle($radius);
    $rs_area = $circle->Area();





    ?>

<h2>Exercise 2</h2>



<form action="index.php" method='POST'>
    <h3>Circle</h3>
    <label for="">Radius: </label><br>
    <input type="text" placeholder="Enter radius" name="radius" value="<?php echo isset($_POST['radius']) ?  $_POST['radius'] : '';  ?>">
    <?php echo isset($radiusErr) ?  $radiusErr : ''; ?>
    <?php echo isset($radiusCheck) ?  $radiusCheck : ''; ?>

    <br>
    <label for="">Areas: </label><br>

    <input type="text" name="area" value="<?php echo isset($radiusErr) || isset($radiusCheck) ? 0 :  $rs_area ?>">

    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        if (empty($_POST["radius"])) {
            $radiusErr = "radius is required";
        }

        if (!is_numeric(isset($_POST["radius"]) ? $_POST["radius"] : '')) {
            $radiusCheck = "Please enter the number ";
        }
    }
    ?>

    <input type="submit" value="Submit" style="background:  blue; color:white; margin-top:10px" />

</form>



<?php

class Replace
{
    public function replaceText($input_text, $find_text, $replace_text)
    {
        $output_text = str_replace($input_text, $find_text, $replace_text);
        return $output_text;
    }
}



$input_text = isset($_POST['input_text']) ? $_POST['input_text'] : '';
// echo "input_text: " . $input_text;
$find_text = isset($_POST['find_text']) ? $_POST['find_text'] : '';
// echo "find_text: " . $find_text;
$replace_text = isset($_POST['replace_text']) ? $_POST['replace_text'] : '';
// echo "replace_text: " . $replace_text;


$replace = new Replace();
$output_text = $replace->replaceText($find_text, $replace_text, $input_text);
// echo $output_text;

echo "<br>";


?>

<h2>Exercise 3</h2>
    <div class=" form-b3-container">
        <div class="form-b3-title" style="text-transform: upper-;">Replace String</div>
        <form action="index.php" method="post" class="form-b3">
            <div class="form-group">
                <label for="">Input</label> <br>
                <textarea placeholder="Input somethings mf" class="input_text" name="input_text" style="width: 100%;"> <?php echo $input_text; ?></textarea>
            </div>
            <div class="form-group center " style="display: flex; position:relative; top:10px; justify-content:center;">
                <label for="">Find: </label>
                <input type="text" name="find_text" value="<?php echo $find_text ?>" style="margin-right:10px; margin-left:2px;">
                <label for="">Replace: </label>
                <input type=" text" name="replace_text" value="<?php echo $replace_text ?>" style=" margin-left:2px;">


            </div>
            <div class=" form-group">
                <label for="">Result</label> <br>
                <textarea placeholder="Here your result" class="output_text" name="output_text" style="width: 100%;"><?php echo $output_text; ?></textarea>
            </div>
            <div class="form-group" style="display: flex; justify-content:center; ">
                <input type="submit" value="Submit" style="margin-top:10px; background-color: #C0C0C0; border:none;">

            </div>

        </form>

    </div>

</body>

</html>