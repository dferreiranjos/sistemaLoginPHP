<?php

class user
{
    private $id, $name, $email, $password;

    public function validateLogin()
    {
        // Connection DB

        // Validate Email

        // Validade Password

        // Session and dashboard direction

        // Redirect login if error
    }


    // Sets
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    // Gets
    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

}