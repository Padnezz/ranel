<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:56:34 
*/

namespace ranel\Config;


class General{
    //The company name that will be shown on the website
    const COMPANYNAME = 'Brand Inc.';    
}

//Database configuration for MySQL
class MySQL{
    const DATABASE = "ranel";
    const HOST = "127.0.0.1";
    const USERNAME = "user";
    const PASSWORD = "pass";
}

?>