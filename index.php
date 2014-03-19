<?php 
//diff between !empty and isset: 
// !empty - checks if the variable has an empty value,empty string ,0, null, false.-> contains nonempty data
// isset - checks if a variable has a value including (false,0,empty) BUT NOT NULL -> var exists or not

require 'functions.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);

	if ( empty($name) || empty($email) || !valid_email($email) ) {
		$status = 'Please provide me a name and a valid email address.';
	}
	else{
		add_registered_user($name, $email);
		$status = 'Thank you for registring.Your information has been added to our mailing list';
	}
}

require ("index.tmpl.php");
?>
