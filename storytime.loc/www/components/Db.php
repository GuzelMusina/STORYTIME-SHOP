<?php


class Db
{

    public static function getConnection()
    {
        // get parameters from file
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        // do the connection
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);


        //for best text
        $db->exec("set names utf8");

        return $db;
    }

}
