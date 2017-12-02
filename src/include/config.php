<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:56:34 
*/

namespace ranel\Config;


class General{
    //string. The company name that will be shown on the website
    const COMPANYNAME = 'Brand Inc.';    

    //boolean. If errors should be transfered in plain text to the user on the website.
    const DEBUG = true;

    //boolean. Should non-php errors exit the script?
    const DEBUGEXIT = true;
}

class Design{
    //string. Set primary color and secondary color and use it according to Material Design
    const PRIMARYCOLOR = "#2196F3";
    //string
    const SECONDARYCOLOR = "#9C27B0";

    //string. What theme should be used on the site? Possible arguments is DARK or LIGHT
    const THEME = "LIGHT";
}

//Database configuration for MySQL
class MySQL{
    //string. The name of the database we should use
    const DATABASE = "ranel";
    //string. IP or FQDN to the database
    const HOST = "127.0.0.1";
    //string. Username to the database
    const USERNAME = "user";
    //string. Password to the database
    const PASSWORD = "pass";
}

?>