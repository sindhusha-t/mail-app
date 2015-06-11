<?php
session_start();
if(isset($_POST['login']))
{
	$e=$_POST['e'];
	$p=$_POST['p'];
	if(file_exists("usersdata/$e") && file_exists("usersdata/$e/$p"))
	{
	$_SESSION['user']=$e;
	//header('location:home.php');
	?>
	<script type="text/javascript">
		window.location="home.php";
	</script>
	<?php
	}
	else
	{
	echo "<font color='red' size='24'>invalid user name or password</font>";
	}
}
?>

<form method="post"><h1 align="center">LOGIN</h1>
</br></br></br><h3 align="center">
	enter your email:&nbsp;&nbsp;&nbsp;<input type="text" name="e"/><br/></br>
	enter your password:&nbsp;<input type="password" name="p"/><br/></br>&nbsp;&nbsp;
	<input type="submit" value="LogIn" name="login"/></h3>
</form>