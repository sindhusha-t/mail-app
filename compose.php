<?php
session_start();
$user=$_SESSION['user'];
if(isset($_POST['send']))
{
$to=$_POST['to'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
	if(file_exists("usersdata/$to"))
	{
		//receiver
		$sub=$sub."--".$user;
		$fo = fopen("usersdata/$to/inbox/$sub","w");
		fwrite($fo,$msg);
		
		//sender
		$sub1=$sub."--".$to;
		$fo = fopen("usersdata/$user/sent/$sub1","w");
		fwrite($fo,$msg);
		
		echo "Message sent";
	}
	else
	{
	echo "<font color='red'>user doesn't exists</font>";
	}
}
//draft
if(isset($_POST['save']))
{
$to=$_POST['to'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];
		//receiver
		$sub=$sub;
		$fo = fopen("usersdata/$user/draft/$sub","w");
		fwrite($fo,$msg);
echo "msg saved";
}
	
?>
<form method="post"><div align="center">
<table align="center">
	<tr><td>To:</td><td><input type="text" name="to"/></td></tr>
	<tr><td>Subject:</td><td><input type="text" name="sub"/></td></tr>
	<tr><td>Message:</td><td><textarea  name="msg"></textarea></td></tr>
	<tr><td colspan="2"><input type="submit" value="Send" name="send"/>
	<input type="submit" value="Save" name="save"/></td></tr>
</table></div>	
</form>