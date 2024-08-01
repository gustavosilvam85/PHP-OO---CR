<?php

class Livro {
    protected $titulo;
    protected $autor;

public function __construct($titulo, $autor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
}

public function setTitulo($novoTitulo) {
    $this->titulo = $novoTitulo;
}
public function setAutor($autor){
    $this->autor = $autor;
}
}

$livro = new Livro("DomQuixote","Miguel de Cervantes");

$livro ->setTitulo("Código Limpo");
$livro ->setAutor("Robert Cecil Martin");

echo $livro;

class Animal{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function  IdadeCachorro($idade){
        $this->idade = $idade;
    }
}

class Cachorro extends Animal {
    public function IdadeHumano($idade) {
        $idadeHumana = $idade * 7;
        echo "A idade de um cachorro convertida em humana é " . $idadeHumana;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getInfo() {
        return "Nome: " . $this->nome . ", Idade: " . $this->idade;
    }
}

$cachorro = new Cachorro("Rex","5");
$cachorro->setNome("Max");

echo $cachorro->getInfo();

class Calculadora {
    protected $valorA;
    protected $valorB;
    
    public function Soma($valorA,$valorB){
        $resultado = $valorA + $valorB;
        return $resultado;
    } 
}