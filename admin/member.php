<?php
namespace cliqs\library\mypanel;

	include_once('../class/users.php');
	include_once('../include/settings.php');

	use cliqs\library\users\user as me;
	use cliqs\library\users\records as records;
	use cliqs\library\users\connect as connectme;
	use cliqs\library\users\performance as ivalid;
	
	$me=new me();
	$record=new records;
	$connectme=new connectme();
	$checkme=new ivalid();
	
	
	
	$r='staff';	
	$me->verifylogin($r);

header('Content-Type:text/html; charset=utf-8');

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
    <form action="../process/search.php" method="post">
       <label></label><select name="section" id="section">
             <?php  
			 
			 if($me->haveexternalrights()==1){
				echo "<option value='Staff'>Staff</option>"; 
				}else{
					echo "<option value='Student'>Student</option>";
				}
			 
			  ?>
             
             
             </select>
             
             <input type="hidden" name="searchid" id="searchid" value="<?php echo 2; ?>">
             
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
        
         <div id="feedback" style="background:transparent; text-align:center; color:black; font-size:18px; padding:1px; margin:1% 32% 2px 32%; height:auto; width:350px; text-align:center; border-radius:3px;"><b>Library Users</b></div>
        <br>
        
        
        
	   <form method="post" action="../process/search.php" style="width:90%; margin-left:50%">
			 
    	<div class="all"><label></label>	<input type="text" name="gsearch" id="gsearch" placeholder="Search Member" style="width:100%;">
            
    	</div>
    	
        
              
             <?php  
			 
			 if($me->haveexternalrights()==1){
				echo "<input type='hidden' name='section' id='section' value='Staff'>"; 
				}else{
					echo "<input type='hidden' name='section' id='section' value='Student'>";
				}
			 
			  ?>
             
            
        </form>    
             
        <br>
        
        <form action="../process/actonmem.php" method="post" id="vlib" style="margin:0px; font-family:amble;">
        	
            <table border="0" draggable="true" cellspacing="0" cellpadding="8px" style="padding:2px; background:transparent; border:0px; width:100%;">
              
              
			<?php
      
	  		$record->member();
	  
	  		?>  
      
             
                
        	</table>
            
           </form>
			
          	<div id="feedback" style="background:transparent; color:black; font-family:'Browallia New'; font-size:18px; padding:1px; margin:8px 0px 2px 140px; height:auto; width:350px; text-align:center; border-radius:3px;"></div>	
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
<!--<div class="wrap">
<div class="main">
	<div class="content">
		<h2>what our customer says</h2>
		<h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
		<p><a href="details.html"><img src="../images/pic1.jpg"></a> Cadipisicing elit,Nam ornare vulputate risus,id volutpat elit porttitor non.In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus Nam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. PellentesqueNam ornare vulputate risus, id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas Pellentesque habitant morbi tristique senectus et netus et malesuada fames. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Nam ornare vulputate risus,id volutpat elit porttitor non. In consequat nisi vel lectus dapibus sodales.Nam ornare vulputate risus, id volutpat elit porttitor non.</p>
		<div class="clear"></div>
	</div>
</div>
</div>-->
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