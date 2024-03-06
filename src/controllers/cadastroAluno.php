<?php

require_once "../models/aluno.php";
require_once "../helpers/main.php";


class CadastroAluno
{
    private $alunos;
    public function __construct()
    {
        $this->alunos = [
            new Aluno('Luiz', '3558395839', 'Eng Software'),
            new Aluno('Tiago', '585846747', 'Eng Eletronica'),
            new Aluno('Rafael', '6365673357', 'Eng Eletromecanica'),
        ];
    }

    public function getAlunos()
    {
        return $this->alunos;
    }

    public function cadastrarAluno($name, $registration, $course)
    {
        if (array_any($this->alunos, function () use ($registration) {
            return $current["registration"] == $registration;
        }
        )) {
            throw new Exception('Aluno já cadastrado');
        }
        $this->alunos[] = new Aluno($name, $registration, $course);
    }
}
