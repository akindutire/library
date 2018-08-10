<?php
	
	namespace cliqs\library\request;
	
	//@param-class || subclass
	
	include_once('../include/settings.php');
	include_once('../class/users.php');
	
	use cliqs\library\users\user as me;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	use cliqs\library\users\records as records;

	
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	$record=new records();


			$connectme->iconnect();
			$checkme->checkSys();

	
		$pendingid=$_POST['pid'];
		$requestid=(int)$_POST['rqtype'];
		if($requestid==1){
			$me->acceptrequest($pendingid);
		}else if($requestid==2){
			$me->declinerequest($pendingid);
		}else if($requestid==3){
			$i=$_POST['ibk'];
			$me->returntolib($i);
			}
		
	
	exit();
?>