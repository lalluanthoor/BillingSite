<?php
require_once 'config/preamble.php';

$user = $_POST['user'];

if(!$admin->demote_user( $user ) ){
	$_SESSION['error'] = 'Internal Error. Unable to demote user.';
}
header("location:./");
?>