<!DOCTYPE html>
<?php
include('dbconnect.php');
if(isset($_POST['email']))
{
$email =  mysqli_real_escape_string($conn,trim($_POST['email']));

$sql = "select * from distributed where email='".$email."'";

$q = $conn->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['email']=$res['email'];
$_SESSION['pkey']=$res['pkey'];
$privatekey = $_SESSION['pkey'];



		$sql1 = "select * from user ";
		$q1 = $conn->query($sql1);
        if ($q1->num_rows > 0) {
	    // output data of each row
	    while($res1 = $q1->fetch_assoc()){

	$eemail = $res1["eemail" ];
	
if(openssl_private_decrypt($eemail, $email1, $privatekey))
{
$ecolor =  $res1["ecolor" ];	
$id= $res1["id" ];

	openssl_private_decrypt($ecolor, $color, $privatekey);
$_SESSION['color']=$color;
		$_SESSION['id']=$id;

		
}

	 
	}
	
	}

}else
{
echo '<script type="text/javascript">alert("Email Does Not Exist. Please Enter Correct Email.");
window.location="login.html"; </script>';
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">  
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

</head>
<body > 
   
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact" style="width:100%; height:663px; ">
		 	<div class="section-content" style="margin-top:-70px;">
			
				<h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Enter Your Password</span></h1>
			
			</div>
			
			
				
					<div class="col-md-12 ">
			  			
<font color="black">
<div class="container">
<div class="row">
<div class="col-sm-4 col-md-offset-4 img-circle">
<ul class="circle" id="navtoggle" >
<div id="sh">
   	<li  id="<?php if($_SESSION['color'] == 'grey'){echo 'color';}?>">
    <div class="text3" style="background: #808080;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'red'){echo 'color';}?>">
    <div class="text3"  style="background: #FF0000;" > </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'yellow'){echo 'color';}?>">
    <div class="text3" style="background: #FFFF00;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'lime'){echo 'color';}?>">
    <div class="text3" style="background: #00FF00;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'aqua'){echo 'color';}?>">
    <div class="text3" style="background: #00FFFF;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'blue'){echo 'color';}?>">
    <div class="text3" style="background: #0000FF;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'pink'){echo 'color';}?>">
    <div class="text3" style="background: #FF00FF;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'green'){echo 'color';}?>">
    <div class="text3" style="background: #008000;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'maroon'){echo 'color';}?>">
    <div class="text3"  style="background: #800000;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'purple'){echo 'color';}?>">
    <div class="text3" style="background: #800080;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'orange'){echo 'color';}?>">
    <div class="text3" style="background: #FFA500;"> </div>
  </li>
  <li id="<?php if($_SESSION['color'] == 'olive'){echo 'color';}?>">
    <div class="text3" style="background: #808000;"> </div>
  </li>
   
</div>
</ul>


<ul class="circle1" id="navtoogle1">
<font size="5px"><b>
<div id="sh1">
  <li id="o1" value="a">
    <div class="text"  ><p>a</p></div>
  </li>
  <li id="o2" value="b">
    <div class="text"><p >b</p></div>
  </li>
  <li id="o3" value="c">
      <div class="text"><p >c</p></div>
  </li>
  <li id="o4" value="d">
      <div class="text"><p >d</p></div>
  </li>
  <li  id="o5" value="e">
      <div class="text"><p>e</p></div>
  </li>
  <li id="o6" value="f">
      <div  class="text"><p >f</p></div>
  </li>
  <li id="o7" value="g">
      <div class="text"><p >g</p></div>
  </li>
  <li id="o8" value="h">
    <div class="text"><p>h</p></div>
  </li>
  <li id="o9" value="i">
    <div class="text"> <p>i</p></div>
  </li>
  <li id="o10" value="j">
    <div class="text"><p >j</p></div>
  </li>
  <li id="o11" value="k">
    <div class="text"><p >k</p></div>
  </li>
  <li id="o12" value="l">
    <div class="text"><p>l</p></div>
  </li>
     
  </div>
  
  
  
  
  <div id="sh2">
  
	<li id="m1" value="m">
    <div class="text1"><p >m</p></div>
  </li>
  
    <li id="m2" value="n">
    <div class="text1"><p >n</p></div>
  </li>
<li id="m3" value="o">
    <div class="text1"><p>o</p></div>
  </li>
<li id="m4" value="p">
    <div class="text1"><p >p</p></div>
  </li>
<li id="m5" value="q">
    <div class="text1"><p >q</p></div>
  </li>
<li id="m6" value="r">
    <div class="text1"><p >r</p></div>
  </li>
<li id="m7" value="s">
    <div class="text1"><p >s</p></div>
  </li>
<li id="m8" value="t">
    <div class="text1"><p >t</p></div>
  </li>
<li id="m9" value="u">
    <div class="text1"><p >u</p></div>
  </li>
<li id="m10" value="v">
    <div class="text1"><p >v</p></div>
  </li>
<li id="m11" value="w">
    <div class="text1"><p >w</p></div>
  </li>
<li id="m12" value="x">
    <div class="text1"><p >x</p></div>
  </li>
  
	
	</div>
	
	
	 <div id="sh3">
	  
	  <li id="i1" value="y">
    <div class="text2"><p >y</p></div>
  </li>
<li id="i2" value="z">
    <div class="text2"><p >z</p></div>
  </li>
	<li id="i3" value="1">
		
    <div class="text2"> <p > 1</p></div>
  </li>
 <li id="i4" value="2">
    <div class="text2"><p > 2 </p></div>
  </li>
 <li id="i5" value="3">
     <div class="text2"><p > 3 </p></div>
  </li>
 <li id="i6" value="4">
     <div class="text2"><p > 4 </p></div>
  </li>
 <li id="i7" value="5">
     <div class="text2"><p > 5</p> </div>
  </li>
 <li id="i8" value="6">
     <div class="text2"><p >6 </p> </div>
  </li>
 <li id="i9" value="7">
     <div class="text2"> <p>7 </p></div>
  </li>
 <li id="i10" value="8">
    <div class="text2"><p> 8 </p></div>
  </li>
 <li id="i11" value="9">
    <div class="text2"><p > 9</p> </div>
  </li>
 <li id="i12" value="0" >
    <div  class="text2"> <p>0  </p></div>
  </li>
 
</div>  
</ul>
 </b></font>
 </div>
 <div class="clearfix visible-xs-block"></div>
</div>
<div class="clearfix visible-xs-block"></div>
</div>
   
   
   
    <div class="container buttons" >
   <div class="row">
  
   <div class="col-sm-6 col-md-offset-3" >
   
<center>  

 <button style="height:35px;" class="btn btn-primary" onclick="outerorbit()"  style="margin:5px;"><font size="4px">Outer Orbit</font></button>  
<button style="height:35px;" class="btn btn-primary" onclick="middleorbit()" style="margin:5px;"><font size="4px">Middle Orbit</font></button>  
<button style="height:35px;" class="btn btn-primary" onclick="innerorbit()" style="margin:5px;"><font size="4px">Inner Orbit</font></button>  
<button style="height:35px;" class="btn btn-primary" onclick="rotateright()" style="margin:5px;"> <i class="fa fa-repeat"></i></button>
<button style="height:35px;" class="btn btn-primary" onclick="rotateleft()" style="margin:5px;"><i class="fa fa-rotate-left"></i></button>   </center>
</div>
 
   
  </div>
  </div>
						<div class="input-group mb-3 " style="margin:auto;">
				  		<div class="form-group"  style="margin:auto;">
				
							<form method="post" action="">
						
					    	<input style="height:35px; margin:5px;" type="password" name="pass" class="form-control" id="password" readonly>
							</form>
							<form method="post" action="void.php">
							<input type="hidden" name="pass1" class="form-control" id="password1">
								
									  				<h4 ><button type="submit" style="height:35px; width:300px; margin:5px;" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Submit</button><button type="reset" onclick="resetpass()" style="height:35px; width:300px; margin:5px;" class="btn btn-default submit"><i class="fa fa-refresh" aria-hidden="true"></i>Reset</button></h4>
							</form>
					  	</div>	
					  	</div>
			  		</div>
			  	
				
			</font>
		</section>
		  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script> 
  
  
   

   
<script type="text/javascript" src="js/index.js"> </script> 
<script>
function resetpass()
{
	pass="";
	xyz1="";
}

</script>

</body>

</html>
<?php
}else
{
?><script>window.location.href = "login.html";</script>
<?php
}
?>