<?php 

require 'functions.php';

$registered_users = get_registered_users();
print_r($registered_users);
require 'registered_users.tmpl.php';
?>