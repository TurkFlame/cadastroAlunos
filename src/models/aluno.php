<?php
class Aluno
{
    protected $name;
    protected $registration;
    protected $course;
    public function __construct($name, $registration, $course){
        $this->name = $name;
        $this->registration = $registration;
        $this->course = $course;
    }

    public function getAlunoInfo(){
        return `course: $this->course </br>
                name: $this->name </br>
                registration: $this->registration </br>`;
    }
}
