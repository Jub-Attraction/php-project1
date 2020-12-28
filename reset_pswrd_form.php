<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="w3-cdn/w3.css">
</head>
<body>
<?php
  $id = isset($_GET['id']) ? $_GET['id'] : "0";

  if($id){
?>

<div class="w3-card-4 w3-display-middle"style="width:800px;">
  <div class="w3-container w3-brown">
    <h2>You Can Change Password Now !</h2>
  </div>
<form class="w3-container" action="reset_pswrd_procss.php" method="post">
<p>      
  <label class="w3-text-brown"><b>Old Password</b></label>
    <input class="w3-input w3-border w3-sand" name="old_password" type="password">
</p>

<p>
  <label class="w3-text-brown"><b>New Password</b></label>
    <input class="w3-input w3-border w3-sand" name="new_password" type="password">
</p>

<p>
  <label class="w3-text-brown"><b>Renter Password</b></label>
    <input class="w3-input w3-border w3-sand" name="renter_password" type="password">
</p>

<p>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input type="hidden" name="form_source" value="reset_password">
  <button class="w3-btn w3-brown">Change</button>
</p>
  </form>
</div>
<?php
} else {
  echo "Error Not Found ";
  echo "<a href='member_list.php'>Go Back</a>";
}
?>
</body>
</html>