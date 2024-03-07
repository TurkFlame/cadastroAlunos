<?php
class Student
{
    //Por não se tratarem de informações totalmente sigilosas, optei pelo keyword de visibilidade protected, para que classes derivadas e instancias
    //dessa clase continuem podendo acessar a informação, porém não se torne um atributo publico.
    protected $name;
    protected $registration;
    protected $course;
    public function __construct($name, $registration, $course){
        $this->name = $name;
        $this->registration = $registration;
        $this->course = $course;
    }
    public function getRegistration(){
        return $this->registration;
    }
    public function getCourse(){
        return $this->course;
    }
    public function getName(){
        return $this->name;
    }
}
