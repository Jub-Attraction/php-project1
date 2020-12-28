<link rel="stylesheet" type="text/css" href="w3-cdn/w3.css">

<?php
	//yahan pe humne aik simple tareeka seekha delete karne ka 

	/*$con = new mysqli('localhost','root','','jubair_new2');

	$id = isset($_GET['delete_id']) ? $_GET['delete_id'] : "";

	if($id){
		$q = "SELECT * FROM members WHERE id = {$id} LIMIT 1";
		$result = mysqli_query($con, $q);
		$row = mysqli_fetch_assoc($result);
	}

if($_SERVER['REQUEST_METHOD'] == "GET"){
	if(isset($_GET['dec']) && $_GET['dec'] == "1"){
	$id = isset($_GET['delete_id']) ? $_GET['delete_id'] : "";

if($id){
	$q2 = "DELETE FROM members WHERE id = {$id} LIMIT 1";
	$result2 = mysqli_query($con, $q2);
	header("Location: member_list.php");
}
} 
}*/
?>

<?php
	//yahan pe hum seekhte hain doosra tareeka delete karne ka jo ki ye process file pe leke jayaga aur delete ka process wahan chalega.

$con = new mysqli('localhost','root','','jubair_new2');

$id = isset($_GET['delete_id']) ? $_GET['delete_id'] : "";

if($id){
	$q = mysqli_query($con, "SELECT * FROM members WHERE id = {$id}");
	$row = mysqli_fetch_assoc($q);
}

?>

<div class="w3-container w3-display-middle">
  <h2 class="w3-text-red">Do You Want to Delete ?</h2>

  <div class="w3-card-4 w3-padding w3-margin" style="width:50%">
    <img src="imgs/man-1.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p class="w3-large">
      	<b>Name:</b> <?php echo $row['membername'] ?><br>
		<b>Contact:</b> <?php echo $row['contact'] ?><br>
		<b>Email:</b> <?php echo $row['email'] ?><br>

		<button class="w3-button w3-white w3-border w3-border-green w3-round-large w3-margin"><a href="process_all_query.php?dec=1&id=<?php echo $row['id']; ?>">Yes</a></button>
		|
		<button class="w3-btn w3-white w3-border w3-border-green w3-round-large w3-margin"><a href="member_list.php?id=<?php echo $row['id']; ?>">No</a></button>
	</p>
    </div>
  </div>
</div>

