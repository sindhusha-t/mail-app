<?php
session_start();
$user=$_SESSION['user'];
$od = opendir("usersdata/$user/sent");
echo "<h1>Your Sent Messages</h1>";	
while($file=readdir($od))
{
	if($file!="." && $file!="..")
	{
	echo "<form method='post'>";
	echo "<input name='i[]' value='$file' type='checkbox'/>&nbsp;&nbsp;";
	echo "<a href='home.php?inb=$file'>".$file."</a><hr/>";
	}
}
?>
<input type="submit" value="Delete" name="del"/>
</form>

<?php
if(isset($_POST['del']))
{
$inbox=$_POST['i'];
foreach($inbox as $v)
{
	unlink("usersdata/$user/inbox/$v");
	echo $v;
}
	echo "Message deleted";
}
?>