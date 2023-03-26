<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment System</title>

<link rel="stylesheet" type="text/css" href="../Enrollment/css1.css" />
	<link rel="stylesheet" type="text/css" href="../Enrollment/css2.css" />
<style>
	
@import url(https://fonts.googleapis.com/css?family=Roboto:400,700,500);

/* main Styles */

html { box-sizing: border-box; }

*, *:before, *:after { box-sizing: inherit; }

body {
	background-image: url(pic2.jfif);
	background-size:cover;
	background-position:fixed;
	background-repeat: no-repeat;
  margin: 0;
}

a { text-decoration: none; }

.container {
  width: 1000px;
  margin: auto;
}

h1 { text-align:center; margin-top:150px;}

/* Navigation Styles */

nav { 
	background-color: #08700b;
	margin-top:0px; 
	position:fixed;
	width:1400px;
	margin-left:-20px;
	margin-top:120px;
	font-color: Black;
	font-family: Keep Calm;

}

nav ul {
	margin-left:20px;
  font-size: 0;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  position: relative;
}

nav ul li a {

  color: #fff;
  display: block;
  font-size: 14px;
  padding: 17px 13px;
  transition: 0.3s linear;
}

nav ul li:hover { background:  #5c5252 }

nav ul li ul {
  border-bottom: 2px solid;
  display: none;
  position: absolute;
  width: 10px;
  
}

nav ul li ul li {
  border-top: 1px solid ;
  display: block;
  
}

nav ul li ul li:first-child { border-top: none; }

nav ul li ul li a {
	

  display: block;
  padding: 10px 10px;
}

nav ul li ul li a:hover { background: #5c5252 }

nav .fa.fa-angle-down { margin-left: 6px; }



#MainHead {
	position:fixed;
	width:1366px;
	background-color:#9C0;
	height:130px;
	margin-top:0px;
	
	
}

img{
	width:300px;
	height:190px;
	margin-left:-15px;
	margin-top:-27px;
	position:fixed;
}
#payment{
	width:800px;
	margin-left:500px;
	margin-top:100px;
	
}

#header{
	position:fixed;
	background-color:#9bf39d;
	width:1366px;
	height:140px;
	
}

#hlogo{
	width:800px;
	margin-left: 290px;
}
#isu{
	width:130px;
	height:110px;
	margin-left:1145px;
	margin-top:5px;
	position:absolute;
}

#tor{
	width:370px;
	height:130px;
	margin-left:275px;
	margin-top:-5px;
	
}

#view{
	width:350px;
	height:130px;
	margin-left:777px;
	margin-top:-5px;
	
}

#and{
	width:90px;
	height:90px;
	margin-left:667px;
	margin-top:10px;
	
}
</style>

</head>

<body>

<div id="header">
<img id="isu" src="./pics/isu.png"/>
<img id="tor" src="./pics/logotor.png"/>
<img id="view" src="./pics/view.png"/>
<img id="and" src="./pics/and.png"/>
</div>	
<img src="./pics/logo.png"/>
<nav>
  <div class="container">
    <ul>
		<li><a href="tor.php">Home</a></li>
		<li><a href="" href='#' data-toggle='modal' data-target='#addsub'>Student Record</a></li>
		<li><a href="#" data-toggle="modal" data-target="#myModal">Logout</a></li>
	
    </ul>
  </div>
</nav>


<script src="jquery-1.12.4.min.js"></script> 
<script>
$('nav li').hover(
  function() {
	  $('ul', this).stop().slideDown(200);
  },
	function() {
    $('ul', this).stop().slideUp(200);
  }
);
</script>

<div class="modal fade" id="addsub" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Search Year Level</h4>
        </div>
        <div class="modal-body">
          
			<?php 
				require_once('../ClassDB.php');
						if(isset($_POST['sub'])){
							
							$course=$_POST['course'];
							$level=$_POST['level'];
							$sem=$_POST['sem'];
							
							echo"<script>document.location='tor_stud.php?course=$course&level=$level&sem=$sem'</script>";
						}	
							
			?>

									<form method="POST">
										<center>
											
											<span>Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<select name="course" style="width:70%!important" required>
											<option value="">Select Year</option>
											<?php
										
														$db = new classDB;
														$db->connect();
														$db->course();
											
											?>
										</select>
											</span> <br><br>
											<span>Year Level
										<select name="level" style="width:70%!important" required>
											<option value="">Select Year</option>
											<?php
										
														$db = new classDB;
														$db->connect();
														$db->year_level();
											
											?>
										</select>
											</span> <br><br>
											<span>Semester
										<select name="sem" style="width:70%!important" required>
											<option value="">Select Semester</option>
											<option value="First Sem">First Sem</option>
											<option value="Second Sem">Second Sem</option>
											<option value="Sum">Sum</option>
											
										</select>
											</span> <br><br>
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="sub" value="Display" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button> 
											</div>
										</center> 
									</form>
					
        </div>
      
      </div>
      
    </div>
  </div>
  
  
  <!--modal logout-->
  <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logout Confirmation</h4>
        </div>
        <div class="modal-body">
          <?php        
						if (isset($_POST['submit'])){
							if (($_POST['submit'] =='Yes')) {
								
							
								// destroy session
									session_start();
									session_destroy();
								?>
									<script type="text/javascript">
									<!--
										window.location="../index.php";

									//-->
									</script>
								<?php
						
								}
						}else{
								?>

									<form method="POST">
										<center>
											<b>Are you sure you want to Logout? </b> <br><br>
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Yes" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button> 
											</div>
										</center> 
									</form>
					<?php
					}
					?>
        </div>
      
      </div>
      
    </div>
  </div>


     <script src="../Enrollment/bootstrap/js/jquery.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-transition.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-alert.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-modal.js"></script>
	 <script src="../Enrollment/jquery/jquery.dataTables.min.js"></script>
    <script src="../Enrollment/jquery/dataTables.bootstrap.min.js"></script>

</body>
</html>
