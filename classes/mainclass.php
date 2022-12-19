<?php 

class main{
    public $img;
    public $nome;
    public $category;
    public $prezzo;
    

    public function __construct($img,$nome,$category,$prezzo){
        $this->img=$img;
        $this->nome=$nome;
        $this->category=$category;
        $this->prezzo=$prezzo;
       
    }
}