<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:57:43 
  */

namespace ranel;

require_once(dirname(__FILE__)."/include/classes/Database.php");

try
{
    $MySQL = new \ranel\Database\Database();
}
catch(Exception $e)
{
    die("Error caught " . $e);
}

?>