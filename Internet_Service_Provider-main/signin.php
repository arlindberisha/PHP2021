<?php
require('header.php');
?>

<?php
if(isset($_POST['login'])){    
    if(isset($_POST['demo-username'])&&isset($_POST['demo-password'])){
        require('conn.php');
       
        session_start();

        $username=$_POST['demo-username'];
        $password=$_POST['demo-password'];

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        $sql="SELECT * FROM users WHERE username='$username';";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

        if(mysqli_num_rows($result) >= 1){
            $password_hashed = $row['password'];
            if (password_verify($password, $password_hashed)){
                $_SESSION['username'] = $username;
                $message = "";
                header('Location: admin.php');
            } else {
                $message = "Sorry, your password was incorrect.";
            }
        } else {
            $message = "This username doesn't exist.";
        }
    }
}
?>

<section>
	<div class="container"><br />
		<header><br /><br />
			<h2>Log In</h2>
			<p>Welcome back.</p>
		</header>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="login-demo">
                <div> 
                    <input type="text" name="demo-username" id="demo-username" value="" placeholder="Username" required /><br />
                    <input type="password" name="demo-password" id="demo-password" value="" placeholder="Password" required /><br />
                </div>
            </div>       
            <ul class="actions">
                <li><input type="submit" name="login" value="Log In" class="primary" /></li>
            </ul>
            <?php if(isset($_POST['login'])){ echo '<b style="color: #ed4956;">'.$message.'</b>'; } ?>
        </form><br />                
    </div>
</section>

<?php
require('footer.php');
?>