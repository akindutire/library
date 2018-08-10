<?php
	
	namespace cliqs\library\addmember;
	
	//@param-staff || student
	
	include_once('../include/settings.php');
	include_once('../class/users.php');
	
	use cliqs\library\users\user as me;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$telormat=stripslashes(strip_tags(trim($_POST['tel'])));
		$name=ucwords(stripslashes(strip_tags($_POST['name'])));
		$dpt=ucwords(stripslashes(strip_tags(trim($_POST['dpt']))));
		$addr=ucwords(stripslashes(strip_tags($_POST['addr'])));
		$sex=stripslashes(strip_tags(trim($_POST['sex'])));
		$pwd=stripslashes(strip_tags($_POST['pwd']));
		$role=(stripslashes(strip_tags($_POST['role'])));
		
	
		if(is_string($telormat) && is_string($pwd) && !empty($sex) && !empty($pwd) && !empty($addr) && !empty($name)){
			
			$connectme->iconnect();
			$checkme->checkSys();
			$me->addmember($telormat,$name,$dpt,$addr,$sex,$pwd,$role);
			
		}else{
			echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Incorrect Field Format Or Missing Field(s)";
		}
	}
	exit();
?>