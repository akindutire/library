<?php
	
	namespace cliqs\library\addtolibrary;
	
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
		
		$title=ucwords(stripslashes(strip_tags(trim($_POST['title']))));
		$author=ucwords(stripslashes(strip_tags($_POST['author'])));
		$isbn=ucwords(stripslashes(strip_tags(trim($_POST['isbn']))));
		$pbyr=ucwords(stripslashes(strip_tags($_POST['pbyr'])));
		$pubby=stripslashes(strip_tags(trim($_POST['pbby'])));
		$c=stripslashes(strip_tags($_POST['class']));
		$sbc=(stripslashes(strip_tags($_POST['subclass'])));
		
	
		if(is_string($title) && is_string($author) && !empty($pubby) && !empty($c) && !empty($sbc)){
			
			
			$connectme->iconnect();
			$checkme->checkSys();
			$me->additem($title,$author,$isbn,$pbyr,$pubby,$c,$sbc);
			
		}else{
			echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Incorrect Field Format Or Missing Field(s)";
		}
	}
	exit();
?>