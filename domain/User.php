<?php

class User
{
    public $email;
    public $data;

    public function __construct( $email )
    {
        $this->email = $email;
        $this->data = date('Y\/m\/d H');
    }

    public function ehEmail(){
        return !filter_var($this->email, FILTER_VALIDATE_EMAIL) === false ;
    }
}