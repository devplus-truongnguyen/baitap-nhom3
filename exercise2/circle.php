<?php
class Circle
{
    public $supercifies;
    public $radius;

    function __construct($supercifies, $radius)
    {
        $this->supercifies = $supercifies;
        $this->radius = $radius;
    }

    function radiusCal()
    {
        return sqrt(($this->supercifies / pi()));
    }

    function supercifiesCal()
    {
        return exp($this->radius) * pi();
    }
}

$supercifies = 0;
$radius = 0;
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $supercifies = $_POST['supercifies'] ? $_POST['supercifies'] : 0;
    $radius = $_POST['radius'] ? $_POST['radius'] : 0;

    $circle = new Circle($supercifies, $radius);

    if (empty($supercifies) && empty($radius)) {
        $result = "Please enter a number";
    } elseif (empty($radius)) {
        $result = $circle->radiusCal();
    } elseif (empty($supercifies)) {
        $result = $circle->supercifiesCal();
    } else {
        echo "";
    }
}
