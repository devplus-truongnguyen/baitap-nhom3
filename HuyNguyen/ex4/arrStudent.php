<?php
$arrSV = array(
    "PHP01" => array(
        'name' => "Nguyen Thanh Huy",
        'scoreCSS' => 10,
        'scorePHP' => 10
    ),
    "PHP02" => array(
        'name' => "Nguyen Ba Thanh",
        'scoreCSS' => 9,
        'scorePHP' => 9
    ),
    "PHP03" => array(
        'name' => "Ngo Ba Kha",
        'scoreCSS' => 8,
        'scorePHP' => 8
    ),
    "PHP04" => array(
        'name' => "Phu Le",
        'scoreCSS' => 7,
        'scorePHP' => 7
    ),
    "PHP05" => array(
        'name' => "Minh Hung",
        'scoreCSS' => 6,
        'scorePHP' => 6
    ),
);
//in ra mảng những sinh viên có trong tên chữ a
foreach($arrSV as $key => $value){
    $name = $arrSV[$key]['name'];
    if(strpos($name,'a') > -1){
        echo $name."<br>";
    }
}
echo "<hr>";
//in ra lớp có sinh viên có điểm css cao nhất
$max = -1;
$key_max = "";

foreach($arrSV as $key => $value){
    $score = $arrSV[$key]['scoreCSS'];
    if ($score > $max) {
        $max = $score;
        $key_max = $key;
    }
}
echo $key_max.'<hr>';
foreach($arrSV[$key_max] as $key => $value){
    echo $key.':'.$value."<br>";
}
echo "<hr>";

//display the student list in a ascending order according to php score
$arr1 = [];

foreach($arrSV as $key => $value){
    $arr1[$key] = $arrSV[$key]["scorePHP"];
}

asort($arr1);

$arr2 = [];

foreach($arr1 as $key => $value) {
    $arr2[$key] = $arrSV[$key];
}
$arrSV = $arr2;

foreach($arrSV as $key => $value){
    foreach($value as $key1 => $value1){
        echo $key1.'-'.$value1.'<br>';
    }
}


