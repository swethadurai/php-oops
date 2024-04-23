<?php

interface absss{
    public function calculatearea();
}

class circle implements absss{
    private $rad;

    public function __construct($r){
       $this->rad=$r;
    }
    public function calculatearea(){
        echo "area". pi()*$this->rad*$this->rad;
    }
}

class rec implements absss{
    
    private $height;
    private $weight;

    public function __construct($h,$w){
       $this->height=$h;
       $this->weight=$w;
    }
    public function calculatearea(){
        echo "area". $this->height*$this->weight;
    }

}

$cir =new circle(2);
$cir->calculatearea();
$rec=new rec(2,6);
$rec->calculatearea();
?>
