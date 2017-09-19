<?php

//Базовый класс для работы с базой данных
class Database
{
//    Получение одного дркумента по ID
    public function getOne($id)
    {
        $statement = 'SELECT * FROM products WHERE id=' . $id;
        $stmt = $this->pdo()->query($statement);
        return $stmt->fetch();
    }

//Получение всех записей
    function getAll()
    {
        $stmt = $this->pdo()->query('SELECT * FROM products');
        return $stmt->fetch();
    }

    function pdo()
    {
        $host = '127.0.0.1';
        $db = 'fullstack';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, $user, $pass, $opt);
    }
}