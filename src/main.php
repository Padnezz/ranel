<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:57:43 
 * Main home page when logged in
  */

namespace ranel;

require_once(dirname(__FILE__)."/include/classes/Database.php");
require_once(dirname(__FILE__)."/include/config.php");

try
{
    $MySQL = new \ranel\Database();
}
catch(\Exception $e)
{
    if(\ranel\Config\General::DEBUG){
        if(\ranel\Config\General::DEBUGEXIT)
        {
            exit("Non-fatal error caught: " . $e);
        }
    }
}

?>