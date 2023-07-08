<?php

namespace App\Utils;

use PDO;

class Database
{
    /** @var PDO */
    private $dbh;
    private static $_instance;
    
    private function __construct()
    {
        $configData = parse_ini_file(__DIR__ . '/../config.ini');
        $dbPath = __DIR__ . '/../database.sqlite'; // Path to the SQLite database file

        try {
            $this->dbh = new PDO(
                "sqlite:{$dbPath}",
                null,
                null,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
            );
        } catch (\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage() . '<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }
    }
    
    public static function getPDO()
    {
        if (empty(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance->dbh;
    }
}
