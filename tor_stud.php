<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Log</title>
</head>
<style>

.table {
            border-collapse: collapse;
            width: 101%;
			font-family:Keep Calm;
           
        }
        th, td {
            
            padding: 10px;
            text-align: left;
        }
        tr:hover {
            background-color: #e5e5e5;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        th {
            background-color: black;
            color: white;
            border: #4CAF50;
			
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

<div style="width:900px;margin:auto;">


	
<form method="POST" id="IT">
<table border="0" id="BSIT" class="table">
	
		
	<thead>
		<tr>	
			<th>Id</th>
			<th>Student Name</th>
			<th> School Year</th>
			<th> Course</th>
			<th> Year Level</th>
			<th> Action</th>
		</tr>
	</thead>	
		<?php
		require_once "../classDB.php";
				$db = new classDB;
				$db->connect();
				
					$course=$_REQUEST['course'];
					$level=$_REQUEST['level'];
					$sem=$_REQUEST['sem'];
				
					$result=mysql_query("SELECT * FROM enrolment_school_year_date");
					while($row=mysql_fetch_array($result)){
						$year=$row['year'];
						$term=$row['term'];
						
				$query = mysql_query ("SELECT * FROM tblstudent_enrolment where student_course='$course' AND year_level='$level' AND semester='$sem' order by id");
				
					while ($row = mysql_fetch_array($query))
					{
					$id = $row['student_no'];	
					$school_year= $row['sy'];
					$student_course = $row['student_course'];	
					$year_level = $row['year_level'];	
					$last_name = $row['last_name'];
					$first_name = $row['first_name'];
					$middle_name = $row['middle_name'];
					$course = $row['student_course'];
					$semester = $row['semester'];
					$name = ucfirst($last_name).", ".ucfirst($first_name)." ".ucfirst($middle_name)." ";
					
					

	echo"	<tr>	
			<td style='width:10%;'>$id</td>
			<td>$name</td>
			<td>$school_year</td>
			<td>$student_course</td>
			<td>$year_level</td>
			<td>
				<a href='viewgrade.php?iid=$id&course=$course&year=$year_level&sem=$semester'>View Grade</a> |
				<a href='viewtranscript.php?id=$id&course=$course'>View Transcript</a>
			</td>
				
			
			
			
		</tr>";
			
					
						}
					}
				
					?>
				
</tbody>





</table>
</form>
</div>
</body>
   <script src="../Enrollment/bootstrap/js/jquery.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-transition.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-alert.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-modal.js"></script>
	 <script src="../Enrollment/jquery/jquery.dataTables.min.js"></script>
    <script src="../Enrollment/jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#BSIT").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
</script>
</html>