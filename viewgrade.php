
<!Doctype html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="../Enrollment/css1.css" />
	<link rel="stylesheet" type="text/css" href="../Enrollment/css2.css" />

	
	</head>
	
<?php
	include('header2.php');
	error_reporting(0);
?>
<br>


	<div class="content-wrapper" style="margin-top:170px; margin-left:40px;margin-right:40px;">
        <div class="container-fuid">
          <!-- Content Header (Page header) -->
        

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-warning">
               
                <div class="box-body">
				<div class="row">
					<div class="col-md-12">
				<?php
	$id=$_REQUEST['iid'];
	echo"
		<table border='1' style='width:100%;'>
			<thead>
				<tr>	
					
					<th>Suject</th>
					
					<th>Description</th>
					<th>Grade</th>
					<th>Exam</th>
					<th>Remark</th>
					<th>Action</th>
				</tr>	
					
			
			</thead>
	";
	require_once('dbTOR.php');
	$cours=$_REQUEST['course'];
	$year=$_REQUEST['year'];
	$sem=$_REQUEST['sem'];
	$result=mysql_query("Select * from enrolment_tblsubject where stud_id='$id' AND year_level = '$year' AND semester = '$sem' And course = '$cours'");
	while($row=mysql_fetch_array($result)){
		$sid=$row['id'];
		$stud_id=$row['stud_id'];
		$subject=$row['subject'];
		$subDescription=$row['subDescription'];
		$grade=$row['grade'];
		$exam=$row['exam'];
		$remark=$row['remark'];
		
		echo"
			<tr>
				
			
				<td>$subject</td>
				<td>$subDescription</td>
				<td>$grade</td>
				<td>$exam</td>
				
				<td>$remark</td>
				<td><a href='?iid=$id&ssid=$sid&grade=$grade&exam=$exam&remark=$remark&course=$cours&year=$year&sem=$sem'>Add grade</a></td>
				
			</tr>
		";
		
		
	}
		
		
		?>
		<tr>
			
			<td>
			</td>
			<td>
				<h4 class="pull-right"><strong>GWA</strong></H4>
			</td>
			<td>
				<?php		$cours=$_REQUEST['course'];
							$year=$_REQUEST['year'];
							$sem=$_REQUEST['sem'];
							
                            $result = mysql_query("SELECT sum(grade) FROM enrolment_tblsubject  where stud_id = '$id' AND year_level = '$year' AND semester = '$sem' And course = '$cours'") or die(mysql_error());
                            
							
							
							
							$test_count=mysql_query("select * from enrolment_tblsubject where grade <> '' AND grade <> 'INC' and stud_id = '$id' AND year_level = '$year' AND semester = '$sem' And course = '$cours'")or die(mysql_error());
							$count_gen = mysql_num_rows($test_count);
							
							while ($rows = mysql_fetch_array($result)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(grade)']; 
											  $equal = $ave / $count_gen;
											  echo round($equal , 2);
									?>
						
                            <?php } }?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
		</tr>
		<?php
	echo"	</table>
	";
	
?>



				<form method="POST">
				<input type="submit" name="back" value="Back" class="btn btn-primary col-md-2" style=margin-top:150px;/>		
				</form>
<?php
					if(isset($_POST['back'])){
						$course=$_GET['course'];
						$year=$_GET['year'];
						$sem=$_GET['sem'];
						$level=$_GET['level'];
						echo"<script>document.location='tor_stud.php?course=$course&year=$year&sem=$sem&level=$year'</script>";
					}
				?>		  
		</div><!--col end -->
		         
        </div><!--row end-->        
					
			<?php
				if($_REQUEST['ssid']){
					$dis='';
				}else{
					$dis='none';
				}
				
				
				
				
				?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            <form method="post" action="">
            <div class="col-md-3"style="display:<?php echo $dis ?>;">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
						 <?php $ssiid=$_REQUEST['ssid']; ?>
						 <?php $grad=$_REQUEST['grade']; ?>
						 <?php $ex=$_REQUEST['exam']; ?>
						 <?php $rem=$_REQUEST['remark']; ?>
							<label for="date">Enter Grade</label><br>
								<input type="hidden" class="form-control" name="id" value="<?php echo $ssiid ?>" required>
								<select class="form-control" name="grade" style="width:70%!important">
										<option value="">Select Grade</option>	
										<option <?php if($grad=="1.00"){echo "selected";}?> value="1.00">1.00</option>
										<option <?php if($grad=="1.25"){echo "selected";}?> value="1.25">1.25</option>
										<option <?php if($grad=="1.50"){echo "selected";}?> value="1.50">1.50</option>
										<option <?php if($grad=="1.75"){echo "selected";}?> value="1.75">1.75</option>
										<option <?php if($grad=="2.00"){echo "selected";}?> value="2.00">2.00</option>
										<option <?php if($grad=="2.25"){echo "selected";}?> value="2.25">2.25</option>
										<option <?php if($grad=="2.50"){echo "selected";}?> value="2.50">2.50</option>
										<option <?php if($grad=="2.75"){echo "selected";}?> value="2.75">2.75</option>
										<option <?php if($grad=="3.00"){echo "selected";}?> value="3.00">3.00</option>
										<option <?php if($grad=="INC"){echo "selected";}?> value="INC">INC</option>
										
								</select>
								<input type="text" class="form-control" name="exam"  value="<?php echo $ex ?>" placeholder="Exam">
								<select class="form-control" name="remark" style="width:70%!important" required>
										<option value="">Select Remark</option>	
										<option <?php if($rem=="Pass"){echo "selected";}?> value="Pass">Pass</option>
										<option <?php if($rem=="Failed"){echo "selected";}?> value="Failed">Failed</option>
										<option <?php if($rem=="INC"){echo "selected";}?> value="INC">INC</option>
										
								</select>
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="row ">
                    <div class="col-xs-5 col-xs-offset-1">
                      <button class="btn btn-md btn-block btn-primary" id="daterange-btn" name="addgrade" type="submit">
                        Save
                      </button>
					  </div>
					  <div class="col-xs-5">
					  <button class="btn btn-md btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  </div>
					<?php
						if(isset($_POST['addgrade'])){
							$id=$_POST['id'];
							$grade=$_POST['grade'];
							$exam=$_POST['exam'];
							$remark=$_POST['remark'];
							
							$result=mysql_query("UPDATE enrolment_tblsubject SET grade='$grade',exam='$exam',remark='$remark' WHERE id='$id'");
							if($result){
								$sssid=$_REQUEST['iid'];
								echo"<script>alert('Succesfully Added')</script>";
								echo"<script>document.location='?iid=$sssid&course=$cours&year=$year&sem=$sem'</script>";
							}else{
								echo"<script>alert('Not Succesfully Added')</script>";
							}
						}
					?> 
					  
                   </div>
                   </div>
                  </div><!-- /.form group --><hr>
				</form>	
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
	
     <script src="../Enrollment/bootstrap/js/jquery.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-transition.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-alert.js"></script>
    <script src="../Enrollment/bootstrap/js/bootstrap-modal.js"></script>
	 <script src="../Enrollment/jquery/jquery.dataTables.min.js"></script>
    <script src="../Enrollment/jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#data").DataTable();
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
</body>
</html>



