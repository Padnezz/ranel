<?php
/*
 * @Author: André Pettersson 
 * @Date: 2017-11-24 17:39:16 
 */

namespace ranel\Database;

require_once(dirname(__FILE__)."/../config.php");
require_once(dirname(__FILE__)."/Database/MySQL.php");

class Database{

    public function __construct()
    {
        try
        {
            $MySQL = new \ranel\Database\MySQL();
        }
        catch(Exception $e)
        {
            die("Error caught " . $e);
        }
    }
    
}