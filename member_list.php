<?php
	include("header.php");
?>

<?php
	$con = new mysqli('localhost','root','','jubair_new2');

	$q = mysqli_query($con,"SELECT * FROM members");
?>
	<div class="w3-container">
		<h1 class="w3-text-teal w3-cursive" style="margin-left: 250px;">Member of List</h1>
	</div>

<div class="w3-display-container">
	<table border="1" class="w3-table-all w3-card-2 w3-margin" style="width:60%;">
		<tr class="w3-black">
			<th>Member Name</th>
			<th>Contact</th>
			<th>Email</th>
			<th>More Info</th>
		</tr>
<?php		
while ($row = mysqli_fetch_assoc($q)) {
?>
		<tr class="w3-hover-teal">
			<td><?php echo $row['membername']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="single_member.php?show_id=<?php echo $row['id'] ?>">Show Detail</a>
				|
				<a href="update_member.php?edit_id=<?php echo $row['id']; ?>">Edit Info</a>
				|
				<a href="delete_member.php?dec=1&delete_id=<?php echo $row['id']; ?>">Delete</a>
			</td>

		</tr>
		<?php
		}
		?>
	</table>
	<div class="w3-container">
		<i class="fa fa-refresh w3-xxxlarge w3-text-blue w3-spin w3-display-right" style="margin-right: 200px;"></i>
	</div>
</div> <!-- w3-container-table -->


<?php
	include_once("footer.php");
?>