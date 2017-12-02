<?php
/*
 * @Author: André Pettersson 
 * @Date: 2017-12-02 00:32:56 
 */

namespace ranel;

include_once(dirname(__FILE__)."/config.php");
include_once(dirname(__FILE__)."/classes/DebugError.php");

//Check if primary and secondary color is set
if(empty(\ranel\Config\Design::PRIMARYCOLOR))
{
    if(\ranel\DebugError::shouldBeHandledByClass())
    {
        \ranel\DebugError::error("No primary color is set at Design::PRIMARYCOLOR");
    }
}

if(empty(\ranel\Config\Design::SECONDARYCOLOR))
{
    if(\ranel\DebugError::shouldBeHandledByClass())
    {
        \ranel\DebugError::error("No secondary color is set at Design::PRIMARYCOLOR");
    }
}

//Check if Design::THEME is a valid value or empty
if(empty(\ranel\Config\Design::THEME))
{
    if(\ranel\DebugError::shouldBeHandledByClass())
    {
        \ranel\DebugError::error("No theme is set at Design::THEME");
    }
}

if(\ranel\Config\Design::THEME !== "LIGHT")
{
    if(\ranel\Config\Design::THEME !== "DARK")
    {
        if(\ranel\DebugError::shouldBeHandledByClass())
        {
            \ranel\DebugError::error("Design::THEME is set to an invalid value");
        }   
    }
}

//Give theme body color
if(\ranel\Config\Design::THEME == "LIGHT")
{
    $theme_body_color = "#FAFAFA";
}
if(\ranel\Config\Design::THEME == "DARK")
{
    $theme_body_color = "#303030";
}
?>