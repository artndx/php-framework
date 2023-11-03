<?php

namespace MyProject\Services;

class Db{
    private $pdo;
    private static $instance;
    private static $instancesCount;

    private function __construct(){
        self::$instancesCount++;

        $dbOptions = require('../src/settings.php');
        
        $this->pdo = new \PDO(
            'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password'],
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }

    public static function getInstance(): self
    {
    if (self::$instance === null) {
        self::$instance = new self();
    }

    return self::$instance;
}   
}