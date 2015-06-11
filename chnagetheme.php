<?php
$od=opendir("btheme");
while($file = readdir($od))
{
	if($file!="." && $file!="..")
	{
	
	echo "<a href='home.php?chngthms=$file'>
		<img src='btheme/$file' width='250'/>&nbsp;
		</a>";

	}
}
?>