<?php
require('header.php');
?>

<?php
if(isset($_SESSION['username'])){
	require('conn.php');
	echo '
	<section id="main" class="wrapper">
		<div class="container">
			<section>
				<h3>Clients</h3>
				<h4>The list of clients</h4>
				<a href="./add-a-user.php"><img src="images/add-user.png" width=20 height=20 /> <b>Add a user</b><br /><br /></a>

					<div class="table-wrapper">';

					$sql = "SELECT id, name, lastname, phonenumber, town, city, status, lastpayment FROM clients";
					$result = mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result) > 0) {
						echo "<table class='alt'><thread><tr><td><b>Name and lastname</b></td><td><b>Phone Number</b></td><td><b>Address</b></td><td><b>Last payment</b></td><td><b>Status</b></td><td><b>Delete user</b></td><td><b>Update user</b></td><td><b>Send Mail</b></td></tr></thread>";
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>" . $row["name"]." ".$row["lastname"] ."</td><td>" . $row["phonenumber"]. "</td><td>" . $row["town"]."-".$row["city"]. "</td><td>" . $row["lastpayment"]. "</td><td>" . $row["status"]."</td><td><a onclick='javascript:confirmationDelete($(this));return false;' href='delete-a-user.php?id={$row['id']}'>Delete</a></td><td><a onclick='javascript:confirmationUpdate($(this));return false;' href='update-a-user.php?id={$row['id']}'>Edit</td><td><a onclick='javascript:confirmationMail($(this));return false;' href='emailmessage.php?id={$row['id']}'>Send</a></td></tr>";
					}
						echo "</table>";
					}
					
					echo '
				</div>
			</section>
		</div>
	</section>';
	}
?>    

<?php
require('footer.php');
?>