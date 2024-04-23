<?php
 interface test{
    const A='100';
    public function value();

 }
 interface test1{
    const B='900';
    public function value();

 }

 class main1 implements test{
    public function value(){
        echo test::A;
    }
 }

 $obgg=new main1();
 $obgg->value()
?>