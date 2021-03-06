<?php
/**
 * Created by PhpStorm.
 * User: Dimitrie.M
 * Date: 12.04.2017
 * Time: 16:10
 */
require_once '/config/Database.php';


class Model
{
    // get one record by query
    public function getOne($query)
    {
        try {
            $result = Database::prepare($query)->execute(array())->fetch();
        } catch (\PDOException $e) {
            echo "Database error: " . $e->getMessage();
            exit;
        }
        return $result;
    }


    // get several records by query
    public function getAll($query)
    {
        try {
            $result = Database::prepare($query)->execute(array())->fetchAll();
        } catch (\PDOException $e) {
            echo "Database error: " . $e->getMessage();
            exit;
        }
        return $result;
    }

}