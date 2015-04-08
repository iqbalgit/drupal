<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Zuperp</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/element.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
    	<div class="container">
        	<div class="col-md-4 clear-both">
            	<div class="menu">
                	<b>
                        <span></span>
                        <span></span>
                        <span></span>
                    </b>
                   	<p>MENU</p>
                </div>
                <div class="apps">
					<a target="_blank" title="Google Play" href="#">
						<img alt="Logo" src="<?php global $base_url; echo $base_url.'/'.path_to_theme(); ?>/img/playstore.png">
					</a>
            	</div>
              </div>
            <div class="col-md-4 clear-both logo">
            	<?php if ($logo): ?>
      <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>
            </div>
            <div class="col-md-4 clear-both">
            	<div class="links">
                	<a href="user/login">Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner">
    	
    </div>
    
    <div class="feature-block">
    	<div class="container">
        	<div class="feature-wrapper">
    		<h1>Find tradies the easy way with our free app. </h1>
       		<p>Try our get quotes service, where one form gets you 3 quotes. Or browse our directory and view tradie 
profiles and contact details for 40,000 local tradies.</p>
            </div>
            <div class="col-md-4">GSM/GPRS Based Location Mapping</div>
            <div class="col-md-4">Google Map Integration</div>
            <div class="col-md-4">Web Based Vendor Registration</div>
            <div class="col-md-4">Geofence  Based Search</div>
            <div class="col-md-4">Free Listing for Vendors</div>
            <div class="col-md-4">SMS Alerts</div>
            <div class="col-md-4">Vendor Rating</div>
            <div class="col-md-4">Abuse Vendor</div>
            <div class="col-md-4">Refine Search by 
Distance </div>
        </div>
    </div>
	
    <div class="vendor-reg-block">
    	<div class="container">
        	<div class="vendor-wrapper">
            	<h1>Vendor Registration</h1>
                <p>A tradesperson account lets you chase job leads and secure work. It's free to set up and get verified.</p>	
                
                <div class="col-md-6">
                	
                </div>
                <div class="col-md-6"></div>
                
            </div>
        </div>
    	
    </div>
    
    <div class="footer-block">
    	<div class="container">
        	<div class="footer-wrapper">
            	<h1>Zuperp offers mobile solutions that should be part of every organization aiming to succeed in the mobile market. Whether the 
focus is native or web applications, we will strengthen your position.We not only develop custom iPhone, iPad, 
Android applications, but also provide mobile optimization and mobile marketing solutions as well.
</h1>
            </div>
        </div>
        <div class="download-block">
        	<p>Get started with Zuperp now – it's free! <span><a target="_blank" title="Google Play" href="#">
						<img alt="Logo" src="<?php global $base_url; echo $base_url.'/'.path_to_theme(); ?>/img/playstore.png">
					</a></span></p>
        </div>
    
    	<div class="fotter-bottom">
        	<div class="footer-left">Support         FAQ        Security        Privacy       Terms</div>
            <div class="footer-right">© Copyright 2015 NetiApps Software Pvt. Ltd - All Rights Reserved </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
