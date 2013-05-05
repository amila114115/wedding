
<?php
include 'Template/heder.php';
?>
<br><br><br><br><br><br><br>
<div class="container">
<div class="row">
		<div class="span4 offset4 well">
			<legend>Please Sign In</legend>
          	<div class="error" > <?php echo $msg_for_login; ?> </div>
			<form method="POST" action="<?php echo base_url()."index.php/main_page/login" ?>" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="Username">
			<input type="password" id="password" class="span4" name="password" placeholder="Password">
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Remember Me
            </label>
                       
			<button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                  <a href="<?php echo base_url().'index.php/forgot_password/f_password'?>">Forgot Password?</a>
			</form>   
                      
                         <?php //echo anchor('demo/register','Create Account',array('class' => 'btn')) ?>
                          
		</div>
            
</div>
   
	</div>
<br><br><br><br><br><br><br>
<?php
include_once 'Template/futter.php';
?>