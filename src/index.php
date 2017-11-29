<?php

/*
 * @Author: André Pettersson 
 * @Date: 2017-11-23 20:58:10 
 */

namespace ranel;

include_once(dirname(__FILE__)."/include/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo \ranel\Config\General::COMPANYNAME; ?> - Inventory</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><?php echo \ranel\Config\General::COMPANYNAME; ?></a>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Starter Template</h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
      Made with <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a> and author <a class="orange-text text-lighten-3" href="https://github.com/Padnezz">Padnezz</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/script.js"></script>

  </body>
</html>
