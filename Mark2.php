
<?php

class Mark2 extends Ironman {

    public function __construct() {
        parent::__construct("Mark 2", 75);
    }

    public function getInfo() {
        echo "Armatura: " . $this->model . "\n";
        echo "Potenza: " . $this->potenza . "\n";
    }
}

?>
