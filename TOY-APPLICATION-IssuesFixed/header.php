<?php
  session_start();
  require_once('functions.php');

  echo <<<_HEADER

  <html lang='en'>

    <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
      <meta name='description' content=''>
      <meta name='author' content=''>
      <title>CS5340 - Attacks</title>
      <link href='css/bootstrap.min.css' rel='stylesheet'>
      <link href='css/custom.css' rel='stylesheet'>
    </head>

    <body>
      <nav class='navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top'>
        <div class='container'>
          <a class='navbar-brand' href='index.php'>CS5340</a>

_HEADER;



      if (checkIfLoggedIn()) {
          echo '<div id="user_welcome">Welcome ' . $_SESSION['uname'] . ' | Role: ';
          if (checkIfAdmin()) {
            echo 'Administrator';
          } else {
            echo 'Ordinary User';
          }
          echo ' | <a href="changepassword.php">Change Password</a>';
        }

echo <<<_HEADER_MORE
          </div>
        </div>
      </nav>
      <br />
      <div class='container'>
        <div class="row">
            <div class="col-lg-3 mb-4" id="sidebar">

_HEADER_MORE;

      if (checkIfLoggedIn()) {
        $user = $_SESSION['user'];
        if (checkIfAdmin())
          echo $admin_sidebar;
        else
          echo $user_sidebar;
      } else {
        echo $guest_sidebar;
      }

echo '</div>';
echo '<div class="col-lg-9 mb-4" id="main_content">';
