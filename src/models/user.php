<?php
class User{
    //Por se tratar de informações mais sigilosas que o normal, priorizei para que os atributos tenham uma visibilidade privada, e que outras
    //classes não possam acessar essas informações diretamente nem alterálas, mas disponibilizei métodos para que essas informações sejam
    //usadas para outros fins
    private $password;
    private $email;

    public function __construct($password, $email){
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->email = $email;
    }
    public function validatePassword($password){
        return password_verify($password, $this->password);
    }
    public function getEmail() {
        return $this->email;
    }
}

?>