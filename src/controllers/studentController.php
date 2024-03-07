<?php

require_once "../models/student.php";
//Optei por não usar um método construtor na classe StudentRegister, pois estou utilizando o $_SESSION para guardar as informações de alunos
//cadastrados. Não precisando instanciar uma nova classe sempre que preciso.

class StudentRegister
{
    private $students;

    //Para uma melhor leitura do código, optei para usar um método de registro do estudante onde ele faz a verificação do usuário e já guarda a informaçõa
    //dentro da seção. 
    public function registerStudent($name, $registration, $course)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION["students"])) {
            $_SESSION["students"] = [];
        }

        foreach ($_SESSION["students"] as $student) {
            if ($student->getRegistration() === $registration) {
                return '
                <div class=".text-danger"> Aluno já cadastrado</div>';
            }
        }
        $_SESSION["students"][] = new Student($name, $registration, $course);
    }

    //Também optei por colocar no método getter, para printar as informações dentro do body, pois se outras medidas tivessem sido tomadas, precisaria de uma estrutura um pouco maior
    //utilizando concatenação de strings, então optei por algo com menos extensividade
    public function getStudents()
    {
        if (isset($_SESSION["students"]) && !empty($_SESSION["students"])) {
            foreach ($_SESSION["students"] as $student) {
                echo '
                <li class="list-group-item">
                    <p>Nome: ' . $student->getName() . '</p>
                    <p>Matrícula: ' . $student->getRegistration() . '</p>
                    <p>Curso: ' . $student->getCourse() . '</p>
                </li>';
            }
        } else {
            echo "<p class='+text-warning'>Nenhum aluno cadastrado.</p>";
        }
    }
}
