<?php
$con = new mysqli('localhost','root','','jubair_new2');
?>

<?php
//start of delete query.

if($_SERVER['REQUEST_METHOD'] === "GET"){

	if(isset($_GET['dec']) && $_GET['dec'] == "1") {

		$id = isset($_GET['id']) ? $_GET['id'] : "0";

	if($id){
		$q2 = "DELETE FROM members WHERE id = '{$id}'";
		$row = mysqli_query($con,$q2);
		header("Location: member_list.php");
	}
	}
}
?>