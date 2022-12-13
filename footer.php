
<style>
    .footer-bottom{
background-color:#1b072e;
    }
</style>
<?php
include "admin/conn.php";

//fetch settings
$settings = mysqli_query($con, "SELECT * FROM settings");
$setting  = mysqli_fetch_array($settings);
?>

<!--End Main Footer-->

<div class="footer-bottom">
    <div class="auto-container">
        <div class="row m-0 align-items-center justify-content-between">
            <div class="copyright-text">Copyright © 2022 <?php echo $setting['site_name']; ?> </a></div>
            <ul class="menu">
                <li><a>Política de Privacidade</a></li>
                <li><a>Termos & Condições </a></li>
            </ul>
        </div>
    </div>
</div>

</div>
<!--End pagewrapper-->