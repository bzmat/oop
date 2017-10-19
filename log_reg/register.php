<?php 

require_once 'class.signup.php';

$register = new Signup();

	

	if (isset($_POST['submit'])) {

		$uname = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

		$upass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

		$uemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		
				

		$register->is_empty($uname, $upass, $uemail);


		$register->lenght($uname, $upass, $uemail);

		$register->is_email($uemail);

		

		$register->register($uname, $upass, $uemail);

		
		

	}

 ?>