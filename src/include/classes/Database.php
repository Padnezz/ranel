<?php
/*
 * @Author: André Pettersson 
 * @Date: 2017-11-24 17:39:16 
 * Database file that will be called by frontend pages and talk to other database files for different types of databases
 */

namespace ranel\Database;

include_once(dirname(__FILE__)."/../config.php");
include_once(dirname(__FILE__)."/Database/MySQL.php");

class Database{

    public function __construct()
    {
        try
        {
            $MySQL = new \ranel\Database\MySQL();
        }
        catch(\Exception $e)
        {
            throw new \Exception($e);
        }
    }
    
}