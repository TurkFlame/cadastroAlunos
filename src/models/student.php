<?php
class Student
{
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
