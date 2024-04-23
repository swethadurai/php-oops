<?php
class user{
    private $id ;
    private $name;
    private $email;
    public function setid($id){
      $this->id=$id;
    }
    public function getid(){
        return $this->id;
    }
}
$user=new user();
$user->setid(233);
echo $user->getid();
 
?>