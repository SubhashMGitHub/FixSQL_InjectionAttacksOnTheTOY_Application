<?php
  header("Content-Security-Policy: default-src 'self'");
  require_once('header.php');

  if (!isset($_SESSION['user'])) {

    echo '<div class="alert alert-danger" role="alert">You aren\'t logged in.</div>';
    die('</div></div></div></html>');

  } else {

    if (isset($_GET['action'])) {
      if ($_GET['action'] == "delete") {

        $message_id = $_GET['id'];
        if (checkIfAdmin()) {
          queryMysql("DELETE FROM messages WHERE id='$message_id'");
        }
        else {
          queryMysql("DELETE FROM messages WHERE user_id='$user' AND id='$message_id'");
        }
        echo '<div class="alert alert-danger" role="alert">Message has been deleted.</div>';

      }
    }

    $query  = "SELECT * FROM messages ORDER BY time DESC";

    $result = queryMysql($query);
    $num    = $result->num_rows;

    if (!$num) {

      echo '<div class="alert alert-danger" role="alert">No messages yet.</div>';

    } else {

      for ($j = 0 ; $j < $num ; ++$j)
      {
        $row = $result->fetch_array(MYSQLI_ASSOC);

        echo '<div class="card mb-4">';
        if ($user == $row['user_id'] || $_SESSION['is_admin']) {
          echo '<div class="card-header text-muted text-right"><i>' . 'Posted on ' . date('M jS, Y g:ia', $row['time']) .
              ' by ' . $row['user_id'] . ' | <a href="board.php?action=delete&id=' . $row['id'] . '">Delete</a></i></div>';
        } else {
          echo '<div class="card-header text-muted text-right"><i>' . 'Posted on ' . date('M jS, Y g:ia', $row['time']) .
              ' by ' . $row['user_id'] . '</i></div>';
        }
        echo '<div class="card-body">';
            echo '<p class="card-text">' . make_clickable($row['message']) . '</p></div></div>';
      }

    echo '  </tbody>
    </table>';

    }

  }
