
<?php
include 'Template/heder.php';
?>
<br><br><br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
			<legend>Please enter New Password</legend>
          	<div class="error" > <?php echo form_error('f_email'); ?> </div>
			<form method="POST" action="<?php echo base_url()."index.php/forgot_password/enter_password?username=$username" ?>" accept-charset="UTF-8">
			
                            
                            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge" ?>
                       
                        <div class="error" > <?php echo form_error('password'); ?> </div>
        <p class="help-block">Password should be at least 4 characters</p>
                        
            <p class="help-block">Please confirm password</p>
                        
            
                            <input type="password" id="password_confirm" name="password2" placeholder="Confirm Password " class="input-xlarge"  >
			 <div class="error" > <?php echo form_error('password2'); ?> </div>
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
