
<?php

class Mark1 extends Ironman {

    public function __construct() {
        parent::__construct("Mark 1", 50);
    }

    public function getInfo() {
        echo "Armatura: " . $this->model . "\n";
        echo "Potenza: " . $this->potenza . "\n";
    }
}

?>
