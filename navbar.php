<nav class="navbar navbar-expand-lg navbar-light bg-purple">
	
		<a class="navbar-brand" href="#">Blue Bird Public School</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class="collapse navbar-collapse" id="navbarNav">

			<ul class="navbar-nav">
				<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
					<li class="nav-item"><a class="nav-link active" href="admin_home.php"style="margin-left:80%;">Admin Home</a></li>
					
					<li class="nav-item"><a class="nav-link active" href="teacher_login.php"style="margin-left:85%;margin-bottom:10px;">teacher</a></li>
					
				  <li class="nav-item"><a class="nav-link" href="change_pass.php"style="margin-left:80%;">Settings</a></li>
				  
				  <li class="nav-item"><a  class="nav-link "href="logout.php"style="margin-left:80%;">Logout</a></li>
				
					';
				}
				elseif(isset($_SESSION["TID"]))
				{
					echo'
				
						<li class="nav-item"><a class="nav-link active"href="teacher_home.php">Teacher Home</a></li>

				<li class="nav-item"><a class="nav-link "href="teacher_change_pass.php">Settings</a></li>
				
				<li class="nav-item"><a class="nav-link"href="logout.php">Logout</a></li>
					';
				}
				else{
					echo'
					
					<li class="nav-item"><a href="admin.php" class="nav-link active">Admin</a></li>
				<li class="nav-item"><a href="teacher_login.php" class="nav-link ">Teacher</a></li>
				<li class="nav-item"><a href="parent_login.php" class="nav-link ">Parent</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link ">Contact Us</a></li>';
				}
			?>


			</ul>

		</div>
	</div>
</nav>
		