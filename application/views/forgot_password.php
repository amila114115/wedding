
<?php
include 'Template/heder.php';
?>
<br><br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
			<legend>Please enter Email Address</legend>
          	<div class="error" > <?php echo form_error('f_email'); ?> </div>
                <div class="error" > <?php echo $email_error; ?> </div>
			<form method="POST" action="<?php echo base_url()."index.php/forgot_password/chicking" ?>" accept-charset="UTF-8">
			<input type="text" id="email" class="span4" name="f_email" placeholder="Your Email Address">
			
                        <br>
                       
                        
			<button type="submit" name="submit" class="btn btn-primary">Send mail</button>
                  
			</form>   
                      
                         <?php //echo anchor('demo/register','Create Account',array('class' => 'btn')) ?>
                          
		</div>
            
</div>
   
	</div>
<br><br><br><br><br><br><br>
<?php
include_once 'Template/futter.php';
?>
