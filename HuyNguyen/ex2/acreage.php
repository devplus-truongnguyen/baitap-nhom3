<?php
    $radius = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $radius = $_POST['radius'];
    }
    class Acreage {
        private $radius;

        public function __construct($radius)
        {
            $this->radius = $radius;
        }

        public function Acreage(){
            $result = 3.14*(int)$this->radius*(int)$this->radius;
            return $result;
        }
    }
$acreage = new Acreage($radius);
$acreage->Acreage();
?>