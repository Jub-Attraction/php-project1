<?php
	$con = new mysqli('localhost','root','','jubair_new2');

	function processVal($userval){
		$output = isset($_POST[$userval]) ? $_POST[$userval] : "";

		return $output;
	}

if($_SERVER['REQUEST_METHOD'] == "POST"){
	if (isset($_POST['form_source']) && $_POST['form_source'] == "reset_password"){
		$id = processVal('id');
		$old_password = processVal('old_password');
		$new_password = processVal('new_password');
		$renter_password = processVal('renter_password');

	$q = "SELECT password FROM members WHERE id = '$id'";
	$result = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($result);

if($row['password'] == $old_password){
	if ($new_password == $renter_password) {
		$q2 = "UPDATE members SET password = '$new_password' WHERE id = '$id' LIMIT 1";
	if ($result = mysqli_query($con, $q2)) {
		header("Location: pswrd_chnge_success.php");
	} else {
		echo "<h1>not Enterd</h1>";
	}
	}
} else {
	header("Location: member_list.php");
}
}
}
?>