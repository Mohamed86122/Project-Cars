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
      <title>ADMIN</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../CLIENT/css/bootstrap.min.css">
      <!-- style css -->
      <!-- Responsive-->
      <link rel="stylesheet" href="../CLIENT/css/responsive.css">
      <style>   
         <?php 
               include('../CLIENT/css/style.css');  
               include('../CLIENT/css/responsive.css');  
               include('../CLIENT/css/jquery.mCustomScrollbar.min..css');  
               
         ?>  
      </style>
      <!-- fevicon -->
      <link rel="icon" href="../CLIENT/images/Sans titre.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../CLIENT/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
     <!-- header inner -->
         
     <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href=""><img src="../CLIENT/images/Sans titre.png" alt="#" style="margin-left:400px;" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="container admin">
            <div class="row">
                <h1><strong>List Of Items </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> ADD ITEMS</a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                        <tr>
                        <th>COMPANY</th>
                        <th>MODEL</th>
                        <th>DESCRIPTION</th>
                        <th>CATEGORIE</th>
                        <th>YEARS</th>
                        <th>CARURANT</th>
                        <th>ACTIONS</th>
                        </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th>Mercedes</th>
                        <th>GLK-Class</th>
                        <th><a href="">VOIR PLUS</a></th>
                        <th>Crossover SUV</th>
                        <th>2022-2007-2011</th>
                        <th>Essence</th>
                        <th>
                           <a class="btn btn-primary" href="update.php?id='.$item['id'].'"><span class="glyphicon glyphicon-pencil"></span> VIEW</a>
                           <a class="btn btn-danger" href="update.php?id='.$item['id'].'"><span class="glyphicon glyphicon-pencil"></span> EDIT</a>
                           <a class="btn btn-secondary" href="update.php?id='.$item['id'].'"><span class="glyphicon glyphicon-pencil"></span> DELETE</a>
                        </th>
                     </tr>
                  </tbody>
                    


</body>
</html>