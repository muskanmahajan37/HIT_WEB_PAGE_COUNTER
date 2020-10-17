<?php
$localhost=$_SERVER['REMOTE_ADDR'];
$username='rohan';
$password='pass';
$mydb='rohan_db';
if(!@mysql_connect('$localhost','$username','$password')||!@mysql_select_db($mydb))
{
    die("could'nt connect");
}

?>