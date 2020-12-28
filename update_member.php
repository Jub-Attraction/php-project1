<link rel="stylesheet" type="text/css" href="w3-cdn/w3.css">
<?php
  $con = new mysqli('localhost','root','','jubair_new2');

  function processVal($user){
    $output = isset($_POST[$user]) ? $_POST[$user] : "";

    return $output;
  }
?>

<?php
  $id = isset($_GET['edit_id']) ? $_GET['edit_id'] : "";

  if($id){
    $q = mysqli_query($con, "SELECT * FROM members WHERE id = {$id}");
    $result = mysqli_fetch_assoc($q);
  }

if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['form_source']) && $_POST['form_source'] =="edit_member"){
    $id = processVal('id');
    $membername = processVal('membername');
    $contact = processVal('contact');
    $email = processVal('email');

    $q = mysqli_query($con, "UPDATE members SET membername = '$membername', contact = '$contact', email = '$email' WHERE id = {$id} LIMIT 1");

    header("Location: member_list.php");
    die();

  }
}
?>

<div class="w3-card-4 w3-display-middle" style="width:800px;">
  <div class="w3-container w3-brown">
    <h2>Update All Detail</h2>
  </div>
<form class="w3-container" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>      
	<label class="w3-text-brown"><b>Member Name</b></label>
    <input class="w3-input w3-border w3-sand" value="<?php echo $result['membername']; ?>" name="membername" type="text">
</p>
<p>
	<label class="w3-text-brown"><b>Contact</b></label>
    <input class="w3-input w3-border w3-sand" value="<?php echo $result['contact']; ?>" name="contact" type="text">
</p>
<p>
	<label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" value="<?php echo $result['email']; ?>" name="email" type="text">
</p>

<p>
  <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
	<input type="hidden" name="form_source" value="edit_member">
	<button class="w3-btn w3-brown">Update</button>
</p>
  </form>
</div>
