<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>blue bird public school</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body class="container">
		<?php include"navbar.php";?>
		<img src="img/b1.jpg" width="100%">
		
		<div class="login">
			<h1 class="heading">Admin Login</h1>
			<div class="log">
			<?php
				if(isset($_POST["login"]))
				{
					$sql="select * from admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["AID"]=$ro["AID"];
						$_SESSION["ANAME"]=$ro["ANAME"];
						echo "<script>window.open('admin_home.php','_self');</script>";
					}
					else
					{
						echo "<div class='error'>Invalid Username or Password</div>";
					}
					
				}
				if(isset($_GET["mes"]))
				{
					echo "<div class='error'>{$_GET["mes"]}</div>";
				}
				
			?>
		
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>User Name</label><br>
					<input type="text" name="aname" required class="input"><br><br>
					<label>Password </label><br>
					<input type="password" name="apass" required class="input"><br>
					<button type="submit" class="btn" name="login">Login Here</button>
				</form>
			</div>
		</div>

		<div class="row"style="">      <!-- main text -->
               <div class="col-md-12 col-lg-7 text-center">
                  <h5 class="text-center" style="color:#1e36b9 !important;
    font-family: 'Alegreya sans',serif;
    color: #333;
    font-weight: 800;
    font-size: 46px;
    margin-top: 0px;
    position: relative;
    text-align: center;"h5>SCHOOL HISTORY</h5>
                  <p align="justify" style="font-size:20px;line-height:29px;margin:0 0 10px;text-align:justify"><b>Blue Birds International School</b>, is English medium, co-educational school, situated at Mandi Dhanaura, District - Amroha (U.P.) Ushering in with a promise of excellence in quality education, the school is breathing with synergy of life, reflection with echoes of the footsteps of our questing students and their joyous laughter. The school, committed to excel in all spheres of formation needed for a learner.....<br><br>
        <a href="School-History" class="btn btn-primary">Read More</a>
        </p>
        </div>
         <div class="col-md-12 col-lg-5" >
                               
       <iframe style="margin-left:750px" width="400" height="250" src="https://www.youtube.com/embed/OSCyNfQL2BA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
               </div>      
               <!-- /col-md-12-->
            </div>

			<?php include"footer.php";?>
	
		
	</body>
</html>