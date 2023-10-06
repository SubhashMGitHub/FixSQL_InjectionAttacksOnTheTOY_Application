<?php
  session_start();
  require_once('functions.php');

  if (isset($_SESSION['user'])) {

    destroySession();
    require_once('header.php');

    echo '<div class="alert alert-danger" role="alert">You have been logged out.</div>';

  } else {

    echo '<div class="alert alert-danger" role="alert">You cannot log out because
               you are not logged in</div>';

  }

echo $end_html;
