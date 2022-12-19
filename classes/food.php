<?php
include_once __DIR__ ."/mainclass.php";

class food extends main {
    public $img;
    public $nome;
    public $prezzo;
    public $weight;
    public $ingredients;

    public function __construct(string $img,string $nome,category $category,string $prezzo,string $weight,string $ingredients)
        {
        
        $this->weight=$weight;
        $this->ingredients=$ingredients;
        parent::__construct($img,$nome,$category,$prezzo);

    }
}

