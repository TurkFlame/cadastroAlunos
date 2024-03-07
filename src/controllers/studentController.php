<?php

require_once "../models/student.php";

class StudentRegister
{
    private $students;

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

        $newStudent = new Student($name, $registration, $course);
        $_SESSION["students"][] = $newStudent;
    }

    public function getStudents()
    {
        if (isset($_SESSION["students"]) && !empty($_SESSION["students"])) {
            $list = ''; // Inicializa uma string vazia para armazenar a lista de alunos
            foreach ($_SESSION["students"] as $student) {
                $list .= '
                <li class="list-group-item">
                    <p>Nome: ' . $student->getName() . '</p>
                    <p>Matrícula: ' . $student->getRegistration() . '</p>
                    <p>Curso: ' . $student->getCourse() . '</p>
                </li>';
            }
            return $list; // Retorna a lista completa de alunos
        } else {
            return "<p>Nenhum aluno cadastrado.</p>"; // Retorna uma mensagem se não houver alunos cadastrados
        }
    }
}
