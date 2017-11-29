<?php
/*
 * @Author: André Pettersson 
 * @Date: 2017-11-24 17:39:24 
 */

namespace ranel\Database;

include_once(dirname(__FILE__)."/../../config.php");

class MySQL{
    
    protected $db;

    public function __construct()
    {

        $username = \ranel\Config\MySQL::USERNAME;
        $password = \ranel\Config\MySQL::PASSWORD;
        $host = \ranel\Config\MySQL::HOST;
        $dbname = \ranel\Config\MySQL::DATABASE;

        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try 
        { 
            $this->db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
        } 
        catch(\PDOException $ex) 
        { 
            //error_log($ex->getMessage() . PHP_EOL, 3, "database_error_log.log");
            $this->returnError($ex);
        } 

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
     
        if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) 
        {
            function undo_magic_quotes_gpc(&$array) 
            { 
                foreach($array as &$value) 
                { 
                    if(is_array($value)) 
                    { 
                        undo_magic_quotes_gpc($value); 
                    } 
                    else 
                    { 
                        $value = stripslashes($value); 
                    } 
                } 
            } 

            undo_magic_quotes_gpc($_POST); 
            undo_magic_quotes_gpc($_GET); 
            undo_magic_quotes_gpc($_COOKIE); 
        }
    }

    public function selectQuery($query, $queryArray)
    {
        try
        {
            $stmt = $this->db->prepare($query); 
            $result = $stmt->execute($queryArray); 
        }
        catch(\PDOException $ex)
        {
            $this->returnError($ex);
        }

        $rows = $stmt->fetchAll();

        if(empty($rows))
        {
            return "empty";
        }
        else
        {
            return $rows;
        }

    }
    
    public function insertQuery($query, $queryArray)
    {
        try
        {
            $stmt = $this->db->prepare($query); 
            $result = $stmt->execute($queryArray); 
        }
        catch(\PDOException $ex)
        {
            $this->returnError($ex);
        }

    }

    public function returnError($error)
    {
        throw new \Exception($error);
    }

}

class PDO extends \PDO{};