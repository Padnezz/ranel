<?php

/*
 * @Author: André Pettersson
 * @Date: 2018-01-03 01:15:30
 * Handles debug
 */

namespace ranel;

require_once dirname(__FILE__).'/../config.php';

class Error
{
    public static function error($error)
    {
        if (\ranel\Config\General::DEBUG || \ranel\Config\General::DEBUGEXIT) {
            if (\ranel\Config\General::DEBUG) {
                if (\ranel\Config\General::DEBUGEXIT) {
                    exit($error);
                } else {
                    echo $error;
                }
            }
        } else {
            return false;
        }
    }
}
