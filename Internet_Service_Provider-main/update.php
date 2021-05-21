
<?php
if(isset($_POST['submit'])){
	require('conn.php');
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$phonenumber = $_POST['phonenumber'];
	$town = $_POST['town'];
	$city = $_POST['city'];
    $id= $_GET['id'];
	$sql = "UPDATE clients SET name = '$name', lastname ='$lastname', phonenumber='$phonenumber', town='$town', city='$city' WHERE id=$id";
	if(mysqli_query($conn,$sql)){
		$text = "The client is updated successfully.";
		header("location:admin.php");
	} else {
		$text = "Update failed.";
		echo $text;
	}
}
?>