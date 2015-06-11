<html>
	<head>
		<title>Mailserver</title>
		</head>
	<body bgcolor="silver">
		<table border="1" bgcolor="white" width="1000" align="center">
				<tr height="150" align="center" width="1000" colspan="5">
					<td><h1>MAIL SERVER</h1></td>			
				</tr>
				<tr height="50" align="center" width="1000">
				<td>
					<a href="index.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="index.php?option=about">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="index.php?option=contact">CONTACT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="index.php?option=regs">REGISTRATION</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="index.php?option=login">LOGIN</a>
				</td>
			</tr>
			<tr height="500" colspan="5" align="center" width="1000">
				<td valign="top">
					
					<?php
					$opt = $_GET['option'];
					if($opt=="")
					{
					echo "Welcome to MAIL SERVER<br/>You can send messages and can check your inbox messages </br> ";
					}
					else
					{
					switch($opt)
					{
					case 'about':
					include('aboutus.php');
					break;
					case 'contact':
					include('contactus.php');
					break;
					case 'regs':
					include('regis.php');
					break;
					case 'login':
					include('login.php');
					break;
					}
				}	
					?>
					
				</td>
			</tr>
		</table>
	</body>
</html>