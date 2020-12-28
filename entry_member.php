<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="w3-cdn/w3.css">
	<link rel="stylesheet" type="text/css" href="w3-cdn/font-awesome.css">
<style type="text/css">
	body {
		/*background-image: url("imgs/city-1.jpg");
		background-size: 1370px 700px;
		background-repeat: no-repeat;
		padding: 50px;*/
		/*background-color: black;*/
	}
</style>

</head>
<body>
<?php
	$membername = "";
	$contact = "";
	$email = "";
	$password = "";
	$renter_password = "";

	$con = new mysqli('localhost','root','','jubair_new2');

?>
<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(isset($_POST['form_source']) && $_POST['form_source'] == "enter_member"){
		$membername = isset($_POST['membername']) ? $_POST['membername'] : "";
		$contact = isset($_POST['contact']) ? $_POST['contact'] : "";
		$email = isset($_POST['email']) ? $_POST['email'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
		$renter_password = isset($_POST['renter_password']) ? $_POST['renter_password'] : "";

		if (!$password == $renter_password) {
			echo "Password is not match";
		}
 $q = "INSERT INTO members(membername,contact,email,password) VALUES ('$membername','$contact','$email','$password')";

 $result = mysqli_query($con, $q);
 	header("entry_member.php");
 	echo "

<div class='w3-card-4 w3-xlarge'>
<div class='w3-container w3-display-middle'>

  <div class='w3-tag w3-round w3-green' style='padding:10px'>
    <div class='w3-tag w3-round w3-green w3-border w3-border-white'>
      Your data has been submitted successfully.
    </div>
  </div>
</div>
</div>

<div class='w3-container w3-display-bottommiddle' style='bottom:200px;'>
	<button class='w3-button w3-white w3-border w3-border-green w3-round-large w3-large'><a href='member_list.php'>Go Back</a></button>
</div>

<?php
";
die();
	}
}
?>

<div class="w3-card-4 w3-display-middle"style="width:800px;">
  <div class="w3-container w3-brown">
    <h2>Entry Member Detail</h2>
  </div>
<form class="w3-container" action="" method="post">
<p>      
	<label class="w3-text-brown"><b>Member Name</b></label>
    <input class="w3-input w3-border w3-sand" name="membername" type="text">
</p>
<p>
	<label class="w3-text-brown"><b>Contact</b></label>
    <input class="w3-input w3-border w3-sand" name="contact" type="text">
</p>
<p>
	<label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="text">
</p>
<p>
	<label class="w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password">
</p>
<p>
	<label class="w3-text-brown"><b>Renter_Password</b></label>
    <input class="w3-input w3-border w3-sand" name="renter_password" type="password">
</p>
<p>
	<input type="hidden" name="form_source" value="enter_member">
	<button class="w3-btn w3-brown">Entry</button>
</p>
  </form>
</div>

</body>
</html>