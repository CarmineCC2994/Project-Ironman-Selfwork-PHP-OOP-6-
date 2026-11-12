
<?php

class Mark3 extends Ironman {

    public function __construct() {
        parent::__construct("Mark 3", 100);
    }

    public function getInfo() {
        echo "Armatura: " . $this->model . "\n";
        echo "Potenza: " . $this->potenza . "\n";
    }
}

?>
