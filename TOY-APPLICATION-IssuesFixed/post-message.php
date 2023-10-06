<?php
  header("Content-Security-Policy: default-src 'self'");
  require_once('header.php');
  if (!isset($_SESSION['user'])) {

    echo '<div class="alert alert-danger" role="alert">You aren\'t logged in.</div>';
    die('</div></div></div></html>');

  } else {

    if (isset($_POST['post_message']))
    {
      $message = $_POST['message_text'];
      if ($message != "")
      {
        $time = time();
        queryMysql("INSERT INTO messages VALUES (NULL, '$user', '$message', $time)");
        echo '<div class="alert alert-success" role="alert">Message posted.</div>';
      }
    }

    echo $post_form;
  }
