<?php
include __DIR__ ."/mainclass.php";

class food extends main {
    public $weight;
    public $ingredients;

    public function __constructs(
        string $img,
        string $nome,
        int $prezzo,
        

        string $weight,
        string $ingredients
        )
        {
        $this->weight=$weight;
        $this->ingredients=$ingredients;
        parent::__construct($nome,$autore,$prezzo,$category);

    }
}

