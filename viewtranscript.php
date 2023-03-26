<style>

.table {
            border-collapse: collapse;
            width: 100%;
			font-family:Keep Calm;
           
        }
        th, td {
            
            padding: 10px;
            text-align: left;
        }
       
     #t1{
		 width:550px;
		 margin:auto;
	 }
	 #imgLogo{
		 width:110px;
	 }
	 #t2{
		 width:900px;
		  margin:auto;
		margin-top:50px;
	 }
	  #t3,#t9{
		 width:1000px;
		  margin:auto;
		
	 }
	 
	  #t4{
		 width:1100px;
		  margin:auto;
		  margin-top:50px;
		
	 }
	  #t5{
		 width:1100px;
		  margin:auto;
		  margin-top:50px;
		
	 }
	 #t6{
		 width:1100px;
		  margin:auto;
		  margin-top:50px;
		
	 }
	 .jaja{
		 width:23%;
		 text-align:center;
	 }
     .cent{
		 text-align:center;
		 
	 }
	#official{
		font-family:Old English Text MT;
		font-size: 30px;
	}
	#lab{
		border: 2px solid red;
		border-radius:10px;
	}
</style>
</br>
<div  class="container">



<table id="t1" border="0" class="table">
<tr>
	<td rowspan="4"><img id="imgLogo" src="../Enrollment/file/FINAL_SEAL.png"/></td>
		
	<td class="cent">Republic of the Philippines </td>
	
</tr>

<tr>
	
	<td class="cent"> <b>ISABELA STATE UNIVERSITY</b></td>
</tr>
<tr> 
	
	<td class="cent">Jones, Isabela </td>
</tr>
<tr> 
	
	<td id="official"><center><label id="lab">Official Transcript of Record</label></center></td>
</tr>
</table>


</br>




<table id="t2" border="0" class="table">
		<?php
			$id=$_REQUEST['id'];
				require_once('dbTOR.php');
				$result=mysql_query("Select * from enrolment_tblstudent where student_no='$id'");
				while($row=mysql_fetch_array($result)){
					$lname=$row['last_name'];
					$fname=$row['first_name'];
					$mname=$row['middle_name'];
					$name=ucfirst($lname).",".ucfirst($fname)." ".ucfirst($mname);
					$major=$row['student_major'];
					$course=$row['student_course'];
					$bday=$row['birthdate'];
					$sy=$row['school_year'];
					$address=$row['Address'];
				}
				
				$res=mysql_query("select * from enrolment_dept_course where course_title='$course'");
				while($row=mysql_fetch_array($res)){
					$desc=$row['course_description'];
				}
				echo"
					<tr>
						<td>NAME</td>
						<td>$name</td>
						<td>HOME ADDRESS</td>
						<td>$address</td>
						
					</tr>
					<tr>
						<td>DATE OF ADMISSION</td>
						<td>$sy</td>
						<td>ENTRANCE DATA</td>
						<td></td>
						
					</tr>
					<tr>
				
						<td>TITLE DEGREE PURSUED</td>
						<td>$desc</td>
						<td>DATE OF GRADUATION</td>
						<td></td>
						
					</tr>
					<tr>
						<td>MAJOR</td>
						<td>$major</td>
						<td>BIRTHDATE</td>
						<td>$bday</td>
						
					</tr>
					
				";	
			?>
		</table>


<br/>
<br/>

<table id="t3" class="table">
		<tr><td colspan='5'><hr></td></tr>
		<tr id="rows">
			<td>COURSE NO.</td>
			<td>DESCRIPTIVE TITLE OF THE COURSE</td>
			<td colspan="2">GRADES</td>
			<td>CREDITS</td>
		</tr>
		<tr id="rows">
			
			<td></td>
			<td></td>
			<td>FINAL</td>
			<td>RE-EXAM</td>
			<td></td>
		</tr>
		<tr><td colspan='5'><hr></td></tr>
		
			<?php
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='First Year' And semester='First Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='First Year' And semester='First Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>First Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='First Year' And semester='Second Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='First Year' And semester='Second Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>Second Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='First Year' And semester='Sum' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='First Year' And semester='Sum' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>Summer:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Second Year' And semester='First Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Second Year' And semester='First Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>First Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Second Year' And semester='Second Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Second Year' And semester='Second Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>Second Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Second Year' And semester='Sum' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Second Year' And semester='Sum' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>Summer:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Third Year' And semester='First Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Third Year' And semester='First Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>First Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Third Year' And semester='Second Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Third Year' And semester='Second Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>Second Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Third Year' And semester='Sum' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Third Year' And semester='Sum' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>Summer:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Fourth Year' And semester='First Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Fourth Year' And semester='First Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>First Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Fourth Year' And semester='Second Sem' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Fourth Year' And semester='Second Sem' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>First Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
				$iid=$_REQUEST['id'];
				$ccourse=$_REQUEST['course'];
				$res=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Fourth Year' And semester='Sum' AND course='$ccourse'");
				$check=mysql_num_rows($res);
				if($check){
				
					$rest=mysql_query("select * from enrolment_tblsubject where stud_id='$iid' AND year_level='Fourth Year' And semester='Sum' AND course='$ccourse'");
					while($row=mysql_fetch_array($rest)){
						$ssy=$row['sy'];
					}
				echo"
						<tr>
							<td>First Sem:$ssy</td>
						</tr>
					";
				while($row=mysql_fetch_array($res)){
					
					$sub=$row['subject'];
					$subDescription=$row['subDescription'];
					$grade=$row['grade'];
					$unit=$row['unit'];
					
					
					echo"
						<tr>
							<td style='width:10px;'>$sub</td>
							<td>$subDescription</td>
							<td>$grade</td>
							<td></td>
							<td>$unit</td>
						</tr>
					";
				}
				echo"<tr><td colspan='5'><hr></td></tr>";
				}
					
				
				
			?>
		</table>
</div>



<table border="0" id="t4" cellspacing="15px" class="table">
<tr>
	<td>
		<center>
		<b> <u>GRADING SYSTEM:</u> <i>Undergraduate: </i></b> 1.00=98-100; 1.25=95-97; 1.75=89-91; 2.0=86-88; </br>
		2.25=83-85; 2.5=80-82; 2.75=77-79; </br>
		3.0=75-76; 5.00 below 70 Failure. <b> Graduate: </b> 1.00-Excellent; 1.25-Very Satisfactory; 1.5-Satisfactory; 1.75 Fairly Satisfactory; 2.00-Good; 2.25-Fairly Good;</br> 
		2.5-Fair; 2.75-Below Fair; 3.00-Passed; Inc.-Rquirements not fully met; 5.00-Failed. A.D.-Authorized Dropping.-Unauthorized dropping. </br>
	</td>
</tr>
<tr>
	<td>
		<span><center>
		<b> <u>CREDITS:</u> </b> One unit is one hour lecture or recitation each week for the period of coplete semester or the equivalent thereof in laboratory,field or</br>
		shop work credited at the rate of one unit for each three hour period.</br>
		</center></span>
	</td>
</tr>
<tr>
	<td><center>
	<b> <u>NOTE:</u> </b> This transcript is valid only when it bears the dry seal of the University  and the original signatures in ink of the signatories below. Any erasures </br>
		or alternations made on this copy renders the whole transcript invalid.</center>
	</td>
</tr>
<tr>
	<td>
	<b> NOT VALID WITHOUT THE UNIVERSAL SEAL</b>
	</td>
</tr>
<tr> </tr>
</table>

</br>
</br>
</br>
<table id="t6" border="0" class="table">
	<tr>
		<td><label> Checked by:</label></td>
	</tr>
</table>

<table id="t5" border="0" class="table">
<tr>
	<td class="jaja"> 
		MARILYN G. PASSION, Ph. D.
		<hr/>
		Acting Registrar
	</td>
	<td class="jaja"></td>
	<td class="jaja">
	RAMON D. VELASCO, Ph. D.
		<hr/>
		Campus Administrator
		
		
	</td>
</tr>

</table>




     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>