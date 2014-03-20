<?php 
define('MAILING_LIST',$_SERVER['DOCUMENT_ROOT'].'/FormPhp/mailing_list.php');

// ADD A NEW ITEM TO THE REGISTERED USERS LIST.
function add_registered_user($name, $email){
   /**
	*$handle = fopen('mailing_list.php','a+');
	*fwrite($handle,$name);
	*fwrite($handle,' : ');
	*fwrite($handle,$email);
    *fclose($handle);
    */

    #REALLY IMPORTANT: SECURE FILE (place outside the folder)
    file_put_contents(MAILING_LIST, "{$name} : {$email}\n" , FILE_APPEND);
    //FILE_APPEND add to the end
}


//RETURNS AN ARRAY OF ALL REGISTERED USERS
function get_registered_users($path = MAILING_LIST){
	$users = file($path);
	
	if( count($users) ){
		return array_map(function($user){
			return $bits = explode(': ',htmlspecialchars($user));
		}, $users);
	}
	return false;
}

//PRESERVE FORM STATE
function old($key){
	if (!empty($_REQUEST[$key])){
		return htmlspecialchars($_REQUEST[$key]);
	}
	return '';
}

//DETERMINES WHETHER THE EMAIL ADDRESS IS VALID
function valid_email($email){
	return filter_var($email,FILTER_VALIDATE_EMAIL);
}

?>
