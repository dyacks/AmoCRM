<?php

class User
{
    public $name;
    public $phone;
    public $email;
    public $comment;
    
    public function __construct()
    {
        if(empty($_POST['name']))
            die('Не заполнено имя контакта');
        if(empty($_POST['phone']))
            die('Не заполнен телефон контакта');
        if(empty($_POST['email']))
            die('Не заполнен E-mail контакта');
        
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $this->comment = $_POST['comment'];
    }
    
    
}