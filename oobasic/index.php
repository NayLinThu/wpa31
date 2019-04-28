<?php
// Singleton Pattern
class Calculate {
    private static $_instance;
    private $value = 0;
    public static function instance() {
        if(!self::$_instance instanceof Calculate) {
            self::$_instance = new Calculate();
        }
        self::$_instance->value = 0;
        return self::$_instance;
    }
    public function __construct() {
        echo "Construct! <br>";
    }
    public function sum($value) {
        $this->value += $value;
        return $this;
    }
    public function minus($value) {
        $this->value -= $value;
        return $this;
    }
    public function multiply($value) {
        $this->value *= $value;
        return $this;
    }
    public function divide($value) {
        $this->value /= $value;
        return $this;
    }
    public function result() {
        return $this->value;
    }
    public function __destruct() {
        echo "Destruct! <br>";
    }
}
DB::table("customers")->where("id", 1)->get();

$foo = Calculate::instance()->sum(100)->sum(100)->divide(5)->result();
echo $foo . "<br>";
$bar = Calculate::instance()->sum(60)->sum(40)->minus(10)->result();
echo $bar . "<br>";
$bar = Calculate::instance()->sum(60)->sum(40)->minus(10)->result();
echo $bar . "<br>";
$bar = Calculate::instance()->sum(60)->sum(40)->minus(10)->result();
echo $bar . "<br>";