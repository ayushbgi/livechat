<?php
if(isset($_GET) && !empty($_GET)) {
	//extract($_POST);
	$username = $_GET['uname'];
	$usermess = $_GET['umess'];
	$fp = fopen('chat.txt', 'a');
	fputs($fp, $username.":".$usermess."<br>");
//fwrite($fp,$username."\n");
//fwrite($fp,$usermess."\n");
fclose($fp);
 $retrieved_data=file_get_contents("chat.txt");
}

?>