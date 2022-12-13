<?php

    error_reporting(0);
    include "admin/conn.php";

  
    
    //fetch services
    $services = mysqli_query($con,"SELECT * FROM services ORDER BY id DESC");
    
     //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
<title>Serviços - <?php echo $setting['site_name']; ?></title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=601e75803d01430011c105c8&product=image-share-buttons' async='async'></script>

</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
   

   
    <!-- End Main Header -->
<?php include "header1.php"; ?>

    <br><br><br><br>
    <!-- serivice from here -->
        <div class="auto-container">
            <div class="sec-title text-center">

                <h1>SERVIÇOS & AGENDAMENTOS</h1>
            </div>  
        </div>
    </section>
    <style>
        .zoom:hover {
        transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
    
      <div class="container pb-5">
          <div class="row ">
              <?php
                        while($row=mysqli_fetch_array($services)){
                    ?>
              <div class="col-md-4 zoom pb-5">
                   
                    <div class="card-deck">
                        <div class="card">
                                                 
                            <a href="https://api.whatsapp.com/send?phone=5521920007037&text=Olá.%20Desejo%20realizar%20um%20agendamento%20." target="_blank" rel="noopener noreferrer"><button><img class="card-img-top" style="height:520px;" src="admin/images/services/<?php echo $row['img'];?>"  alt="Card image cap" ></button></a>    
                        
                            <div class="card-body">
                              <h5 class="card-title"><b><?php echo $row['title']; ?></b></h5>
                              <p class="card-text"><?php echo $row['short']; ?></p>
                            </div>
                        </div>
                    </div>
                    
              </div>
              
              <?php  } ?>
          </div>
      </div>
    
    <!-- boostrap ends -->


    <!-- services php -->

        

    <?php
        while($row=mysqli_fetch_array($services)){
    ?>
                    
                                       
    <?php echo $row['title']; ?>
    
    <?php echo $row['title']; ?>
    <?php echo $row['short']; ?>
                                
              
    <?php  } ?>

    
    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>













