<?php
namespace cliqs\library\mypanel;

	include_once('../class/users.php');
	include_once('../include/settings.php');

	use cliqs\library\users\user as me;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	use cliqs\library\users\records as records;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	$record=new records();
	$r='Staff';	
	$me->verifylogin($r);

//header('Content-Type:text/html; charset=utf-8');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>The E Library | cPanel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--slider-->


<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/check.js"></script>


<style>
@import "../css/forms.css";
@import "../css/interim.css";
@import "../css/style.css";
@import "../css/slider.css";
@import "../css/table.css";
</style>

</head>
<body>
<div class="btm_border">
<div class="h_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src=<?php echo L; ?> alt=""></a></h1>
		</div>
		<div class="clear"></div>
	</div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
			    <li class='active'><a href=<?php $_SERVER['PHP_SELF']; ?>><span>Home</span></a></li>
			    <li><a href='addmem.php'><span>Add Member</span></a></li>
			    <li><a href='addtolibrary.php'><span>Add Item</span></a></li>
                <li><a href='managerecords.php'><span>Manage Records</span></a></li>
			    <li class='last'><a href='lgt.php'><span>Logout</span></a></li>
			 	<div class="clear"></div>
			 </ul>
	</div>
	<div class="search">
    	<form>
    		<input type="text" value="" name="searching" placeholder="Search Borrowers list" disabled>
    		<input type="submit" value="" name="searchme" disabled>
    	</form>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
<!------ Slider_bg ------------>
<div class="slider_bg">
<div class="wrap">
	
          
          
		<!------End Slider ------------>
		<!--<div class="grids_1_of_3">
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon1.jpg">
					  <h3>Lorem Ipsum is simply</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur.</p>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon2.jpg">
					  <h3>Lorem Ipsum is simply</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur.</p>
				</div>
				<div class="grid_1_of_3 images_1_of_3">
					  <img src="images/icon3.jpg">
					  <h3>Lorem Ipsum is simply</h3>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur.</p>
				</div>-->
				<div class="clear"></div>
			
       <div id="form_cont">
        
         <div id="feedback" style="background:transparent; text-align:center; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px;"><b>Pending Borrowers Request</b></div>
        <br>
        
        <form action="process/view.php" method="post" id="vlib" style="margin:0px;">
        	
            <table border="0" draggable="true" cellspacing="0" cellpadding="8px" style="padding:2px; background:transparent; border:0px; width:100%;">
              
              
              <?php $record->pendingrequests(); ?>>
              
              
                
        	</table>
            
           </form>
			
           </div>

            
          </div>
</div>
</div>
<!--main-->


<!--footer-->
<div class="footer-bg"></div>
<!--footer1-->
<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
		<div class="copy">
			<p class="w3-link"><?php echo F; ?></p>
		</div>
		<div class="clear"></div>	
	</div>
	</div>
</div>
</body>
</html>>