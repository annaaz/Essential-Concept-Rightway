<?php

class StaticExample {
    public static $angka = 1;
    public static function hey(){
        $str =  'Hai There' . self::$angka++."<br/>" ;
        return $str;
    }
}

echo StaticExample::$angka;
echo "<br /> <hr />";
echo StaticExample::Hey();

class  StaticIncrement{
    public $angka =1;
    public function hey(){
        $str = 'Hai There' . $this->angka++ ."<br />";
        return $str;
    }
}

$obj = new StaticIncrement;
echo $obj->hey();
echo $obj->hey();
echo $obj->hey();

echo "<br /> <hr />";
echo "<br /> <hr />";
$obj1 = new StaticExample;
echo $obj1->hey();
echo $obj1->hey();
echo $obj1->hey();

$obj2 = new StaticExample;
echo $obj2->hey();
echo $obj2->hey();
echo $obj2->hey();


