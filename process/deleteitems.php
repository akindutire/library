<?php
	
	namespace cliqs\library\addtocatalog;
	
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

	
		$dv=$_POST['deleteid'];
		if($dv==1){
			//Delete A Book
			
			$bkid=(int)$_POST['bk'];
			
			$me->deleteabook($bkid);
			
			}
	


?>