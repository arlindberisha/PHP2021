<?php
require('header.php')
?>

<section>
							<h3>Form</h3>
							<form method="post" action="emailmessage.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<input type="text" name="subject" id="subject" value="" placeholder="Subject" />
									</div>
									<div class="6u$ 12u$(4)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" name="send" value="Send Message" class="special" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
<?php
require('footer.php')
?>