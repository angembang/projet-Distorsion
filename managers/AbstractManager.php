<?php
class AbstractManager
{
    protected $db;

    public function __construct()
    {
         $host = "db.3wa.io";
         $port = "3306";
         $dbname = "angekamwangmbang_Projet_Distorsion";
         $connexionString = "mysql:host=$host;port=$port;charset=utf8;dbname=$dbname";

         $user = "angekamwangmbang";
         $password = "807729d96bee5f9ce5c2908f596f38c7";
         
         $this->db =new PDO(
                    $connexionString,
                    $user,
                    $password
                    );

    }
}