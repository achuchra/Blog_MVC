<?php

class Entries extends Connect
{

    public function getAll()
    {
        $pdo = 'SELECT * FROM wpisy ORDER BY data DESC';
        $result = $this->connect()->query($pdo);
        $numRows = $result->rowCount();

        if ($numRows > 0) {
//            echo 'hmm';
            $data = $result->fetchAll();
        }
//        print_r($data[4]['tytul']);
        return $data;
    }

    public function getEurope()
    {
        $pdo = 'SELECT * FROM wpisy WHERE kategoria = "Europe" ORDER BY data DESC';
        $result = $this->connect()->query($pdo);
        $numRows = $result->rowCount();

        if ($numRows > 0){
            $data = $result->fetchAll();
        } else { return null; }

        return $data;
    }

    public function getAsia()
    {
        $pdo = 'SELECT * FROM wpisy WHERE kategoria = "Asia" ORDER BY data DESC';
        $result = $this->connect()->query($pdo);
        $numRows = $result->rowCount();

        if ($numRows > 0){
            $data = $result->fetchAll();
        } else { return null; }

        return $data;
    }

    public function getAmerica()
    {
        $pdo = 'SELECT * FROM wpisy WHERE kategoria = "America" ORDER BY data DESC';
        $result = $this->connect()->query($pdo);
        $numRows = $result->rowCount();

        if ($numRows > 0){
            $data = $result->fetchAll();
        } else { return null;}

        return $data;
    }
}