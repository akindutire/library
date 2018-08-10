<?php
namespace cliqs\library\mypanel;

	include_once('../class/users.php');
	include_once('../include/settings.php');

	use cliqs\library\users\user as me;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	
	$me=new me();
	$connectme=new connectme();
	$checkme=new ivalid();
	$r='staff';	
	$me->verifylogin($r);

header('Content-Type:text/html; charset=utf-8');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>The E Library |Add Irem</title>
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
			    <li><a href='addmem.php'><span>Add Member</span></a></li>
			    <li><a href='addtolibrary.php'><span>Add Item</span></a></li>
                <li><a href='managerecords.php'><span>Manage Records</span></a></li>
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
        <div id="feedback" style="background:transparent; text-align:center; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px;"></div>
         
        
        <form action="../process/item.php" method="post">
		
        
            <div class="all"><label>PDF/DOCX/EPUB</label><input type="file" name="file" id="hfile" required></div>
        	<div class="all"><label>Title</label><input type="text" name="title" id="title" required></div>
            <div class="all"><label>ISBN</label><input type="text" name="isbn" id="isbn" required></div>
        	<div class="all"><label>Author</label><input type="text" name="author" id="author" required></div>           	   
        	
            <div class="all"><label>Publication Yr.</label><select name="pbyr" id="pbyr">
            <?php 
			$c=date('Y',time());
			for($i=1900;$i<=$c;$i++){
				echo "<option value='$i'>$i</option>";
				}
			
			?>
            </select></div>
            
            <div class="all"><label>Published by</label><input type="text" name="pbby" id="pbby" required></div>
            
            <div class="all"><label>Class</label><select name="class" id="class">
			<?php 
			
			$sql=mysqli_query($link,"SELECT * FROM libclass");
			while(list($id,$class,$acrynm)=mysqli_fetch_row($sql)){
				echo "<option value='$id'>$acrynm->$class</option>";
			}
			
			?>
            </select></div>
            
            <div class="all" id="subclass"><label>Subclass</label><select name="sbclass" id="sbclass">
            
            
            </select></div>
                   	
                
 	       	<div class="all"><label></label><button type="submit" id="additem">Add Book</button></div>   
        
        </form>
        
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