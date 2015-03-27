<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Feedo - News Aggregator- Free Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <?php
    // turn off errors
    error_reporting(0); 
    
    // FEEDS FOR OUR DEMO, CHOOSE YOUR FAVORITES
    $one = 'http://feeds.sidebar.io/SidebarFeed';
    
    // Include SimplePie
    include_once('autoloader.php');
    include_once('idn/idna_convert.class.php');
    
    // Create a new instance of the SimplePie object
    $feed = new SimplePie();
    
    // Set feed url
    $feed->set_feed_url($one);
    
    // Trigger force-feed
    $feed->force_feed(true);
    
    // Initialize the whole SimplePie object.  Read the feed, process it, parse it, cache it, and
    // all that other good stuff.  The feed's information will not be available to SimplePie before
    // this is called.
    $success = $feed->init();
    
    // We'll make sure that the right content type and character encoding gets set automatically.
    // This function will grab the proper character encoding, as well as set the content type to text/html.
    $feed->handle_content_type();
    ?>
    
    <body>
	
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 site">
				
				
						<div class="site-title">
							<h2><b>Feedo</b> - Aggregator Theme</h2>
						</div><! --/site top -->
						<?php $item = $feed->get_item(0); ?>
							<div class="post">
									<h4><?php if ($item->get_permalink()) echo $item->get_title(); ?></h4>
									<small><?php echo $item->get_date('j M Y, g:i a'); ?></small>
								<p class="pull-right"><a <?php echo 'href="' . $item->get_permalink() . '"'; ?> <span class="glyphicon glyphicon-log-out"></span></a></p>
						    </div>

						<?php $item = $feed->get_item(1); ?>
							<div class="post">
									<h4><?php if ($item->get_permalink()) echo $item->get_title(); ?></h4>
									<small><?php echo $item->get_date('j M Y, g:i a'); ?></small>
								<p class="pull-right"><a <?php echo 'href="' . $item->get_permalink() . '"'; ?> <span class="glyphicon glyphicon-log-out"></span></a></p>
						    </div>
						    

						<?php $item = $feed->get_item(2); ?>
							<div class="post">
									<h4><?php if ($item->get_permalink()) echo $item->get_title(); ?></h4>
									<small><?php echo $item->get_date('j M Y, g:i a'); ?></small>
								<p class="pull-right"><a <?php echo 'href="' . $item->get_permalink() . '"'; ?> <span class="glyphicon glyphicon-log-out"></span></a></p>
						    </div>

						<?php $item = $feed->get_item(3); ?>
							<div class="post">
									<h4><?php if ($item->get_permalink()) echo $item->get_title(); ?></h4>
									<small><?php echo $item->get_date('j M Y, g:i a'); ?></small>
								<p class="pull-right"><a <?php echo 'href="' . $item->get_permalink() . '"'; ?> <span class="glyphicon glyphicon-log-out"></span></a></p>
						    </div>
					
							<div class="post centered">
								<img src="assets/img/ui-pic.jpg" class="img-circle" width="90">
								<h6>Curated By</h6>
								<h5>Paul Neville</h5>
							</div>
							
							<div class="site-footer">
								<p><a href="#">Home</a> | <a href="#">Contact</a> | <a href="#">Submit</a>  </p>
							</div>
					
				</div><!-- /col-md-6 -->
			</div><! --/row -->
		</div><! --/container -->
		        

        
<!-- ****************************************************************************************************************************************
FOOTER
********************************************************************************************************************************************* -->        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/bg01.jpg", {speed: 500});
    </script>
    
  </body>
</html>
