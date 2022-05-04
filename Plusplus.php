<?php

class A
{
    
}

class B
{
    
}

trait Tr
{

    function a($param)
    {
        echo $param;
    }

}

trait Tr2
{

    function b($param)
    {
        echo $param;
    }

}

class Plusplus extends A
{
    use Tr, Tr2;

    public function increaseByOne($param)
    {
        $this->a();
        $this->b();
    }

}

interface Intrfc
{
    
}

$num = 5;
//$num2 = 9;
//$num3 = $num1++ + ++$num2;
//echo $num3;
//echo $num1;
////echo '<br>';
////echo $num;
$pp = new Plusplus();
$pp->increaseByOne(++$num);
