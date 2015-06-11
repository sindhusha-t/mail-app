<?php
session_start();
$user=$_SESSION['user'];
if(isset($_POST['save']))
{
	$n=$_POST['n'];
	$p=$_POST['p'];
	$ph=$_POST['ph'];
	if(file_exists("usersdata/$user"))
	{
	$err="<font color='red'>user already exists</font>";
	}
	else
	{
	$fo=fopen("usersdata/$user/$p","w");
	fwrite($fo,"Name:$n,Email:$user,Password:$p,Phone Number:$ph");
	}
}
?>
<form method="post"><h1 align="center">EDIT  PROFILE</h1>
<h3 align"center"><?php echo $err; ?><br/>
<div align="center"><table align="center"><tr><td>
	enter your Name:</td><td><input type="text" name="n"/></td></tr><tr><td>
	enter your Password:</td><td><input type="password" name="p"/></td></tr><tr><td>
	enter your Phone Number:</td><td><input type="text" name="ph"/></td></tr><tr><td>
	<input type="submit" value="Save" name="save"/></td>
	<td><input type="reset" value="Reset" name="reset"/></td></tr></table></div></h3>
</form>