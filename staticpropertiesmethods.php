<?php 
  class Test{
    public static $id=1;
    public static $name="swe.........................";
    public $lname;
    public $fname;
    public static function showData(){
        echo "ID:".self::$id++."<br>name:<br>".self::$name."<br>";
    }
    public function __construct($fname,$lname)
{
   $this->fname=self::filtername($fname);
   $this->lname=self::filtername($lname);
}    static function filtername($name){
        $name=trim($name);
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
        return $name;
    }
  }
   $user=new Test('haaaa/;[]-lkopkolko,5653233456789===================','pooooooooo');
   echo $user->fname.' '.$user->lname;
   echo Test::showData();
   echo Test::showData();

   //usage of static method in class


?>