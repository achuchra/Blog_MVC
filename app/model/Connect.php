<?php

class Connect
{
    private $host;
    private $user;
    private $password;
    private $database;

    public function connect()
    {
        $this->host='localhost';
        $this->user='root';
        $this->password='';
        $this->database='blog';
    try{
        $db=new PDO("mysql:host=$this->host;dbname=$this->database;charset=utf8",
            $this->user,
            $this->password,
            [PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $error) {

        echo $error->getMessage();
        exit('Database error');

    }

        return $db;
    }
}