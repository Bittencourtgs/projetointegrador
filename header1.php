<?php
require_once('conexao.php');

//fetch settings
$settings = mysqli_query($conexao, "SELECT * FROM settings");
$setting  = mysqli_fetch_array($settings);


?>


<header class="main-header header-style-one">
<div class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <ul class="social-icon">
                        <li><a href="<?php echo 'index.php'; ?>"><img src="imagens/logo.png" width="70px" height="70px"></a></li>
                        <li><a href="<?php echo 'index.php'; ?>">HOME</a></li>
                        <li><a href="<?php echo 'contact.php'; ?>">CONTATO</a></li>
                        <li><a href="<?php echo 'service.php'; ?>">SERVIÇOS & AGENDAMENTOS</a></li>


                            <?php
                            if (!empty($_SESSION['id'])) {
                                if ($_SESSION['nivel'] == 1) {
                                    echo '<li class = "dropdown">
                                                       <a href="admin/index.php">| USER: ' . $_SESSION['email'] . '</a>
                                                   </li>';
                                    echo '<li class = "dropdown">
                                                       <a href="sair.php">SAIR</a>
                                                   </li>';
                                } else {
                                    echo '<li class = "dropdown">
                                                       <a href="admin/atualizar_fornecedor.php">' . $_SESSION['email'] . '</a>
                                                   </li>';
                                    echo '<li class = "dropdown">
                                                       <a href="sair.php">Sair</a>
                                                   </li>';
                                }
                            } else {
                                echo '<li class = "dropdown">
                                                   <a href="admin/login.php">Login</a>
                                               </li>';
                            }
                            ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!-- End Main Header -->