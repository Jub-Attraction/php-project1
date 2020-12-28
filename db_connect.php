<!--connection 1 -->
<?php
	function connect(){
		$con = mysqli_connect('localhost','root','','jubair_new2') or die('you can not connected');
		return $con;
	}

function connect_close($con){

	mysqli_close($con);
}

//connection 2

function db(){
$db = new mysqli('localhost','root','','jubair_new2');
	if($db->connect_error > 0){
		echo "not able to connect!";

	return $db;
	}
}

?>