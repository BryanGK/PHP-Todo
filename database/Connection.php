<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=todo', 'root', '');
        } catch (PDOException) {
            die('Could not connect to database.');
        }
    }
}