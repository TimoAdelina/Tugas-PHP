<?php
// memanggil dan memproses file bagian atas
include_once 'top.php';
// memnaggil dan memproses file bagian menu
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <?php 
            error_reporting(0);
            // aloritma menangkap url agar masuk dalam index
            $url=$_GET['url'] ;
            if ($url=='dashboard'){
                include_once 'dashboard.php';
            } else if(!empty($url)){
                include_once ''.$url .'.php';
            }else {'dashboard.php';}
            ?>
        </div>
    </main>
</div>
<?php
// ini memaanggil file  bagian footer
include_once 'bottom.php';
 ?>