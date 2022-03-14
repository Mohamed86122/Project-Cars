<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CAR BASE</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      
      <!-- style css -->

     
      <!-- Responsive-->
      <style>   
         <?php 

               include('css/style.css');  
               include('css/responsive.css');  
               include('css/jquery.mCustomScrollbar.min..css');
               include('css/responsive.css');
               include('css/bootstrap.min.css');


         ?>  
      </style>
      <?php include('favicon.php');?> 
      <!-- fevicon -->
      <!-- Scrollbar Custom CSS -->
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <?php 
            include('header.php');    
      ?>
      
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text_bd">
                     <h1>Find Best car Here </h1>
                     <span>Information of Car</span>
                     <p>
                           Car Base is all about creating a powerful website for you who are looking for or interested in cars! This is a work in progress. Join Car base and upload your car photos to share them to other car enthusiasts. Soon you will be able to compete for various spot awards                       
                           <head></head>
                     </p>
                     <a href="catalog.php">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
      <!-- car -->
      <?php 
            include('card.php');    

      ?>
      <!-- <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>VARIETY OF CARS </h2>
                     </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 padding_leri">
                  <div class="cb">
                     <div class="box2">
                        <figure><img src="images/car_img1.png" alt="#"/></figure>
                        <a href="http://"><h3>HYUNDAI</h3></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="cb">
                     <div class="box2">
                        <figure><img src="images/car_img2.png" alt="#"/></figure>
                        <a href="http://"><h3>AUDI</h3></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="cb">
                     <div class="box2">
                        <figure><img src="images/car_img3.png" alt="#"/></figure>
                        <a href="shop.php"><h3>BMW</h3></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- end car -->
      <!-- bestCar -->
      <div id="contact" class="bestCar">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-6 offset-md-6">
                    <div id="contactus">
                        <form class="main_form">
                           <div class="titlepage">
                              <h2>Contact Us</h2>
                           </div>
                           <div class="row">
                              <div class="col-md-12 ">
                                  <input type="email" class="form-control" placeholder="Full Name"><br>
                                </div>
                              <div class="col-md-12 ">
                                  <input type="email" class="form-control" placeholder="Mail"><br>
                                </div>
                              <div class="col-md-12 ">
                                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" placeholder="Your message here ....."></textarea>
                                </div>
                              <div class="col-sm-12">
                                 <button class="find">Send</button>
                              </div>
                           </div>
                        </form> 
                    </div>    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bestCar -->
      
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 id="about">About Us</h2>
                     <span>Car Base is all about creating a powerful website for you who are looking for or interested in cars!</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose">
                     <span>01</span>
                     <p>We have created a car database and our goal is for it to contain all kinds of data regarding cars. The purpose of the database is to make the car market more transparent and less complicated.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose">
                     <span>02</span>
                     <p>Examples of data are car specifications, classifieds, mileages and reviews. By structuring the data, we want to make it easier to find the right car, make correct car valuations, compare statistics, confirm a car's history and find the right accessories.
                        The target group is everyone that has anything to do with cars, such as owners, buyers and sellers – both consumers and those that in any way work in the industry. We realise that it is a large and extensive task to build a car information website and we greatly appreciate suggestions on how we can improve. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose  section -->
      <!-- cutomer -->
      <div id="cst">
        <div class="cutomer">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Feedbacks</h2>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide cutomer " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="cross_img">
                                        <!-- <figure><img src="images/cross_img.png" alt="#"/></figure> -->
                                    </div>
                                    <div class="our cross_layout">
                                        <div class="test">
                                        <h4>Miguel Almirón</h4>
                                        <span>About the new cars </span>
                                        <p>This Website allow me to know new cars around in the world</p>
                                        <i><img src="images/te1.png" alt="#"/></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="cross_img">
                                        <!-- <figure><img src="images/cross_img.png" alt="#"/></figure> -->
                                    </div>
                                    <div class="our cross_layout">
                                        <div class="test">
                                        <h4>Marco Barco</h4>
                                        <span>About the sport cars </span>
                                        <p>This Website allow me to know new cars around in the world</p>
                                        <i><img src="images/te1.png" alt="#"/></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="cross_img">
                                        <!-- <figure><img src="images/cross_img.png" alt="#"/></figure> -->
                                    </div>
                                    <div class="our cross_layout">
                                        <div class="test">
                                        <h4>Dani Olmo</h4>
                                        <span>About the legend cars </span>
                                        <p>This Website allow me to know new cars around in the world</p>
                                        <i><img src="images/te1.png" alt="#"/></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
        <!-- end cutomer -->
      <?php
            include('footer.php');
      ?>
     
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

