<?php
  require_once('header.php');

  if (isset($_SESSION['user'])) destroySession();

  if (isset($_POST['user_signup']))
  {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if ($user == "" || $pass == "") {
      echo '<div class="alert alert-danger" role="alert">Not all fields were entered</div>';
      echo $signup_form;

    } else {

      $result = queryMysql("SELECT * FROM users WHERE username='$user'");

      if ($result->num_rows) {
        echo '<div class="alert alert-danger" role="alert">That username already exists</div>';
        echo $signup_form;
      }
      else
      {
        queryMysql("INSERT INTO users VALUES ('$user', '$pass', '$firstname', '$lastname', 0, 1)");
        echo '<div class="alert alert-success" role="alert">Account successfully created. Please login...</div>';
      }
    }

  } else {
    echo $signup_form;
  }

  echo $end_html;
