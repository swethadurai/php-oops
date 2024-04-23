<?php 

abstract class persons{
  public $name;
  public $age;
  function __construct($n,$a){
    $this->name=$n;
    
    $this->age=$a;
  }
  public function sayhi(){
    echo 'abstract class';
  }
  abstract public function showdata();
  abstract public function add($x,$y);

}

class userss extends persons{
    public function showdata(){
        echo "name:".$this->name;
    }
    public function add($x,$y){
        return $x+$y;
    }

}
$ob=new userss('swe',32);
$ob->showdata();
echo $ob->add(5,7);
?>