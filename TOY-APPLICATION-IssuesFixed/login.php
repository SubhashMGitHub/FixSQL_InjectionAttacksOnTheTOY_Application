<?php
  require_once('header.php');
  $error = $user = $pass = "";

//start
  $dbhost  = '127.0.0.1';
  $dbname  = 'CS5340-TOY-APPLICATION';
  $dbuser  = 'root';
  $dbpass  = '';

  $DB_connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die($DB_connection);
  //end

  if (isset($_POST['userlogin']))
  {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "" || $pass == "") {

      echo '<div class="alert alert-danger" role="alert">Not all fields were entered.</div>';
      echo $login_form;

    } else {

      //$result = queryMySQL("SELECT username, CONCAT_WS('', firstname, ' ', lastname) as uname, is_admin FROM users
        //WHERE username='$user' AND password='$pass' AND is_active=1");
	
	 $user=stripcslashes($user);
	 $pass=stripcslashes($pass);
	 $user=mysqli_real_escape_string($DB_connection, $user);
	 $pass=mysqli_real_escape_string($DB_connection, $pass);
		
	  $result = queryMySQL("SELECT username, CONCAT_WS('', firstname, ' ', lastname) as uname, is_admin FROM users
        WHERE username='$user' AND password='$pass' AND is_active=1");

      if ($result->num_rows == 0)
      {
        echo '<div class="alert alert-danger" role="alert">Invalid login attempt.</div>';
        echo $login_form;
      }
      else
      {

        $row = $result->fetch_array(MYSQLI_ASSOC);

        $_SESSION['user'] = $row['username'];
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['is_admin'] = $row['is_admin'];
        setcookie("user_details", $row['username'], time()+3600*24, "/");
	    setcookie("is_admin", $row['is_admin'], time()+3600*24, "/");

        $uri = $_SERVER['REQUEST_URI'];
        $uri_tokens = explode("/", $uri);

        if ($uri_tokens[1] == "login.php") {
          echo("<script>location.href = 'board.php';</script>");
        } else {
          $redirect_uri = $uri_tokens[1] . "/board.php";
          echo("<script>location.href = '" . $redirect_uri . "';</script>");
        }

      }
    }

  } else {

    echo $login_form;

  }

  echo $end_html;
