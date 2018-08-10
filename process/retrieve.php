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

	
		$rv=$_POST['retrieveid'];
		if($rv==1){
			//Load Catalogue

			$record->libraryclass();
			
		}else if($rv==2){
			
			$cls_id=$_POST['clsid'];
			
			$record->librarysbclass($cls_id);
			
		}else if($rv==3){
			//Retrieve Books
			
			$class=$_POST['class'];
			$sbclass=$_POST['sbclass'];
			
			$record->shelf($class,$sbclass);
			
		}else if($rv==4){
			//Retrieve Requests
			
			$record->pendingrequests();
			
		}else if($rv==5){
			//Retrieve Borrowers
			
			$record->borrowers();
			
			}
			
		
		
	
	exit();
?>