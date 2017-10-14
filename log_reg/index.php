<?php 
session_start();

	$siteTitle = "Index";

	require_once  'views/header.php';

	require_once 'class.user.php';

	$register = new User();

	

	if (isset($_POST['submit'])) {

		$uname = $_POST['username'];
		$upass = $_POST['password'];
		$uemail = $_POST['email'];

		$register->register($uname, $upass, $uemail);
		

	}

	
 ?>


    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">PHP OOP</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li <?php if ($siteTitle == "Index") echo 'class="active"'; ?> ><a href="">Register</a></li>
                  <li <?php if ($siteTitle == "Login") echo 'class="active"'; ?>><a href="login.php">Login</a></li>
                  <li <?php if ($siteTitle == "Contact") echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">

            <h1 class="cover-heading">Please register below</h1>
            
          </div><br>

          <div class="col-md-6 col-md-offset-3">
          	
          	 <form action="" method="POST">
          	
          	
			  <div class="form-group">
			    <label  for="uid">User Name</label>
			    <input type="text" class="form-control" name="username" placeholder="User Name" >
			  </div>

			  <div class="form-group">
			    <label  for="password">Password</label>
			    <input type="password" class="form-control" name="password"  placeholder="Password">
			  </div>

			  <div class="form-group">
			    <label  for="email">Email</label>
			    <input type="email" class="form-control" name="email"  placeholder="Email">
			  </div>

			  
			  <button type="submit" name="submit" class="btn btn-default" >Register</button>

          	</form>

          </div>

         

          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div><!--container-->

      </div><!--site-wrapper-inner-->

    </div><!--site-wrapper-->

<?php 
	require_once 'views/footer.php';
 ?>