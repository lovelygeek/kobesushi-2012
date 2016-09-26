<?php @include 'captcha.php'; //DO NOT EDIT ABOVE THIS LINE! However, if you are NOT using image verification, please REMOVE this line. ?>


<?php
/*
  ==============================================================================================
  NL-PHPMail 2.2.2 © 2005-2008 Amelie M.
  Original concept by Sasha (2002-2005), http://nothing-less.net.
  ==============================================================================================
*/

// You may start editing the form here.

?>

 <?php include("header.php"); ?>
 	
 	<div id="container" class="wrapper">

		<section id="wideCol">
		
		<h1>Contact Us</h1>

		<form method="post" action="nlphpmail.php" class="contactForm">
		<input type="hidden" name="subject" id="subject" value="From ZBLawOffice.com" />
			<p class="name">
				<input type="text" name="name" id="name" size="40" />
				<label for="name">Name</label>
			</p>

			<p class="email">
				<input type="text" name="email" id="email" size="40" />
				<label for="email">Email</label>
			</p>

			<p class="web">
				<input type="text" name="url" id="url" value="http://" size="40" />
				<label for="web">Website</label>
			</p>

			<p class="comments">
				<textarea name="comments" id="comments" cols="40" rows="3"></textarea>
			</p>

			<p class="captcha">
				<label for="verifyimage">Enter the letters and numbers you see on this image into the box below<br /> 
				(if you cannot see the image, please let me know):</label>
				<img src="verify.png" alt="CAPTCHA Image - if you cannot see this, please contact me for advice" /><br />
				<input type="text" name="verifyimage" id="verifyimage" maxlength="5" />
			</p>

			<p>
				<input type="submit" name="submit" id="submit" value="Send" size="30" />
				<input type="reset" name="reset" id="reset" value="Clear" size="30" />
			</p>
		</form>

		<!--<p><a href="http://codegrrl.com/" title="NL-PHPMail from CodeGrrl.com">Powered by NL-PHPMail 2.2.2</a></p>-->

		</section>

			<aside id="narrowCol">
				<h3>News &amp; Updates</h3>
				<div class="tweet"></div><!-- .tweet -->
				<img src="images/twitter.png" alt="follow us on twitter" class="middle" /> <a href="http://twitter.com/#!/kobesushigrill" class="twitter">Follow us on Twitter!</a>
			</aside>
 	</div><!-- #container -->
  
 <?php include("footer.php"); ?> 