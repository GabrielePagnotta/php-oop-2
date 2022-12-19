<?php 

class main{
    public $img;
    public $nome;
    public $prezzo;
    public $category;

    public function __construct($img,$nome,$prezzo,$category){
        $this->img=$img;
        $this->nome=$nome;
        $this->prezzo=$prezzo;
        $this->category=$category;
    }
}