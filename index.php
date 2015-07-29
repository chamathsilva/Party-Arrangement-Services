
<?php include ('resources/configuration/setup.php');?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Party Arrangement Services</title>
		<?php include (CONFIG.'CSS.php');  ?>
		
	</head>
	<body>
		<div class="brand">Party Arrangment Services</div>
   		<div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>
		<?php include (TEMPLATES.'Home_page_navigation_bar.php'); ?>
		
		<div class="container">
        	<div class="row">
            	<div class="box">
                	<div class="col-lg-12 text-center">
                    	<div id="carousel-example-generic" class="carousel slide">
                        	<!-- Indicators -->
                        	<ol class="carousel-indicators hidden-xs">
                            	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        	</ol>
                       
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="public_html/img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="public_html/img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="public_html/img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Party Arrangment Services</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>GROUP 7</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>
     </div>
	
	<div class="container">
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    	<strong><a href="index.php">caterers</a> </strong>

                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="public_html/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    	<strong><a href="index.php">sounds</a> </strong>

                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="public_html/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">       
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                    	<strong><a href="index.php">bands</a> </strong>
                   
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="public_html/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                 </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong><a href="index.php">decorators</a> </strong>
                        
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="public_html/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                </div>
            </div>
        </div>
</div>
		
		
		
		
		<?php include (TEMPLATES.'footer.php'); ?>
		<?php include (CONFIG.'JS.php');  ?>
	
    	<!-- Script to Activate the Carousel -->
    	<script>
    	$('.carousel').carousel({
        	interval: 3000 //changes the speed
    	})
    	</script>
		
	</body>
</html>
