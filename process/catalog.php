<?php
	
	namespace cliqs\library\addtocatalog;
	
	//@param-class || subclass
	
	include_once('../include/settings.php');
	include_once('../class/users.php');
	
	use cliqs\library\users\user as me;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$from=(int)$_POST['from'];
	
	if($from==1){
		//Class
		
		$classname=(string)mysqli_real_escape_string($link,stripslashes($_POST['classname']));
		$acr=(string)$_POST['acr'];
	
		if(is_string($classname) && is_string($acr) && !empty($classname) && !empty($acr) && strlen($acr)==1){
			
			
			$connectme->iconnect();
			$checkme->checkSys();
			$me->addclass($classname,$acr);
			
		}else{
			echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Incorrect Field Format Or Missing Field(s)";
		}
	}else if($from==2){
		//Subclass
		
		$sbclassname=(string)mysqli_real_escape_string($link,stripslashes($_POST['sbclassname']));
		$sbacr=(string)$_POST['sbacr'];
		$dcls=(int)$_POST['dcls'];
		
		if(is_string($sbclassname) && is_string($sbacr) && !empty($sbclassname) && !empty($sbacr) && strlen($sbacr)==1){
			
			
			$connectme->iconnect();
			$checkme->checkSys();
			$me->addsubclass($dcls,$sbclassname,$sbacr);
			
		}else{
			echo "<img src='../images/cancel.png' width='auto' height='14px'>&nbsp;Incorrect Field Format Or Missing Field(s)";
		}
		
		}
}
	exit();
?>