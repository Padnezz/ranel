<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:56:34 
*/

namespace ranel\Config;


class General{
    //The company name that will be shown on the website
    const COMPANYNAME = 'Brand Inc.';    

    //If errors should be transfered in plain text to the user on the website.
    const DEBUG = true;

    //Should non-php errors exit the script?
    const DEBUGEXIT = true;

    const PRIMARYCOLOR = "#2196F3";
    const SECONDARYCOLOR = "#9C27B0"; 
}

//Database configuration for MySQL
class MySQL{
    const DATABASE = "ranel";
    const HOST = "127.0.0.1";
    const USERNAME = "user";
    const PASSWORD = "pass";
}

?>