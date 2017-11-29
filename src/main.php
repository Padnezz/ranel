<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:57:43 
  */

namespace ranel;

include_once(dirname(__FILE__)."/include/classes/Database.php");

try
{
    $MySQL = new \ranel\Database\Database();
}
catch(Exception $e)
{
    echo "Error caught " . $e;
    exit(1);
}

?>