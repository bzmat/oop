<?php 

$title = "Strona startowa";

include ('includes/config.php');


include ('layout/header.php');

	if (isset($_POST['submit'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
		
	}

 ?>


<div class="container">

	<div class="col-md-4 col-md-offset-4">
		
			<form  action="" method="POST">

				<h2>Please Sign up</h2>
				<p>Alredy a member?<a href="login.php">  Login</a></p>
				<hr>

				<?php 

					if (isset($error)) {

						foreach ($error as $error) {

							echo '<p class="bg-danger">'.$error.'</p>';
							
						}
						
					}

				 ?>

				  <div class="form-group">
				    <label  for="username">User Name</label>
				    <input type="text" class="form-control" id="" name="username" placeholder="User Name" autofocus maxlength="20" minlength="3" required>
				  </div>

				  <div class="form-group">
				    <label  for="password">Password</label>
				    <input type="password" class="form-control" id="" name="password" placeholder="Password" maxlength="20" minlength="3" required>
				  </div>

				 <div class="form-group">
				    <label  for="email">Email</label>
				    <input type="email" class="form-control" id="" name="email" placeholder="Email" minlength="3" maxlength="30" required>
				  </div>
				  
				  
				  <button type="submit" class="btn btn-default ">Register</button>

				 

			</form>


	</div><!--col-->

		   


</div><!--container-->


<?php 

include ('layout/footer.php');
 ?>   

   