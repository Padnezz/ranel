<?php
/*
 * @Author: André Pettersson
 * @Date: 2017-11-24 17:39:16
 * Database file that will be called by files and talk to other database files for different types of databases
 */

namespace ranel;

require_once dirname(__FILE__).'/../config.php';
require_once dirname(__FILE__).'/Error.php';
require_once dirname(__FILE__).'/Database/MySQL.php';

class Database
{
    public function __construct()
    {
        switch (\ranel\Config\Database::ENGINE) {
            case 'MySQL':
                $mysql = new \ranel\Database\MySQL();
            break;
            default:
                \ranel\Error::error('No valid engine in configuration was specified at Database::ENGINE');
            break;
        }
    }
}
