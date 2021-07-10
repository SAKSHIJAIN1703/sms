
    
  <?php
	include"database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>blue bird public school</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	<body class="back">
	
		<?php include"navbar.php";?>
		
		<img src="img/b1.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">parent's Login</h1>
			<div class="log">
				<?php
					if(isset($_POST["login"]))
					{
						$sql="SELECT * FROM `parent_login` WHERE  TNAME='{$_POST["name"]}'and EMAIL='{$_POST["email"]}'";
						$res=$db->query($sql);
						if($res->num_rows>1)
						{
							$ro=$res->fetch_assoc();
							$_SESSION["TID"]=$ro["TID"];
							$_SESSION["TNAME"]=$ro["TNAME"];
							echo "<script>window.open('parent_home.php','_self');</script>";
						}
						else
						{
							echo "<div class='error'>Invalid Username Or Password</div>";
						}
					}
				
				
				
				?>
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Parent Name</label><br>
					<input type="text" name="name" required class="input"><br><br>
					<label>Email id</label><br>
					<input type="email" name="email" required class="input"><br>
					<button type="submit" class="btn" name="login">Login Here</button>
				</form>
			</div>
		</div>
		
		
		
		<div class="footer">
			<footer><p>Copyright &copy; blue bird public school </p></footer>
		</div>
		
			<script src="js/jquery.js"></script>
		         <script>
		        $(document).ready(function(){
		        	$(".error").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".error").slideUp(1000);
		        	});
		        	
		        	$(".success").fadeTo(1000, 100).slideUp(1000, function(){
		        			$(".success").slideUp(1000);
		        	});
		        });
			</script>
		
	</body>
</html>