<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Setting</title>
</head>
<style>
body {

}

</style>

<body>
<?php
include ('header2.php');


?>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php

include ('dbTOR.php');
if (isset($_POST['submitBtn']))
{

	$schoolyear =$_POST['sy'];
	$semmester = $_POST['sem'];
	$remarks = $_POST['rm'];
	
	
	$insert = "INSERT INTO tbl_torsetting(tor_SETID,tor_schoolyear,tor_semmester,tor_remarks)VALUES (NULL, '$schoolyear', '$semmester', '$remarks')";
	
	$result = mysql_query($insert);
	if($result){
				echo"<script>alert('ok siya')</script>";
			}else{
				echo"<script>alert('tanga ka')</script>";
			}
}



?> 


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<form method="POST">
<label> School Year </label>
<input type="text" name="sy"/>

<label> Semmester</label>
<input type="text" name="sem"/>

<label> Remarks</label>
<input type="text" name="rm"/>

<input type="submit" name="submitBtn" value="Save"/>

</form>

</body>
</html>