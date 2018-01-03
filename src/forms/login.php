<?php
/*
 * @Author: André Pettersson
 * @Date: 2017-12-10 22:36:55
 * Page where form will post login
 */

namespace ranel;

require_once dirname(__FILE__).'/../include/config.php';
require_once dirname(__FILE__).'/../include/classes/Database.php';
require_once dirname(__FILE__).'/../include/classes/Error.php';

$database = new \ranel\Database();
