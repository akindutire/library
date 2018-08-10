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
	$connectme->iconnect();
	$checkme->checkSys();
header('Content-Type:text/html; charset=utf-8');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>The E Library |Explore Shelf</title>
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
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
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
    		<input type="text" value="" name="searching" id="callno" placeholder="Search By Call Number">
    		
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
       
      <style>
      li #bks{
		  display:block;
		  }
		div.all{
			width:320px;
			}
		.all select{
			width:300px;
			}
		.all label{
			width:1px;
			}
      </style>

		<div id="left" style="width:25%;">
          <div id="feedback" style="background:transparent; text-align:center; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:150px; text-align:center; border-radius:3px;"></div>
        <main>
        
        <form action="../process/retrieve.php" method="post" enctype="multipart/form-data" style=" width:300px; margin:4% 1% auto 1%;">
       
        <div class="all"><label></label><select name="class" id="class" autofocus>
           <?php
		   	$sql=mysqli_query($link,"SELECT * FROM libclass");
				while(list($id,$class,$acrynm)=mysqli_fetch_row($sql)){
					echo "<option value='$id'>$acrynm->$class</option>";
				}
		   ?>
        </select></div>
       
        <div class="all" id="subclass"><label></label><select name="sbclass" id="sbclass">
       </select></div>
        
        <div class="all"><label></label><button type="submit" id="exploreshelf">Explore</button></div>
        
        </form>
      
        </main>
      
      
        </div>
        
        <div id="right" style="width:70%;">
        <h4>Books</h4>
        
        <cc>
<!--        <ul class="bks" style="display:block; margin:10px;">
-->      
      	



      
<!--      	</ul>
-->        <cc>
        
        
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