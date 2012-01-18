<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Andre Venter
 * Date: 2011/12/27
 * Time: 10:31 PM
 * To change this template use File | Settings | File Templates.
 */

function destroySession()
{
	$_SESSION=array();

	if (session_id() != "" || isset($_COOKIE[session_name()]))
	    setcookie(session_name(), '', time()-2592000, '/');

	session_destroy();
}

function sanitizeString($var)
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	$var = stripslashes($var);
	$var = mysql_real_escape_string($var);

	return $var;
}

function showProfile($user)
{
	if (file_exists("$user.jpg"))
		echo "<img src='$user.jpg' border='1' align='left' />";

	$result = queryMysql("SELECT * FROM rnprofiles WHERE user='$user'");

	if (mysql_num_rows($result))
	{
		$row = mysql_fetch_row($result);
		echo stripslashes($row[1]) . "<br clear=left /><br />";
	}


}

function myRegularCURL($url = NULL)
{
    if ($url) {
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        return $output;

    } else {

        return NULL;
    }
}