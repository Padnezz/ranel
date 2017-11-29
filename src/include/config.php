<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:56:34 
*/

namespace ranel\Config;


class General{
    //The company name that will be shown on the website
    const COMPANYNAME = 'Brand Inc.';    

    //If errors should be transfered in plain text to the user on the website instead of live enviroment
    const DEBUG = true;

    //Should non-php errors exit the script?
    const DEBUGEXIT = true;
}

//Database configuration for MySQL
class MySQL{
    const DATABASE = "ranel";
    const HOST = "127.0.0.1";
    const USERNAME = "user";
    const PASSWORD = "pass";
}

?>