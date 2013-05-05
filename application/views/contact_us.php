<?php
include_once 'Template/heder.php';

?>
<form method="POST" action="<?php echo base_url()."index.php/main_page/contact_us_to_db" ?>" accept-charset="UTF-8" class="well span8 offset2" style="margin-top: 100px; ">
  <div class="row">
		<div class="span3">
			<label>First Name</label>
			<input name="fname" type="text" class="span3" placeholder="Your First Name">
			<label>Last Name</label>
			<input name="lname" type="text" class="span3" placeholder="Your Last Name">
			<label>Email Address</label>
			<input name="email" type="text" class="span3" placeholder="Your email address">
          	<label>I am </label>
			<select id="subject" name="subject" class="span3">
				<option value="no" selected="">Choose One:</option>
				<option value="Service provider">Service provider</option>
				<option value="Event Organizer">Event Organizer</option>
				<option value="Not a member">Not a member</option>
			</select>
		</div>
		<div class="span5">
			<label>Message</label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
		</div>
	
		<button type="submit" class="btn btn-primary pull-right">Send</button>
	</div>
</form>
       <?php
include_once 'Template/futter.php';
?>