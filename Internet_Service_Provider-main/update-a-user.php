
<?php
require('header.php');
$id= $_GET['id'];
?>



<?php
if(isset($_SESSION['username'])){

	echo '
<section id="main" class="wrapper">
<div class="container">

    <section>
							<h3>Update user</h3>
                            <h4>Complete this form</h4>
							<form method="post" action="./update.php?id='.$id.'">
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
                                       
									</div>
									<div class="6u$ 12u$(4)">
										<input type="text" name="lastname" id="lastname" value="" placeholder="Last name" />
									</div>
                                    <div class="6u 12u$(4)">
										<input type="text" name="phonenumber" id="phonenumber" value="" placeholder="Phone number" />
									</div>
									<div class="6u$ 12u$(4)">
										<input type="text" name="town" id="town" value="" placeholder="Town" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="city" id="city">
												<option value="">City</option>
												<option value="Lipjan">Lipjan</option>
												<option value="Prishtine">Prishtine</option>
												<option value="Ferizaj">Ferizaj</option>
												<option value="Shtime">Shtime</option>
                                                <option value="Gjilan">Gjilan</option>
											</select>
										</div>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Update client" class="special" name="submit" /></li>
											
							
								<li><a href="./admin.php" class="button">Back</a></li>
						
										</ul>
									</div>';
									
									if(isset($text)){
										echo "<br /><br />".$text;
									}
									echo '
									
								</div>
							</form>
						</section>
                        </div>
                        </section>
								';
							}
							?>
						

<?php
require('footer.php');
?>
