
<?php
include_once 'Template/heder.php';
?>
<?php
$attributes = array('class' => 'form-horizontal', 'id' => 'myform');

echo form_open('main_page/create_user', $attributes);
?>
<div class ="span8 offset2 well" style="margin-top: 50px;"> 
  <fieldset>
    <div id="legend">
      <legend class="">Register as an Event Organizer </legend>
    </div>
      
    <div class="control-group">
      <!-- Username -->
    
      <label class="control-label"  for="fname">Frist Name</label>
      <div class="controls">
          <input type="text" id="fname" name="fname" placeholder="Frist Name" class="input-xlarge" value=<?php echo  set_value('fname',""); ?> >  &nbsp; * 
          <div class="error" > <?php echo form_error('fname'); ?> </div>
      </div>
    </div>
      
      
          <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="lname">Last Name</label>
      <div class="controls">
        <input type="text" id="lname" name="lname" placeholder="Last Name" class="input-xlarge" value=<?php echo  set_value('lname',""); ?> > &nbsp; *
           <div class="error" > <?php echo form_error('lname'); ?> </div>
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
            <label class="control-label">Address Line 1</label>
            <div class="controls">
                <input id="address-line1" name="address_line1" type="text" placeholder="address line 1"
                class="input-xlarge" value=<?php echo  set_value('address_line1',""); ?>>
                <p class="help-block">Street address, P.O. box, company name, c/o</p>
            </div>
        </div>
        <!-- address-line2 input-->
        <div class="control-group">
            <label class="control-label">Address Line 2</label>
            <div class="controls">
                <input id="address-line2" name="address_line2" type="text" placeholder="address line 2"
                class="input-xlarge" value=<?php echo  set_value('address_line2',""); ?>>
                <p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
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
      <!-- Username -->
    
      <label class="control-label"  for="contact_number">Contact Number</label>
      <div class="controls">
          <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number" class="input-xlarge" value=<?php echo  set_value('contact_number',""); ?> >
      <div class="error" > <?php echo form_error('contact_number'); ?> </div>
      </div>
    </div> 
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="start_date">Event organize start from </label>
      <div class="controls">
       <select name ="date_start" class="input-mini">
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option></select>
    
      
             <select name ="month_start" class="input-small">
                <option selected>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
             </select>
             <select name ="year_start" class="input-small">
                <option selected>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                   
              </select>
          &nbsp; to &nbsp; 
          
          <select name ="date_end" class="input-mini">
                <option selected>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option></select>
    
      
             <select name ="month_end" class="input-small">
                <option selected>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
             </select>
             <select name ="year_end" class="input-small">
                <option selected>2013</option>
                <option>2014</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option> 
          
              </select> &nbsp; *
          
          
          
      </div>
      
      
      
    </div>    
      
        <br>
      
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</div>
</form>

<?php
include_once 'Template/futter.php';
?>