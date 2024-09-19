<?php

class DbConnection
{
    const DSN = 'mysql:host=mysql-delaunay.alwaysdata.net;dbname=delaunay_gamestore;port=3306';
    const USER = 'delaunay';
    const PASSWORD = 'Test1212/';

    private static $pdo = null;


    public static function getPdo (): PDO
    {
        if (self::$pdo !== null){
            return self::$pdo;

        }
      
        
        self::$pdo = new PDO (self::DSN, self::USER, self::PASSWORD);
        return self::$pdo;
    }
}