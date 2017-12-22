<?php

/*
 * @Author: André Pettersson
 * @Date: 2017-11-23 20:58:10
 * Login page
 */

namespace ranel;

require_once dirname(__FILE__).'/include/config.php';
require_once dirname(__FILE__).'/include/general_init.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title><?php echo \ranel\Config\General::COMPANYNAME; ?> - Inloggning</title>

    <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script>
      $(document).ready(
        function(){
          $("body").css("background-color", "<?php echo $theme_body_color; ?>");
          $(".index-nav").css("background-color", "<?php echo \ranel\Config\Design::PRIMARYCOLOR; ?>");
          $(".signin-btn").css("background-color", "<?php echo \ranel\Config\Design::SECONDARYCOLOR; ?>");
          colorText(".signin-btn");
          colorText(".index-nav");
          if($("body").css("background-color") == "rgb(250, 250, 250)")
          {
            $("label").css("color", "black");
            $("h2").css("color", "black");
          }
          if($("body").css("background-color") == "rgb(48, 48, 48)")
          {
            $("label").css("color", "white");
            $("h2").css("color", "white");
          }
        }
      )
    </script>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light index-nav"><h3><?php echo \ranel\Config\General::COMPANYNAME; ?></h3></nav>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-block signin-btn" type="submit">Sign in</button>
      </form>

    </div>
  </body>
</html>