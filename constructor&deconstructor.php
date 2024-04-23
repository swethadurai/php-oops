<?php
  class person{

    //member variable
    private $fname;

    //constructor method  
    function __construct($fname){
        echo "the class ". __CLASS__." initialized";//MAGIC CONSTANT __CLASS__
        $this->fname=$fname;

    }
    function __destruct(){
        echo "<br>the class person destroyed";

    }
    function showname(){
        echo "<br>name is ".$this->fname;
    }
    function add($a,$b){
      return ($a+$b);
    }
  }
  $obg=new person(" swetha durai");
  $obg->showname();
echo "<br>sum =". $obg->add(2,5);
//unset($obj);//destroy the object explicitly


?>