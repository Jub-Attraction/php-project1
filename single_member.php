<?php

$con = new mysqli('localhost','root','','jubair_new2');

$id = isset($_GET['show_id']) ? $_GET['show_id'] : false;

if($id){
	$q = mysqli_query($con, "SELECT * FROM members WHERE id = {$id} LIMIT 1");

	$result = mysqli_fetch_assoc($q);

?>
<div class="w3-container">
  <h2 class="w3-text-teal">Member Detail</h2>

  <div class="w3-card-4 w3-padding w3-margin" style="width:50%">
    <img src="imgs/man-1.jpg" alt="Alps" style="width:100%">
    <div class="w3-container w3-center">
      <p class="w3-large">
      	<b>Name:</b> <?php echo $result['membername'] ?><br>
		<b>Contact:</b> <?php echo $result['contact'] ?><br>
		<b>Email:</b> <?php echo $result['email'] ?><br>

		<button class="w3-button w3-white w3-border w3-border-green w3-round-large w3-margin"><a href="update_member.php?edit_id=<?php echo $result['id']; ?>">Edit-Detail</a></button>
		|
		<button class="w3-btn w3-white w3-border w3-border-green w3-round-large w3-margin"><a href="reset_pswrd_form.php?id=<?php echo $result['id']; ?>">Change-Password</a></button>
	</p>
    </div>
  </div>
</div>

<!-- <div class="image_text">
	<div class="image">
		<img src="imgs/man-1.jpg"style="width:300px;">	
	</div>
	
	<div class="info">
		<p>
			<b>Name:</b><?php echo $result['membername'] ?><br>
			<b>Contact:</b><?php echo $result['contact'] ?><br>
			<b>Email:</b><?php echo $result['email'] ?>
		</p>
	</div>
</div>
<div class="clear_both"></div> -->
<?php
} else {
	echo "<h1>Member not found</h1>";
	}

include('header.php');

include_once('footer.php');
?>