<?php
 if (!($this->session->userdata('user_is_login'))) {
        redirect('main_page/index');
} 

include_once 'Template/heder.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>User Dash</title>
<style ="text/css">
ul.events {
    list-style-type: none;
    margin: 0;
    padding: 0 0 20px 0;
}

ul.events li {
    -webkit-border-radius: 11px;
    -moz-border-radius: 11px;
    border-radius: 11px;
    background: #eee;
    border: 1px solid #ddd;
    color: #707070;
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 6px;
    padding: 3px 0;
    position: relative;
    text-align: center;
}

ul.events li em {
    color: #aaa;
    font-weight: normal;
    font-size: 0.9em;
}

ul.intervals {
    list-style-type: none;
    padding: 0;
    display: block;
}

/* The width depends on the number of intervals. For example 100 / 7 = 14.29% -- then subtract a little bit for room for the borders */
ul.intervals li {
    background: #fff url(/images/1x1_eee.gif) repeat-x left 10%;
    border-right: 1px solid #ccc;
    color: #999;
    float: left;
    font-size: 1.2em;
    margin: 0;
    padding: 15px 0;
    text-align: center;
    width: 14.17%;
}

ul.intervals li.first {
    border-left: 1px solid #ccc;
}

</style>
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<script type="text/javascript">
 function showHide(obj) {
   var div = document.getElementById(obj);
   if (div.style.display == 'none') {
     div.style.display = '';
   }
   else {
     div.style.display = 'none';
   }
 }
</script>
</head>

<body>
<div>
<nav class="navbar navbar-fixed-top">
	<div class="navbar-inner">
    	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
		</a>
    <a class="brand" href="<?php echo base_url().'index.php/main_page/index'?>" style="font-family: 'Condiment', cursive;">&nbsp;&nbsp;WedZ.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    
    <div class="nav-collapse">
    <ul class="nav">
      <li class=""><a href="#" style="font-family: 'Indie Flower', cursive;"><i class="icon-home icon-black"></i>Home</a> </li>
      <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Planners</a></li>
      
      
      
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-family: 'Indie Flower', cursive;">Service Providers<span class="caret"></span></a>
      	<ul class="dropdown-menu">
        	<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding out-Fits</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Bridal Dressers</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Decor</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Insuarance</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Designs</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Loans</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Photographors</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Videographors</a></li>
            <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Jewelleries</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Cake Structures</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Stationary</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Music</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Reception Venues</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Honeymoon Locations</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Cultural events</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Caterers</a></li>
			<li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Cars</a></li>
		</ul></li>
      <li><a href="#" style="font-family: 'Indie Flower', cursive;">Wedding Info</a></li>
	  <li><a href="#" style="font-family: 'Indie Flower', cursive;">Contact Us</a></li>
			<form class="navbar-search pull-left">
				<input type="text" class="search-query" placeholder="Search Service Providers">
			</form>
                   <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $this->session->userdata('userName');  
 echo " "; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
                            <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url().'index.php/main_page/logout'?>"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
			  
    </div>
    </div>
</nav>
</div>
<div class ="container-fluid" style="margin-top:40px;">
<div class ="row-fluid">
<div class ="span12">
<li class ="span3">
<div class="sidebar-nav" >
	<div class="well" style="width:250px; padding: 10px 0;">
		<ul class="nav nav-list"> 
		  <li class="nav-header"><h4><?php echo $this->session->userdata('fname');  
 echo " "; echo $this->session->userdata('lname'); ?> </h4></li>        
		  <li class="active"><a href="index"><i class="icon-home"></i> Dashboard</a></li>
		  <li style="padding:10px 0;"><a href="#"><i class="icon-edit" ></i> My Service Providers</a></li>
          <li style="padding:10px 0;"><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
		  <li style="padding:10px 0;"><a href="#"><i class="icon-user"></i> Other Service Providers</a></li>
		  <li style="padding:10px 0;"><a href="#"><i class="icon-comment"></i>Timeline</a></li>
		  <li style="padding:10px 0;"><a href="#"><i class="icon-picture"></i> Progress</a></li>
		  <li style="padding:10px 0;"><a href="#"><i class="icon-picture"></i> To-Do-List</a></li>
		  
		  <li class="divider"></li>
		  <li><a href="#"><i class="icon-comment"></i> Settings</a></li>
		  <li><a href="<?php echo base_url().'index.php/main_page/logout'?>"><i class="icon-share"></i> Logout</a></li>
		  
		</ul>
	</div>
</div>
</li>

<li class="span6" >
		<article class="thumbnail" >
		<center><h3>My Service Providers</h3></center>
		<ul class="thumbnails">
<li class="span4">
  <div class="thumbnail">
    <img src="http://placehold.it/320x200" alt="ALT NAME">
    <div class="caption">
      <h3>Header Name</h3>
      <p>Description</p>
      <p align="center"><a href="http://bootsnipp.com/" class="btn btn-primary btn-block">Open</a></p>
    </div>
  </div>
</li>
  <li class="span4">
  <div class="thumbnail">
    <img src="http://placehold.it/320x200" alt="ALT NAME">
    <div class="caption">
      <h3>Header Name</h3>
      <p>Description</p>
      <p align="center"><a href="http://bootsnipp.com/" class="btn btn-primary btn-block">Open</a></p>
    </div>
  </div>
</li>
  <li class="span4">
  <div class="thumbnail">
    <img src="http://placehold.it/320x200" alt="ALT NAME">
    <div class="caption">
      <h3>Header Name</h3>
      <p>Description</p>
      <p align="center"><a href="http://bootsnipp.com/" class="btn btn-primary btn-block">Open</a></p>
    </div>
  </div>
</li>
  <li class="span4">
  <div class="thumbnail">
    <img src="http://placehold.it/320x200" alt="ALT NAME">
    <div class="caption">
      <h3>Header Name</h3>
      <p>Description</p>
      <p align="center"><a href="http://bootsnipp.com/" class="btn btn-primary btn-block">Open</a></p>
    </div>
  </div>
</li>
  <li class="span4">
    <div class="thumbnail">
      <img src="http://placehold.it/320x200" alt="ALT NAME">
      <div class="caption">
        <h3>Header Name</h3>
        <p>Description</p>
        <p align="center"><a href="http://bootsnipp.com/" class="btn btn-primary btn-block">Open</a></p>
      </div>
    </div>
  </li>
  <li class="span4">
    <div class="thumbnail">
      <img src="http://placehold.it/320x200" alt="ALT NAME">
      <div class="caption">
        <h3>Header Name</h3>
        <p>Description</p>
        <p align="center"><a href="http://bootsnipp.com/" class="btn btn-primary btn-block">Open</a></p>
      </div>
    </div>
  </li>
</ul>
		</article>
		</li>
		
		<li class ="span3">
		
		<article class="thumbnail">
		<center><h3>Event Progress</h3></center>
		<li class="span12">
			<h5>What did I do up to now</h5>
				<strong>Wedding Suite</strong><span class="pull-right">30%</span>
					<div class="progress progress-danger active">
						<div class="bar" style="width: 30%;"></div>
					</div>
  
				<strong>Jewellaries</strong><span class="pull-right">40%</span>
					<div class="progress progress-info active">
						<div class="bar" style="width: 40%;"></div>
					</div>
  
				<strong>Reception Hall Arangements</strong><span class="pull-right">10%</span>
					<div class="progress progress-striped active">
						<div class="bar" style="width: 10%;"></div>
					</div>
  
				<strong>Photography and Videography</strong><span class="pull-right">5%</span>
					<div class="progress progress-success active">
						<div class="bar" style="width: 5%;"></div>
					</div>
  
				<strong>Invitations</strong><span class="pull-right">15%</span>
					<div class="progress progress-warning active">
						<div class="bar" style="width: 15%;"></div>
					</div>
  
				<p>
					
					
					 <center><h4>Overall results</h4></center>

						
						<div id "hidden_div" class="progress progress-warning active" ><span class ="pull-right">45%</span>
						<div class="bar" style="width: 45%; height: 130px;"></div>
					</div>
			</p>
</li>
		</article>
		<article class="thumbnail">
		<center><h3>Calender</h3></center>
		<center><table class="table-condensed table-bordered table-striped">
    <thead>
        <tr>
          <th colspan="7">
            <span class="btn-group">
            	<a class="btn"><i class="icon-chevron-left"></i></a>
            	<a class="btn active">February 2012</a>
            	<a class="btn"><i class="icon-chevron-right"></i></a>
            </span>
          </th>
        </tr>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="muted">29</td>
            <td class="muted">30</td>
            <td class="muted">31</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
        </tr>
        <tr>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
        </tr>
        <tr>
            <td>19</td>
            <td class="btn-primary"><strong>20</strong></td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
        </tr>
        <tr>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td class="muted">1</td>
            <td class="muted">2</td>
            <td class="muted">3</td>
        </tr>
    </tbody>
</table></center>
		
		</article>
		</li>
		
		
				
</div>
</div>
</div>
<div class ="container-fluid">
<div class ="span12">
<div class="timeline">
<center> <h3>Timeline<h3></center>
    <ul class="events">
        <li style="width: 42.48%; left: 57.2%;">Other <em>(2013/10/10 - 2014/01/12)</em></li>
        <li style="width: 56.68%; left: 43%;">Wedding cakes <em>(2013/06/13 - 2014/01/12)</em></li>
        <li style="width: 71.3%; left: 28.4%;">Wedding Suits <em>(2013/06/21 - 2014/01/12)</em></li>
        <li style="width: 85.5%; left: 14.2%;">Jewellaries <em>(2013/05/23 - 2014/01/12)</em></li>
        <li style="width: 42.75%; left: 0;">Wedding Reception hall <em>(2013/04/05 - 2013/07/02)</em></li>
        <li style="width: 99.5%; left: 0;">Entire Wedding Organizing <em>(2013/04/05 - 2014/01/12)</em></li>
    </ul> <!-- end .events -->

    <ul class="intervals">
        <li class="first">2013/04/05</li>
        <li>2013/05</li>
        <li>2013/07</li>
        <li>2013/10</li>
        <li>2013/12</li>
        <li>2013/01</li>
        <li class="last">2013/01/12</li>
    </ul> <!-- end .intervals -->
</div> <!-- end .timeline -->
</div>
</div>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>

</html>

<?php
include_once 'Template/futter.php';
?>