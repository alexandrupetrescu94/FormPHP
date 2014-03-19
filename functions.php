<?php 

function add_registered_user($name, $email){
   /**
	*$handle = fopen('mailing_list.php','a+');
	*fwrite($handle,$name);
	*fwrite($handle,' : ');
	*fwrite($handle,$email);
    *fclose($handle);
    */

    #REALLY IMPORTANT: SECURE FILE (place outside the folder)
    file_put_contents('mailing_list.php', "{$name} : {$email}\n" , FILE_APPEND);
    //FILE_APPEND add to the end
}

function old($key){
	if (!empty($_REQUEST[$key])){
		return htmlspecialchars($_REQUEST[$key]);
	}
	return '';
}

function valid_email($email){
	return filter_var($email,FILTER_VALIDATE_EMAIL);
}

?>
