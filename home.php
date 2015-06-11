<?php session_start();
$user=$_SESSION['user'];
if($_SESSION['user']=="")
{
header('location:index.php');
}
else
{
 ?>
<html>
	<head>
	<style>
		a:hover{color:red}
		a{font-size:25px;margin:5px}
		table{border-radius:5px}
		table{border:2px solid gray;
		box-shadow:0px 0px 4px 4px gray}
		body{background:#FFFFFF;}
	</style>
		<title>Mailserver</title>
	</head>
	<body bgcolor="silver">
	
		<table border="1" background="theme/
	<?php
	$thm=$_GET['chngthms'];
	if($thm)
		{
	$fo=fopen("usersdata/$user/btheme","w");
	fwrite($fo,$thm);
		}
	$fr = fopen("usersdata/$user/btheme","r");
	$fr1=fread($fr,filesize("usersdata/$user/btheme"));
	echo $fr1;
	?>" bgcolor="white" width="1000" align="center">
				<tr>
				<td colspan="2" width="1000">
					<p align="center" style="color:darkred">Welcome <?php echo $_SESSION['user']; ?>&nbsp;&nbsp;
						<span style="margin-left:150px"><a href="logout.php">Logout</a></span>
				
				</p></td>
			</tr>
			
			<tr height="500">
				<td width="150" valign="top">
					<a href="home.php?option=chngpwd">Chng Pwd</a><br/>
					<a href="home.php?option=chngthm">Chng Thm</a><br/>
					<a href="home.php?option=editprofile">Edit Profile</a><br/>
					<a href="home.php?option=inbox">Inbox</a><br/>
					<a href="home.php?option=compose">Compose</a><br/>
					<a href="home.php?option=draft">Draft</a><br/>
					<a href="home.php?option=sent">Sent</a><br/>
				</td>
				<td valign="top" width="850">
					
					<?php
				$opt =	$_GET['option'];
				if($opt=="chngpwd")
				{
				include('chnagepass.php');
				}
				else if($opt=="chngthm")
				{
				include('chnagetheme.php');
				}
				else if($opt=="editprofile")
				{
				include('editprofile.php');
				}
				else if($opt=="compose")
				{
				include('compose.php');
				}
				else if($opt=="inbox")
				{
				include('inbox.php');
				}
				else if($opt=="draft")
				{
				include('draft.php');
				}
				else if($opt=="sent")
				{
				include('sent.php');
				}
			$inb=$_GET['inb'];
			if(isset($inb))
			{
			$fo=fopen("usersdata/$user/inbox/$inb","r");
			$d=fread($fo,filesize("usersdata/$user/inbox/$inb"));
			echo $d;
			}
			?>
					
				</td>
				
			</tr>
		</table>
	</body>
</html>
<?php } ?>