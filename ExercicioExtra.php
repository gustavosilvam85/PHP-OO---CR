<?php

class Aluno {
    private $nome;
    private $matricula;
    private $curso;
    public function __construct($nome, $matricula, $curso) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }
}
class CadastroAlunos {
    private $alunos = [];
    public function cadastrarAluno(Aluno $aluno) {
        $this->alunos[] = $aluno;
    }
    public function listarAlunos() {
        if (empty($this->alunos)) {
            echo "Nenhum aluno cadastrado.\n";
            return;
        }

        foreach ($this->alunos as $aluno) {
            echo "Nome: " . $aluno->getNome() . "<br>";
            echo "Matrícula: " . $aluno->getMatricula() . "<br>";
            echo "Curso: " . $aluno->getCurso() . "<br>";
        }
    }
}
$aluno1 = new Aluno("Gustavo da Silva", "2024001", "Engenharia de software");
$aluno2 = new Aluno("Pedro Henrique", "2024002", "Engenharia Civil");

$cadastro = new CadastroAlunos();

$cadastro->cadastrarAluno($aluno1);
$cadastro->cadastrarAluno($aluno2);

$cadastro->listarAlunos();
