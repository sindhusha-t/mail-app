<?php
session_start();
$user=$_SESSION['user'];
if(isset($_POST['upd']))
{

$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
	if(file_exists("usersdata/$user/$op"))
	{
		if($np==$cp)
		{
		rename("usersdata/$user/$op","usersdata/$user/$np");
		echo "<font color='blue'>congtrates pass updated</font>";
		}
		else
		{
		echo "<font color='red'>new and confirm pass not matched</font>";
		}
	}
	else
	{
	echo "<font color='red'>old pass doesn't matched</font>";
	}
}

?>
<form method="post"><h1 align="center">CHANGE PASSWORD</h1>
<div align="center"><table align="center"><tr><td>
	enter your old password:</td><td><input type="text" name="op"/></td></tr><tr><td>
	enter your new password:</td><td><input type="text" name="np"/></td></tr><tr><td>
	enter your confirm password:</td><td><input type="text" name="cp"/></td></tr><tr><td>
	<input type="submit" value="Update Password" name="upd"/></td>
<td><input type="reset" value="Reset" name="rst"/></td></tr>	
</form>