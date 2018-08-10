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

	
	$r='staff';	
	$me->verifylogin($r);



?>
<!DOCTYPE HTML>
<html>
<head>
<title>The E Library |Add item</title>
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
			     <li class='active'><a href='cpanel.php'><span>Home</span></a></li>
			    <li><a href='member.php'><span>Members</span></a></li>
                <li><a href='catalog.php'><span>Catalogs</span></a></li>
                <!--<li><a href='addmem.php'><span>Catalogs</span></a></li>-->
                <li><a href='borrower.php'><span>Borrowers</span></a></li>
			    <li><a href='books.php'><span>Books</span></a></li>
			    <li class='last'><a href='lgt.php'><span>Logout</span></a></li>
			 	<div class="clear"></div>
			 </ul>
	</div>
	<div class="search">
    	<form>
    		<input type="text" value="" name="searching" placeholder="Search By Call Number" disabled>
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
       
       <div id="left">
       
  	     <div id="feedback" style="background:transparent; text-align:center; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:100%; text-align:center; border-radius:3px;"></div>
       
       <main>
       		<form action="../process/catalog.php" method="post" style="margin:4% 1% auto 1%;">
                <div class="all"><label>Class Name</label><input type="text" name="classname" id="classname" required></div>
    	    	<div class="all"><label>Acronym</label><input type="text" name="acr" id="acr" maxlength="1" required></div>
			   	<div class="all"><label></label><button type="submit" id="addclass">Add Catalog</button></div>   
            </form>
	   </main>
       
       <subclass style="display:none;">
       		<form action="../process/catalog.php" method="post" style="margin:4% 1% auto 1%;">
                <div class="all"><label>Subclass</label><input type="text" name="sbclassname" id="sbclassname" required></div>
    	    	<div class="all"><label>Acronym</label><input type="text" name="sbacr" id="sbacr" maxlength="1" required></div>
			   	<input type="hidden" name="dcls" id="hiddensubfield">
                <div class="all"><label></label><button type="submit" id="addsubclass">Add Subclass</button></div>
                   
            </form>
	   </subclass>
       
       
       </div>
       
       <div id="right">
       
       <h4>Classification</h4>
       
       
       <cc>
			<!--Classes Are Loaded HERE-->	
            <?php $record->libraryclass(); ?>
		
      </cc>
      
      
      <scc style='display:none;'>
			
            <!--Sub Class Are Loaded Here-->
		
      </scc>
      
      
      </div>
       
       
       
  </div>
       
     
     
     
       <div style="clear:both"></div>
       
       <div id="form_cont">
        
         
        
        
             <div id="feedbackq" style="background:transparent; text-align:center; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px;"></div>
         		
                <p style="color:green; font-size:10px; cursor:alias;">
                	
                    
                    <center>
       
       					<?php
                        
						
						?>
                    
                    </center>	
                </p>
        </div>

            
            </div>
</div>
</div>
<!--main-->
<div class="main_bg">
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