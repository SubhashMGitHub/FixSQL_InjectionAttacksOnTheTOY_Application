<?php

  require_once('header.php');
  if (!isset($_SESSION['user'])) {
    echo '<div class="alert alert-danger" role="alert">You aren\'t logged in.</div>';
    die('</div></div></div></html>');
  } else {

    echo <<< _ADMIN

    <h2>Admin Home</h2>
    <hr />
      <div class="row text-center">
        <div class="col-sm-5">
          <a class="btn btn-lg btn-outline-primary" href="board.php">View Messages</a>
        </div>
        <div class="col-sm-5">
          <a class="btn btn-lg btn-outline-primary" href="post-message.php">Post Message</a>
        </div>
      </div>


_ADMIN;

  }
