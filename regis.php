<?php
if(isset($_POST['save']))
{
	$n=$_POST['n'];
	$e=$_POST['e'];
	$p=$_POST['p'];
	$ph=$_POST['ph'];
	if(file_exists("usersdata/$e"))
	{
	$err="<font color='red'>user already exists</font>";
	}
	else
	{
	mkdir("usersdata/$e");
	mkdir("usersdata/$e/inbox");
	mkdir("usersdata/$e/sent");
	mkdir("usersdata/$e/draft");
	$fo=fopen("usersdata/$e/$p","w");
	fwrite($fo,"Name:$n,Email:$e,Password:$p,Phone Number:$ph");
	//header('location:login.php');
	?>
	<script type="text/javascript">
		window.location="index.php?option=login";
	</script>
	
	<?php
	}
}
?>
<form method="post"><h1 align="center">REGISTRATION</h1>
<h3 align"center"><?php echo $err; ?><br/>
<div align="center"><table align="center"><tr><td>
	enter your Name:</td><td><input type="text" name="n"/></td></tr><tr><td>
	enter your E-mail:</td><td><input type="text" name="e"/></td></tr><tr><td>
	enter your Password:</td><td><input type="password" name="p"/></td></tr><tr><td>
	enter your Phone Number:</td><td><input type="text" name="ph"/></td></tr><tr><td>
	
	<input type="submit" value="Register" name="save"/></td>
	<td><input type="reset" value="Reset" name="reset"/></td></tr></table></div></h3>
</form>