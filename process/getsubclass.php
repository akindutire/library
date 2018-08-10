<?php


namespace cliqs\library\subclass;
	
	include_once('../include/settings.php');
	include_once('../class/users.php');
	
	use cliqs\library\users\user as me;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	
	$id=$_POST['id'];
	$fsql=mysqli_query($link,"SELECT acry FROM libclass WHERE id='$id'");
	list($ac)=mysqli_fetch_row($fsql);
	$sql=mysqli_query($link,"SELECT * FROM sbclass WHERE classid='$id'");
	while(list($sid,$cls_id,$subclass,$acryn)=mysqli_fetch_row($sql)){
		
		echo "<option value='$sid'>$ac$acryn->$subclass</option>";
		
		}
?>