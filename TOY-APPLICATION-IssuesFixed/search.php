<?php
  header("Content-Security-Policy: default-src 'self'");
  require_once('header.php');

  if (!isset($_SESSION['user'])) {

    echo '<div class="alert alert-danger" role="alert">You aren\'t logged in.</div>';
    die('</div></div></div></html>');

  } else {

    echo $search_form;

    if (isset($_GET['q'])) {

      $q = $_GET['q'];

      $result = queryMySQL("SELECT * FROM messages WHERE LOWER(message) LIKE '%$q%'");
      $num = $result->num_rows;

      echo '<h2><i>Search Results for ' . $q . '</i></h2>';

      if ($num == 0)
      {
        echo '<div class="alert alert-danger" role="alert">No search results found to be matching ' . $q . '</div>';
      }
      else
      {

        for ($j = 0 ; $j < $num ; ++$j)
        {
          $row = $result->fetch_array(MYSQLI_ASSOC);

          echo '<div class="card mb-4">';
          if ($user == $row['user_id'] || isset($_SESSION['is_admin'])) {
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

  }
