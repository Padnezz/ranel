<?php

/*
 * @Author: André Pettersson
 * @Date: 2017-12-02 00:58:55
 * Handles debug
 */

namespace ranel;

require_once dirname(__FILE__).'/../config.php';

class DebugError
{
    public static function shouldBeHandledByClass()
    {
        if (\ranel\Config\General::DEBUG || \ranel\Config\General::DEBUGEXIT) {
            return true;
        } else {
            return false;
        }
    }

    public static function error($error)
    {
        if (\ranel\Config\General::DEBUG) {
            if (\ranel\Config\General::DEBUGEXIT) {
                exit($error);
            } else {
                echo $error;
            }
        }
    }
}
