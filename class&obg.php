<?php
   class hi{
    function sayHi(){
        echo "hello user!!!1";
    }
   }

   $obj =new hi;
   $obj->sayHi();


   //class2

   class users{
    //member variables
    public $id;
    public $name;
    public $email;
    public $phone;

    //member function
    function setdata($i,$n,$e,$p){
        $this->id=$i;
        $this->name=$n;
        $this->email=$e;
        $this->phone=$p;

    }
    function getdata(){
        return "ID :".$this->id."<br>NAME:".$this->name."<br>email:". $this->email."<br> PHONE:".$this->phone;

    }
   }

   $user1= new users;
   $user1->setdata(1,"swe","swe@gmail.com","737373737737");
   echo $user1->getdata();
?>