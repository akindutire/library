<?php
	namespace cliqs\library\addpdf;
	include_once('../include/settings.php');
	
	
	$name=strtolower($_FILES['hfile']['name']);
	$type=strtolower($_FILES['hfile']['type']);
	$size=(int)($_FILES['hfile']['size']);
	$tmp=$_FILES['hfile']['tmp_name'];
	define('X',101);
	
	
		$arraytype=array('application/pdf','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/epub+zip','application/vnd.openxmlformats-officedocument.presentationml.presentation');
		
		if(!empty($name)){
			if(in_array($type,$arraytype)){
				
					$filename=time().$name;
					
					if(move_uploaded_file($tmp,'../uploads/library/del/'.$filename)){
						$_SESSION['valid']=1;
						$_SESSION['funame']=$filename;
						echo X;
						}else{
							@$_SESSION['valid']=0;

							echo "<b><img src='../images/cancel.png' width='auto' height='13px'>System Error: Couldn't Complete File Submission</b>";
							}
					
					
					}else{
						@$_SESSION['valid']=0;
						
						echo "<img src='../images/cancel.png' width='15px' height='15px'>&nbsp;Unsupported File format, Suggest Using PDF,DOCX OR EPUB file $type";
				}
		}else{
			@$_SESSION['valid']=0;
			echo "<img src='../images/cancel.png' width='15px' height='15px'>&nbsp;No File Selected Or Exceeds Post Size";
			
			}
		
exit();	
?>