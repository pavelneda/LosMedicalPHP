<?php

$x = 333;
$y = 1;
echo $x + $y;

$br = "<br><br>";
echo $br;

echo "<h1 style='color:red'>PHP</h1>";

echo $x . $y . $br;

$arr = ["a", "b", "c"];
echo $arr[0]. $br;
echo count($arr) . $br;

for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i] . " ";
}
echo $br;

foreach ($arr as $elem){
    echo $elem . " ";
}
echo $br;

$hasharr = [
    'TI-01' => 25,
    'TI-02' => 23,
    'TV-01' => 24
];

foreach ($hasharr as $group => $count){
    echo "In group $group learning $count students" . $br;
}

if($x > $y){
    echo "$x > $y" . $br;
}else{
    echo "$x <= $y" . $br;
}


$x = 1;
$y = "1";

if($x === $y){
    echo "$x === $y" . $br;
}else if($x == $y){
    echo "$x == $y" . $br;
}else{
    echo "$x != $y" . $br;
}


var_dump($x . $y);
echo $br;

$str = "name, surname, age, language";
$arrFromStr = explode(", ", $str);
echo $arrFromStr[2] . $br;

$strNew = implode(", ", $arrFromStr);
echo $strNew . $br;


class People{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo(){
        return "Name: " . $this->name . " Age: " . $this->age;
    }


}

class Student extends People {
    private $group;

    public function __construct($name,$age,$group){
        parent::__construct($name, $age);
        $this->group = $group;
    }

    public function getInfo(){
        return parent::getInfo() . " Group: " . $this->group;
    }

}


// приклад ооп
$pavlo = new Student('Pavel', 18, 'TI-01');
echo $pavlo->getInfo();



class Singleton{
    private static $_instance = null;

    private function __construct(){

    }

    private function __clone(){

    }

    static public function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}

//приклад Singleton
$x = Singleton::getInstance();
$y = Singleton::getInstance();
echo $br;
echo ($x === $y) ? 'true' : 'false';






