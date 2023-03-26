<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Student</title>
</head>
<style>
#details {
	
	margin-left: 30px;
	position: absolute;
}

#grade {
	margin-top: 115px;	margin-left: 207px;
	position: absolute;
}

body{
	font-size: 16px;
	font-family: Keep Calm;
}

#rows{
	background-color: gray;
	text-align: center;
}

#datas {
	border-radius: 4px;
	font-size: 16px;
	font-family: Keep Calm;
	width: 410px;
}

#update {
	margin-left: 1160px;
	margin-top: -87px;
	font-size: 25px;
	font-family: Keep Calm;
	width: 130px;
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
<br/>
<br/>
<br/>
<br/>
<br/>

<table id="details" cellspacing="10px" border="1" width="1195px" style="position:absolute;font-family: Keep Calm;">
		<tr>
			<td>NAME:</td>
			<td><input id="datas" type="text" name="registration" /></td>
			<td>HOME ADDRESS:</td>
			<td> <input id="datas" type="text" name="entrance"   /></td>
		</tr>
		<tr>
			<td>DATE OF ADMISSION:</td>
			<td><input id="datas" type="text" name="tuition"  required/></td>
			<td>ENTRANCE DATA:</td>
			<td> <input id="datas" type="text" name="counceling"   /></td>
		<tr>
			<td>TITLE DEGREE PURSUED:</td>
			<td> <input id="datas" type="text" name="laboratory"  /></td>
			<td>DATE OF GRADUATION:</td>
			<td> <input id="datas" type="text"  name="falp"  /></td>
			
		</tr>	
		<tr>
			<td>MAJOR:</td>
			<td> <input id="datas" type="text" name="library" /></td>
			<td>MINOR:</td>
			<td> <input id="datas" type="text"  name="falp"  /></td>
		
						
		</tr>
		</table>


</body>
<br/>
<br/>

	<input id="update" type ="submit" name="submit"  value="Update"/>
</div>

</body>
</html>