
<?php
include_once 'Template/heder.php';
?>
<?php
$attributes = array('class' => 'form-horizontal', 'id' => 'myform');

echo form_open('main_page/create_sp', $attributes);
?>
<div class ="span6 offset3 well" style="margin-top: 50px;"> 
  <fieldset>
    <div id="legend">
      <legend class="">Register for the service providers</legend>
    </div>
      
    <div class="control-group">
      <!-- Username -->
    
      <label class="control-label"  for="companyName">Company Name</label>
      <div class="controls">
         
          <input type="text" id="fname" name="companyName" placeholder="Company Name" class="input-xlarge" value=<?php echo  set_value('companyName',""); ?>> &nbsp;  *
          <div class="error" > <?php echo form_error('companyName'); ?> </div>
      </div>
    </div>
      
      
      <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="User Name" class="input-xlarge" value=<?php echo  set_value('username',""); ?> > &nbsp; *
            <div class="error" > <?php echo form_error('username'); ?> </div>
        <div class="error" > <?php echo $msg_for_username; ?> </div>
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      
  
      </div>
    </div>
      

 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="Email Address" class="input-xlarge" value=<?php echo  set_value('email',""); ?> > &nbsp; *
            <div class="error" > <?php echo form_error('email'); ?> </div>
          <div class="error" > <?php echo $msg_for_email; ?> </div>
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge" ?> &nbsp; *
            <div class="error" > <?php echo form_error('password'); ?> </div>
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password2" placeholder="Confirm Password " class="input-xlarge"  > &nbsp; *
           <div class="error" > <?php echo form_error('password2'); ?> </div>
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
      
       <div class="control-group">
        <label class="control-label" for="location">location</label>
            <div class="controls">
                 <select name ="location" value="<?php echo  set_value('location',""); ?>"  >
                <option value="" selected="" > Please select location</option>
                <option >Ampara</option>
                <option>Anuradhapura </option>
                <option>Awissawella </option>
                <option>Badulla </option>
                <option>Bandarawela </option>
                <option>Baticaloa </option>
                <option>Chillaw </option>
                <option>Colombo </option>
                <option>Galle </option>
                <option>Gampaha </option>
                <option>Hattom  </option>
                <option>Jaffna  </option>
                <option>Kalmunai  </option>
                <option>Kalutara  </option>
                <option>Kandy  </option>
                <option>Kegalle  </option>
                <option>Kurunegala  </option>
                <option>Matale  </option>
                <option>Matara  </option>
                <option>Nawalapitiya   </option>
                <option>Negombo   </option>
                <option>Nuwara Eliya  </option>
                <option>Panadura   </option>
                <option>Polonnaruwa   </option>
                <option>Ratnapurta   </option>
                <option>Trincomale  </option>
                <option>Vavuniya   </option>
                <option>Mannar   </option>
                </select> &nbsp; *
                <div class="error" > <?php echo form_error('location'); ?> </div>
           
      </div>
    </div> 
      
        <div class="control-group">
            <label class="control-label">Address Line 1</label>
            <div class="controls">
                <input id="address-line1" name="address_line1" type="text" placeholder="address line 1"
                class="input-xlarge" value=<?php echo  set_value('address_line1',""); ?> >
                <p class="help-block">Street address, P.O. box, company name, c/o</p>
            </div>
        </div>
        <!-- address-line2 input-->
        <div class="control-group">
            <label class="control-label">Address Line 2</label>
            <div class="controls">
                <input id="address-line2" name="address_line2" type="text" placeholder="address line 2"
                class="input-xlarge" value=<?php echo  set_value('address_line2',""); ?> >
                <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
            </div>
        </div>
      
  
      
      <div class="control-group">
      <!-- Username -->
    
      <label class="control-label"  for="mobile_number">Mobile number</label>
      <div class="controls">
          <input type="text" id="contact_number" name="mobile_number" placeholder="Contact Number" class="input-xlarge" value=<?php echo  set_value('mobile_number',""); ?> >
      <div class="error" > <?php echo form_error('mobile_number'); ?> </div>
      </div>
      
    </div> 
        
   <div class="control-group">
      <!-- Username -->
    
      <label class="control-label"  for="office_number">office Number</label>
      <div class="controls">
          <input type="text" id="contact_number" name="office_number" placeholder="Contact Number" class="input-xlarge" value=<?php echo  set_value('office_number',""); ?> > &nbsp; *
        
       <div class="error" > <?php echo form_error('office_number'); ?> </div></div>
    </div> 
 
        
      
        <br>
      
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-primary">Register</button>
      </div>
    </div>
  </fieldset>
</div>
</form>
<hr/>
<?php
include_once 'Template/futter.php';
?>