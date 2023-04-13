<?php
include('db.php');

?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Restaurant One Page HTML5 Template</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/animate.min.css">

		<link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
      <img class="img-responsive" src="images/header.jpg" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <img src="images/logo.png" alt="Logo">
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right" id="top-nav">
                                <li><a href="#hero-area">Home</a></li>
                                <li><a href="#about-us">about us</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#price">menu</a></li>
                                <li><a href="#subscribe">news</a></li>
                                <li><a href="#contact-us">contacts</a></li>
                              </ul>
                            </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Featured <span>Works</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                           

            <?php

            $get_data = "SELECT * FROM home";
            $run_data = mysqli_query($con,$get_data);

            while($row = mysqli_fetch_array($run_data))
            {
                $id = $row['id'];
                $image = $row['image'];

                echo "

                 <div>
                                <img class='img-responsive' src='images/$image'alt=''style='width:300px;height:300px;'>
                            </div>

               
                ";
            }

            ?>

            
                            
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">

                          <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Our <span>Restaurant’s</span> </br>Chef Has To Cook <span>Good</span>
                        </h1>

                         <?php

            $get_data = "SELECT * FROM aboutus";
            $run_data = mysqli_query($con,$get_data);

            while($row = mysqli_fetch_array($run_data))
            {
                $id = $row['id'];
                $image = $row['image'];
                 $description = $row['description'];

                echo "

                 <img class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms' src='images/$image' alt='cooker-img'>
                      
                        <p class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='600ms'>$description</p>

               
                ";
            }

            ?>

                        
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
    <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                        <ul>
                            
         <?php

            $get_data = "SELECT * FROM blog";
            $run_data = mysqli_query($con,$get_data);

            while($row = mysqli_fetch_array($run_data))
            {
                $id = $row['id'];
                $image = $row['image'];
                $title = $row['title'];
                 $description = $row['description'];

                echo "

                 <li class='wow fadeInLeft' data-wow-duration='300ms' data-wow-delay='300ms'>
                                <div class='blog-img'>
                                    <img src='images/blog/$image' alt='blog-img'>
                                </div>
                                <div class='content-right'>
                                    <h3>$title</h3>
                                    <p>$description</p>
                                </div>
                            </li>


               
                ";
            }

            ?>

                            
                        </ul>
                        
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->
    <!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>

                         <?php

            $get_data = "SELECT * FROM desmenu";
            $run_data = mysqli_query($con,$get_data);

            while($row = mysqli_fetch_array($run_data))
            {
               
                $description = $row['description'];
                

                echo "
                    
                                 <p class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'> $description</p>
                 
               
                ";
            }

            ?>
                       
                        <div class="pricing-list">
                            <div class="title">
                                <h3>Featured <span>on the week</span></h3>
                            </div>
                            <ul>
                                
                                <?php

            $get_data = "SELECT * FROM menu";
            $run_data = mysqli_query($con,$get_data);

            while($row = mysqli_fetch_array($run_data))
            {
                $id = $row['id'];
                $name = $row['name'];
                $description = $row['description'];
                $price = $row['price'];

                echo "
                    <li class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>
                                    <div class='item'>
                                        <div class='item-title'>
                                            <h2> $name</h2>
                                            <div class='border-bottom'></div>
                                            <span>$price</span>
                                        </div>
                                        <p>$description</p>
                                    </div>
                                </li>
                 
               
                ";
            }

            ?>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
    <!--
    subscribe start
    ============================ -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>

                         <?php

            $get_data = "SELECT * FROM news";
            $run_data = mysqli_query($con,$get_data);

            while($row = mysqli_fetch_array($run_data))
            {
    
                
                $latestnews = $row['latestnews'];
                

                echo "
                     <p class='wow fadeInUp' data-wow-duration='300ms' data-wow-delay='400ms'>$latestnews </p>
               
                ";
            }

            ?>
                       
                        <form class="form-inline" action="subscribeadd.php" method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="mail" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" type="submit" name="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #subscribe close -->
    <!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">our <span>CONTACT US</span></h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                        <form action="messageadd.php" method="POST">
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="email" name="mail" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" name="chat" rows="3" placeholder="Write your message here..."></textarea>
                            </div>
                            
            <button class="btn btn-lg" style="background-color: #FF4F02; color: white; border-radius: 0px; font-weight: 600;border: 0px; height: 50px;text-transform: uppercase;line-height: 1.42857143;text-align: center; white-space: nowrap;
    vertical-align: middle; " type="submit" name="submit">send your message</button> 
                          

                        </form>
                        
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <?php

            $get_data = "SELECT * FROM contact";
            $run_data = mysqli_query($con,$get_data);

        while($row = mysqli_fetch_array($run_data))
        {
          $phone = $row['phone'];
          $address = $row['address'];
          $mail = $row['mail'];
          $firstpost = $row['firstpost'];
          $secondpost = $row['secondpost'];
          $firstdescription = $row['firstdescription'];
          $seconddescription = $row['seconddescription'];
          $mediaone = $row['mediaone'];
          $mediatwo = $row['mediatwo'];
          $mediathree = $row['mediathree'];
          $mediafour = $row['mediafour'];
                echo "

                <div class='block wow fadeInLeft'  data-wow-delay='200ms'>
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class='info'>
                            <ul>
                                <li>
                                  <h4><i class='fa fa-phone'></i>Telefone</h4>
                                  <p>$phone</p>
                                    
                                </li>
                                <li>
                                  <h4><i class='fa fa-map-marker'></i>Address</h4>
                                  <p>$address</p>
                                </li>
                                <li>
                                  <h4><i class='fa fa-envelope'></i>E mail</h4>
                                  <p>$mail</p>
                                  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class='col-md-4'>
                    <div class='block wow fadeInLeft'  data-wow-delay='700ms'>
                        <h3>LATEST <span>BLOG POSTS</span></h3>
                        <div class='blog'>
                            <ul>
                                <li>
                                    <h4><a href='#'>$firstpost</a></h4>
                                    <p>$firstdescription</p>
                                </li>
                                <li>
                                    <h4><a href='#'>$secondpost </a></h4>
                                    <p>$seconddescription</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                 <!-- .col-md-4 close -->
                <div class='col-md-4'>
                    <div class='block wow fadeInLeft'  data-wow-delay='1100ms'>
                        <div class='gallary'>
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href='#'><img src='images/photo/photo-1.jpg' alt='></a>
                                </li>
                                <li>
                                    <a href='#'><img src='images/photo/photo-2.jpg' alt='></a>
                                </li>
                                <li>
                                    <a href='#'><img src='images/photo/photo-3.jpg' alt='></a>
                                </li>
                                <li>
                                    <a href='#'><img src='images/photo/photo-4.jpg' alt='></a>
                                </li>
                            </ul>
                        </div>
                        <div class='social-media-link'>
                        <br><br>
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href='$mediaone'>
                                        <i class='fa fa-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='$mediatwo'>
                                        <i class='fa fa-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='$mediathree'>
                                        <i class='fa fa-dribbble'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='$mediafour'>
                                        <i class='fa fa-behance'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                    
               
                ";
            }

            ?>
                   
               
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Copyright &copy; 2014 - All Rights Reserved.Design and Developed By <a href="http://www.themefisher.com">Themefisher</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	</body>
</html>