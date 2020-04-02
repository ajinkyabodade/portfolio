<!DOCTYPE html>
<?php
error_reporting(0);
include('php/dbconnect.php');
include('php/checklogin.php');
$fname = $_SESSION[fname];

?>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/elaadmin/layout-blank.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 02 Jul 2018 12:45:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Quiz Results | Ganesh Deshmukh</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	
	
<![endif]-->
<style>
@media only screen and (max-width: 800px) {
    
    /* Force table to not be like tables anymore */
	#no-more-tables table, 
	#no-more-tables thead, 
	#no-more-tables tbody, 
	#no-more-tables th, 
	#no-more-tables td, 
	#no-more-tables tr { 
		display: block; 
	}
 
	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
 
	#no-more-tables tr { border: 1px solid #ccc; }
 
	#no-more-tables td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		white-space: normal;
		text-align:left;
	}
 
	#no-more-tables td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 50%; 
		padding-right: 10px; 
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}
 
	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
	
	table
	{
		margin-top:80px;
	}
}
</style>
</head>

<body class="fix-header fix-sidebar" >
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <?php include('php/header.php');?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
 <script src="js/lib/jquery/jquery.min.js"></script>
        <div class="page-wrapper" style="background-color:#F2F2F2;";>
            <!-- Bread crumb -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Results</h3> 
				</div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12">
								<div class="w3-card-4 w3-white animated zoomIn" id="allresult">
									<header class="w3-container w3-light-grey">
									  <h1>Results</h1>
									</header>
									<div class="w3-container" style="padding-top:15px; padding-bottom:15px; text-transform:capitalize;">
										<div class="table-responsive" id="no-more-tables">
											<p>Click on the date to check correct answers and solution.</p>
											<table id="bootstrap-data-table1" class="table table-striped table-condensed cf">
												<thead class="cf" style="border-top:none;">
													<tr >
														<th>#</th>
														<th>Date</th>
														<th>Category</th>
														<th>Correct Answer</th>
														<th>Total Points</th>
													</tr>
												</thead>
												<tbody>
												<?php	
												
													$sql = "select distinct date from answers where date != '".date('Y-m-d')."'";
													
													$q = $conn->query($sql);
													
													for($i=0;$i<$q->num_rows;$i++)
													{
													
													$res = $q->fetch_assoc();	
													
													$points = 0;
													
													$cat = '';
													
													
													
													$sql5 = "select * from answers where user_id='".$_SESSION['quiz_id']."' and date = '".$res['date']."'  ";
														
													$q5 = $conn->query($sql5);
													if($q5->num_rows == 0)
													{
														goto a;
													}
													else
													{
														for($j=0;$j<$q5->num_rows;$j++)
														
														{
															
															
															
															$res5 = $q5->fetch_assoc();
															
															
																
															if(date("d-m-Y",strtotime($res5['date'])) == date("d-m-Y",strtotime($res['date'])))

															{
																
																$sql6 = "select * from question where ques_id=".$res5['ques_id'];
																
																$q6 = $conn->query($sql6);
															
																if($q6->num_rows == 1)
																
																{
																	
																	$res6 = $q6->fetch_assoc();
																	
																	if($res6['answer'] == $res5['answer'])
																		
																	{
																		
																		$points++;
																		
																	}
																	
																	$cat = $res6['examtype'];
																	
																}
																
															}
														
														}
													}
														?>	
															<tr id="datevalue<?php echo $i+1; ?>" data-value="<?php echo date("Y-m-d",strtotime($res['date'])) ?>" >
																<td data-title="#" scope="row"><p style="cursor: pointer; margin-bottom:0;"><?php echo $i+1; ?></p></td>
																<td data-title="Date" ><p style="cursor: pointer; margin-bottom:0;"><?php echo date("d F Y",strtotime($res['date'])) ?></p></td>
																<td data-title="Category"><p style="cursor: pointer; margin-bottom:0;"><?php echo $cat; ?></p></td>
																<td data-title="Correct Answer"><p style="cursor: pointer; margin-bottom:0;"><?php echo $points; ?></p></td>
																<td data-title="Points"><p style="cursor: pointer; margin-bottom:0;"><?php echo $points * 10; ?></p></td>
															</tr>
															<script>
																$("#datevalue<?php echo $i+1; ?>").click(function(){
																	var x = $("#datevalue<?php echo $i+1; ?>").attr("data-value");
																	result(x);
																});
															</script>
														<?php
														a:
													}
														
												?>	
												</tbody>
											</table>
										</div>
									</div>
								</div>

								<div  id="dateresult" style="display:none;">
									
								</div>	
								
							</div>
							<div class="col-lg-12" style="margin-top:30px;">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1773795397980564"
     data-ad-slot="9986977295"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12" >
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1773795397980564"
     data-ad-slot="9986977295"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
							</div>
							
						</div>
					</div>
					
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Created by <a style="color:#4FC1EA;" target="_blank" href="http://anandbhagat.co.in">Anand Bhagat</a> - 7875219661 & <a style="color:#4FC1EA;" target="_blank" href="https://www.linkedin.com/in/ajinkya-bodade/">Ajinkya Bodade</a> - 7066425769, Template designed by <a target="_blank" href="https://colorlib.com/">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
   
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
	
	<script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
	
	<?php echo $_SESSION['fname']."'s Quiz Result.";?>
	
	
	<?php echo "
	<script>
		$(document).ready(function() {
			//$('#bootstrap-data-table1').DataTable();
			
			$('#bootstrap-data-table1').DataTable({
				dom: 'Bfrtip',
				buttons: [
					 {
						extend: 'excelHtml5',
						title: '".$fname." Quiz Result.'
					},
					{
						extend: 'pdfHtml5',
						title: '".$fname." Quiz Result.'
					}
				],
				responsive: true
				
			});
		});
		
	</script>"; ?>
	
	<script>
		function result(data)
		{
			$("#allresult").css("display", "none");
			$("#dateresult").css("display", "block");
			
			
			$.ajax({  
                url:"viewresult.php",  
                method:"POST",  
                data:{date:data},  
                success:function(data1){  
                     $('#dateresult').html(data1);  
                }  
           });
		}
	</script>
	
	
	
</body>
</html>