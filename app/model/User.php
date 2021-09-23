<?php

use Database\Connection;

class user
{
    private $id, $name, $email, $password;

    public function validateLogin()
    {
        // Connection DB
        $conn = Connection::getConn();
        // Validate Email
        $sql = 'SELECT * FROM users WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if($stmt->rowCount()){
            $result = $stmt->fetch();
            // Validate Password
            if($result['password'] === $this->password){
                // Session and dashboard direction
                $_SESSION['usr'] = array('id_user'=>$result['id'], 'name_user'=>$result['name']);

                return true;
            }
        }

        // Redirect login if error
        throw new \Exception('Login Inválido!');        
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