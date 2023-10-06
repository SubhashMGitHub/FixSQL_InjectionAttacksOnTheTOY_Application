<?php

  require_once('html_functions.php');

  $dbhost  = '127.0.0.1';
  $dbname  = 'CS5340-TOY-APPLICATION';
  $dbuser  = 'root';
  $dbpass  = '';

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

  if ($connection->connect_error) {
    die("Fatal Error");
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) {
      die("Fatal Error");
    }
    return $result;
  }

  function destroySession()
  {
    $_SESSION = array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function checkIfLoggedIn()
  {
    $loggedin = FALSE;

    if (isset($_SESSION['user']))
      $loggedin = TRUE;

    return $loggedin;
  }

  function checkIfAdmin()
  {
    $isadmin = FALSE;

    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)
      $isadmin = TRUE;

    return $isadmin;
  }

  function _make_url_clickable_cb($matches) {
	$ret = '';
	$url = $matches[2];

	if ( empty($url) )
		return $matches[0];
	if ( in_array(substr($url, -1), array('.', ',', ';', ':')) === true ) {
		$ret = substr($url, -1);
		$url = substr($url, 0, strlen($url)-1);
	}
	return $matches[1] . "<a href=\"$url\" rel=\"nofollow\">$url</a>" . $ret;
}

function _make_web_ftp_clickable_cb($matches) {
	$ret = '';
	$dest = $matches[2];
	$dest = 'http://' . $dest;

	if ( empty($dest) )
		return $matches[0];
	if ( in_array(substr($dest, -1), array('.', ',', ';', ':')) === true ) {
		$ret = substr($dest, -1);
		$dest = substr($dest, 0, strlen($dest)-1);
	}
	return $matches[1] . "<a href=\"$dest\" rel=\"nofollow\">$dest</a>" . $ret;
}

function _make_email_clickable_cb($matches) {
	$email = $matches[2] . '@' . $matches[3];
	return $matches[1] . "<a href=\"mailto:$email\">$email</a>";
}

function make_clickable($ret) {
	$ret = ' ' . $ret;

  $ret = preg_replace_callback('#([\s>])([\w]+?://[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_url_clickable_cb', $ret);
	$ret = preg_replace_callback('#([\s>])((www|ftp)\.[\w\\x80-\\xff\#$%&~/.\-;:=,?@\[\]+]*)#is', '_make_web_ftp_clickable_cb', $ret);
	$ret = preg_replace_callback('#([\s>])([.0-9a-z_+-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,})#i', '_make_email_clickable_cb', $ret);

	$ret = preg_replace("#(<a( [^>]+?>|>))<a [^>]+?>([^>]+?)</a></a>#i", "$1$3</a>", $ret);
	$ret = trim($ret);
	return $ret;
}
