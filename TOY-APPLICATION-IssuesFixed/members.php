<?php

  require_once('header.php');

  if (!isset($_SESSION['user'])) {

    echo '<div class="alert alert-danger" role="alert">You aren\'t logged in.</div>';
    die('</div></div></div></html>');

  } else if (!checkIfAdmin()) {

    echo '<div class="alert alert-danger" role="alert">Unauthorized user.</div>';
    die('</div></div></div></html>');

  } else {

    if (isset($_GET['action'])) {

      $user_id = $_GET['user_id'];

      if ($_GET['action'] == "deactivate") {

        queryMysql("UPDATE users SET is_active='0' WHERE username='$user_id'");
        echo '<div class="alert alert-danger" role="alert">User ' . $user_id . ' has been deactivated.</div>';

      } else if ($_GET['action'] == "activate") {

        queryMysql("UPDATE users SET is_active='1' WHERE username='$user_id'");
        echo '<div class="alert alert-danger" role="alert">User ' . $user_id . ' has been activated.</div>';

      } else if ($_GET['action'] == "changetoadmin") {

        queryMysql("UPDATE users SET is_admin='1' WHERE username='$user_id'");
        echo '<div class="alert alert-danger" role="alert">User ' . $user_id . ' has been changed to an administrator.</div>';

      } else if ($_GET['action'] == "changetoordinary") {

        queryMysql("UPDATE users SET is_admin='0' WHERE username='$user_id'");
        echo '<div class="alert alert-danger" role="alert">User ' . $user_id . ' has been changed to an ordinary user.</div>';

      }

    }

    echo '<h2>Members</h2>';
    echo '<hr />';
    echo $members_table_head;

    $query  = "SELECT username, firstname, lastname, is_active, is_admin FROM users ORDER BY firstname DESC";
    $result = queryMysql($query);
    $num    = $result->num_rows;

    if (!$num) {

      echo '<div class="alert alert-danger" role="alert">No members yet.</div>';

    } else {

      for ($j = 0 ; $j < $num ; ++$j)
      {
        $row = $result->fetch_array(MYSQLI_ASSOC);

        echo '<tr>';
        echo '<th scope="row">'. $row['username'] . '</th>';
        echo '<td>'. $row['firstname'] . '</th>';
        echo '<td>'. $row['lastname'] . '</th>';
        echo '<td>'. ($row['is_admin'] == 1 ? 'YES' : 'NO') . '</td>';
        echo '<td>'. ($row['is_active'] == 1 ? 'YES' : 'NO') . '</td>';
        echo '<td>' . ($row['is_admin'] == 0 ? '<a href="members.php?action=changetoadmin&user_id=' . $row['username'] . '">Change Role</a>'
              : '<a href="members.php?action=changetoordinary&user_id=' . $row['username'] . '">Change Role</a>');
        echo ' | ' . ($row['is_active'] == 1 ? '<a href="members.php?action=deactivate&user_id=' . $row['username'] . '">Deactivate</a></td>'
              : '<a href="members.php?action=activate&user_id=' . $row['username'] . '">Activate</a></td>');
        echo '</tr>';
      }

      echo '  </tbody>
      </table>';

    }

  }
