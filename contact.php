<?php $thisPage = "Contact" ?>

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>

	<div id="masterhead">
		<div class="container">
			<div class="row">
				<div class="span12">

					<h2 class="jumboCaption white">Contact Us</h2>
				</div>

			</div>

		</div>
	</div>

	<div id="mainContent" class="container">

		<div class="row">
			<div class="span4">
				<h2>Ask us anything</h2>

				<p><strong>We are here to help.</strong></p>

				<p>If you are unable to create an account or would like to find out more about our services, feel free to contact us using the form on the right. We will try to get back to you as soon as possible.</p>

				<p><strong>Existing customers can create help tickets from the <a href="<?php echo "cpanel." . $siteUrl ?>">Control Panel</a>.</strong></p>

				<h3>Other ways to keep in contact</h3>

				<p>Remember that you find extra help and news on our <a href="forum/">forum</a>, <a href="blog/">blog</a> or on <a href="#">Facebook</a> and <a href="#">Twitter</a>.</p>
				

			</div>

			<div class="span8">
				<div id="api-public-ticket">
					<form class="well" method="post" action="http://api.<?php echo $siteUrl ?>/v-2/contact-form">

					        <div class="api_input api_author_email control-group">
					            <label class="control-label" for="api_author_email">Your E-mail</label>
					            <div class="controls">
					            	<input class="span7" name="author_email" id="api_author_email" type="text" value=""/>
					            </div>	
					        
					        </div>

					        <div class="api_input api_author_name control-group">
					            <label class="control-label" for="api_author_name">Your Name</label>
					            <div class="controls">
					            	<input class="span7" name="author_name" id="api_author_name" type="text" value=""/>
					            </div>	
					        
					        </div>

					        <div class="api_input api_subject control-group">
					            <label class="control-label" for="api_subject">Subject</label>
					            <div class="controls">
					            	<input class="span7" name="subject" id="api_subject" type="text" value=""/>
					            </div>	
					        
					        </div>

					        <div class="api_input api_content control-group">
					            <label class="control-label" for="api_content">Message</label>
					            <div class="controls">
					            	<textarea class="span7" name="content" id="api_content" cols="25" rows="5"></textarea>
					            </div>	
					        
					        </div>

					        <div class="api_input api_captcha control-group">
					            <label class="control-label" for="api_captcha">Type the characters you see in the picture below</label>
					            <div class="controls">
					            	<img src="http://api.yhtest.tk/captcha" alt="Captcha" class="api_captcha"/><br>
					            	<input name="captcha" id="api_captcha
					            " type="text" id="api_captcha"/>
					           </div> 
					        </div>

					        <div class="api_input api_submit form-actions">
					            <button type="submit" class="btn btn-info">Send Your Message</button>
					        </div>
					        
					    </fieldset>
					</form>
					</div>

				
			

			</div>

		</div>

	</div>


<?php include('includes/footer.php') ?>
<?php include('includes/foot.php') ?>