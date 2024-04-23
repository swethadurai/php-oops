<?php
//parent class
 class person{
    protected $name;
    protected $age;
    protected function showperson($n,$a){
        echo "<br>name".$this->name=$n;
        echo "<br>age".$this->age=$a;

    }

 }

 //child class
 class Employee extends person{
        private $salary;
        private $position;
        public function show($n,$a,$s,$p){
            $this->showperson($n,$a);
            echo "<br>salary:".$this->salary=$s;
            echo "<br>position:".$this->position=$p;
        }
 }
 $ob=new Employee("swe",33,440000,"manager");
$ob->show("swe",33,440000,"manager");
?>