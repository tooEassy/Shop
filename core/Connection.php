<?php
namespace core;

 class Connection
{
    public $db;
    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host=localhost;dbname=tooEasy_db;', 'homestead', 'secret');
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
} 