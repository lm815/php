<?php

//Базовый класс для работы с базой данных
class Database
{
    public $table;

    public function getTable()
    {
        if (strlen($this->table) == 0)
            throw new ErrorException('Не указана таблица');
        return $this->table;
    }

//    Получение одного дркумента по ID
    public function getOne($id)
    {
        $statement = 'SELECT * FROM ' . $this->getTable() . ' WHERE id=' . $id;
        $stmt = $this->pdo()->query($statement);
        return $stmt->fetch();
    }

//Получение всех записей
    public function getAll()
    {
        $stmt = $this->pdo()->query('SELECT * FROM' . $this->getTable());
        return $stmt->fetchAll();
    }

    public function create($data)
    {
        $allowed = ['name', 'phone', 'text']; // allowed fields
        $sql = 'INSERT INTO ' . $this->getTable() . ' SET ' . $this->pdoSet($allowed, $data);
        $stm = $this->pdo()->prepare($sql);
        $stm->execute($data);
    }

    protected function pdoSet($allowed, $values)
    {
        $set = '';
        foreach ($allowed as $field) {
            if (isset($values[$field])) $set .= $field . "=:$field, ";
        }
        return substr($set, 0, -2);
    }

    protected function pdo()
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