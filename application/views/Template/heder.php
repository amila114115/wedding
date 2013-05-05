           
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php $title ?> </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap-responsive.css'?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/body.css'?>" />
<!--
<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]> -->
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <!--  <![endif]-->
	<style type ="text/css" >
 .error{
 color:red;
font-size: 15px;
font-style:italic;
}

input.ui-pg-input {
    width: auto;
    padding: 0px;
    margin: 0px;
    line-height: normal
}
select.ui-pg-selbox {
    width: auto;
    padding: 0px;
    margin: 0px;
    line-height: normal
}
       
	</style>
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
    <a class="brand" href="#" style="font-family: 'Condiment', cursive;">&nbsp;&nbsp;WedZ.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    
    <div class="nav-collapse">
    <ul class="nav">
      <li class=""><a href="<?php echo base_url().'index.php/main_page/index'?>" style="font-family: 'Indie Flower', cursive;"><i class="icon-home icon-black"></i>Home</a> </li>
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
	  <li><a href="<?php echo base_url().'index.php/main_page/contact_us'?>" style="font-family: 'Indie Flower', cursive;">Contact Us</a></li>
			<form class="navbar-search pull-left">
				<input type="text" class="search-query" placeholder="Search Service Providers">
			</form>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-family: 'Indie Flower', cursive;">Sign Up<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="<?php echo base_url().'index.php/main_page/register_sp'?>" style="font-family: 'Indie Flower', cursive;">Sign up as a Service Provider</a></li>
						<li><a href="<?php echo base_url().'index.php/main_page/register_user'?>" style="font-family: 'Indie Flower', cursive;">Sign up as an Event Organizer</a></li>
                </ul></li>
				  <li><a href="<?php echo base_url().'index.php/main_page/login_view'?>" style="font-family: 'Indie Flower', cursive;">Sign in</a></li>
                  
				  
				</ul>
      
    </div>
    </div>
</nav>