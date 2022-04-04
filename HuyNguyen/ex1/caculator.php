<?php
$number1 = '';
$number2 = '';
$operator = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];
}

class Caculator
{
    private $number1;
    private $number2;
    private $operator;
    private $result;

    public function __construct($number1, $number2, $operator)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operator = $operator;
    }
    public function caculator()
    {
        switch ($this->operator) {
            case '+':
                $result = $this->number1 + $this->number2;
                break;
            case '-':
                $result = $this->number1 - $this->number2;
            case '*':
                $result = $this->number1 * $this->number2;
                break;
            case '/':
                $result = $this->number1 / $this->number2;
                break;
                default :
                $result = 'bạn k thể thực thi';
        }
        return $result;
    }
}

$caculator = new Caculator($number1, $number2, $operator);
$caculator->caculator();
