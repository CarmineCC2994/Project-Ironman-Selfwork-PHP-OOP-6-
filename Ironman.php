
<?php

abstract class Ironman {

    public $model;
    public $potenza;

    
    public static $counter = 0;

    public function __construct($model, $potenza) {
        $this->model = $model;
        $this->potenza = $potenza;

        self::$counter++;
    }

    abstract public function getInfo();

    public static function getCounter() {
        return self::$counter;
    }
}

?>
