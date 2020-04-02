<!DOCTYPE html>
<?php
error_reporting(0);
include('php/dbconnect.php');
include('php/checklogin.php');


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
    <title>Jobs | Ganesh Deshmukh</title>
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link href="css/style.css" rel="stylesheet">
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
   
	
	
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
                    <h3 class="text-primary"><?php if(!isset($_GET['jobcategory'])) {  echo "Job"; }	else		{ echo $_GET['jobcategory']; }?></h3> 
				</div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
					<?php 
					if(!isset($_GET['jobcategory']))
					{
						$sql1 = "select distinct cat from jobs  ";
								$q1 = $conn->query($sql1);
								
								for($i=0;$i<$q1->num_rows;$i++)
								{
									
									 $res1 = $q1->fetch_assoc();
					?>
					
						<div class="col-md-4">
							<a href="job.php?jobcategory=<?php echo $res1['cat']; ?>"><div class="card bg-pink p-20">
								<div class="media widget-ten">
									<div class="media-left meida media-middle">
										<span><i class="fa fa-envelope f-s-40"></i></span>
									</div>
									<div class="media-body media-text-right">
										<h2 class="color-white"><?php echo $res1['cat']; ?></h2>
										
									</div>
								</div>
							</div></a>
						</div>
						
						
					<?php
								}
								?>
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
							<?php
					}else
					{
					?>
					<div class="col-lg-9">
						<div class="row">
							<div class="col-lg-12" id="alljobs">
							<div class="w3-card-4 w3-white animated zoomIn" style="margin-bottom:30px;" >
										<header class="w3-container w3-light-grey">
										  <h1 ><?php echo $_GET['jobcategory']; ?></h1>
										</header>
										<div class="w3-container" >
											<div class="row " style="margin:10px; ">
												<div class="col-12" >
							<?php
								$sql1 = "select * from jobs where cat = '".$_GET['jobcategory']."' ";
								$q1 = $conn->query($sql1);
								
								for($i=0;$i<$q1->num_rows;$i++)
								{
									
									 $res1 = $q1->fetch_assoc();
									 ?>
									<div class="row companyname" style="margin:10px; cursor:pointer;" data-id="<?php echo $res1['id']; ?>">
												<div class="col-1" style="text-align:center;">
													<?php echo $i+1 .'.'; ?>
												</div>
												<div class="col" >
													<?php echo $res1['companyname']; ?>
												</div>
											 </div>
													
												
								<?php
									}
								?>
								</div>
											 </div>
										</div>
									</div>
							</div>
							<div class="col-lg-12" id="job">
								
							</div>
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
					<?php
					}
					?>
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
							</div><div class="col-lg-12" >
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
	
	<script>
	
		
		$(".companyname").click(function(){
			var x = $(this).attr("data-id");
			
			
			$("#alljobs").css("display", "none");
			$("#job").css("display", "block");
			
			
			$.ajax({  
                url:"viewjobs.php",  
                method:"POST",  
                data:{id:x, jobcategory:"<?php echo $_GET['jobcategory'];?>"},  
                success:function(data1){  
                     $('#job').html(data1);  
                }  
           });
		});
		
	</script>
	
	
	
	
</body>
</html>