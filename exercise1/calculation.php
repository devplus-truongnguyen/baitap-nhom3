<?php
class Calculation
{
    public $number1;
    public $number2;
    public $operation;

    function __construct($number1, $number2, $operation)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operation = $operation;
    }

    function plus()
    {
        return $this->number1 + $this->number2;
    }

    function minus()
    {
        return $this->number1 - $this->number2;
    }

    function multiply()
    {
        return $this->number1 * $this->number2;
    }

    function divide()
    {
        return $this->number1 / $this->number2;
    }
}

$number1 = 0;
$number2 = 0;
$operation = "+";
$result = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'] ? $_POST['number1'] : 0;
    $number2 = $_POST['number2'] ? $_POST['number2'] : 0;
    $operation = $_POST['operation'];

    $calculation = new Calculation($number1, $number2, $operation);

    if (empty($number1) || empty($number2)) {
        $result = "Please input a number";
    }

    switch ($operation) {
        case '+':
            $result = $calculation->plus();;
            break;
        case '-':
            $result = $calculation->minus();
            break;
        case '*':
            $result = $calculation->multiply();
            break;
        case '/':
            if ($number2 == 0) {
                $result = "Syntax error";
            } else {
                $result = $calculation->divide();
            }
            break;
    }
}
