<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Blue bird public school</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b1.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					BLUE BIRD PUBLIC SCHOOL<BR>
					Vijaya Sree Towers, 1st Floor,<BR>
					Cherry Road, Opp Vincent Bus Stop,<BR>
					Kumarasamypatti, Salem-636 007<BR>
					Mail - Sjain302086@gmail.com<br>Phone - 7651992986
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; blue bird public school</p></footer>
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