<?php
class ReplaceString
{
    public $input;
    public $find;
    public $replace;

    function __construct($input, $find, $replace)
    {
        $this->input = $input;
        $this->find = $find;
        $this->replace = $replace;
    }

    function stringReplace()
    {
        return str_replace($this->find, $this->replace, $this->input);
    }
}

$input = "";
$find = "";
$replace = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'] ? $_POST['input'] : "";
    $find = $_POST['find'] ? $_POST['find'] : "";
    $replace = $_POST['replace'] ? $_POST['replace'] : "";

    $replaceString = new ReplaceString($input, $find, $replace);;

    $result = $replaceString->stringReplace();
}
