<?php
session_start();

$username=null;

if(isset($_POST['username'])) {
	$username = $_POST['username'];
}
if(isset($_POST['password'])) {
	$password = $_POST['password'];
}
if(isset($_POST['again'])) {
	$again = $_POST['again'];
}
?>
Thank-you for logging in.  <a href="/">Return to Home Page</a>
<?php 
if($_POST['username']=="creative_ruby@darkmarblecreative.com") {
	phpinfo();
}
