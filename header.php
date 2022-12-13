<?php
    require_once('conexao.php');

    //fetch settings
    $settings = mysqli_query($conexao,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);

    
?>


 <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="left-column">
                        <ul class="social-icon">
                            <li><a target="blank" href="<?php echo $setting['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="blank" href="<?php echo $setting['twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="blank" href="<?php echo $setting['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="blank" href="<?php echo $setting['youtube']; ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        
                    </div>
                    <div class="right-column">
                        <div class="phone-number"><i class="flaticon-calling"></i><a href="tel:<?php  echo $setting['phone']; ?>"></a><?php  echo $setting['phone']; ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="" alt=""></a></div><!--colocar logo-->
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                    <li class="dropdown">
                                    <a href="index.php"><img src="imagens/logo.png" whidth="100" height="100" </a>
                                    </li>
                                        <li class="dropdown">
                                            <a href="index.php">Home</a>
                                        </li>
                                
                                        <li class="dropdown">
                                            <a href="about.php">Agendamento</a>
                                        </li>
                                       
                                        <li class="dropdown">
                                            <a href="service.php">Serviços</a>
                                        </li> 
                                        
                                        <li class = "dropdown">
                                            <a href="contact.php">Contato</a>
                                        </li>
                                        <?php
                                            if(!empty($_SESSION['id'])){
                                                if($_SESSION['nivel'] == 1){
                                                    echo '<li class = "dropdown">
                                                            <a href="admin/index.php">'.$_SESSION['email'].'</a>
                                                        </li>';
                                                    echo '<li class = "dropdown">
                                                            <a href="sair.php">Sair</a>
                                                        </li>';
                                                } else {
                                                    echo '<li class = "dropdown">
                                                            <a href="admin/atualizar_fornecedor.php">'.$_SESSION['email'].'</a>
                                                        </li>';
                                                    echo '<li class = "dropdown">
                                                            <a href="sair.php">Sair</a>
                                                        </li>';
                                                }
                                            }else{
                                                echo '<li class = "dropdown">
                                                        <a href="admin/login.php">Login</a>
                                                    </li>';
                                            }
                                        ?>
                                        <div class="language">
                                    
                                            <form action="#" class="language-switcher"></form>
                                       
                                            
                                        </div>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    
                    </div>                        
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="" alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>
    
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="sign-in"><a href="#"><i class="flaticon-delivery-man-1"></i>Tel:  <?php  echo $setting['phone']; ?></a></div>
                                <div class="language">
                                    <!--<span class="icon"><img src="assets/images/resource/flags/de.png" alt=""></span> -->
                                    <form action="#" class="language-switcher">
                                       
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="" alt="" title=""></a></div><!--colocar logo-->
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->