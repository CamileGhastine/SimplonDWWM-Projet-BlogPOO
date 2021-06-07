<?php

namespace App\Model;

class Repository
{
    protected function getDBConnection(): \PDO
    {
        try {
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ];
            return new \PDO('mysql:host=localhost;dbname=blog', 'root', '', $options);
        } catch (\PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}