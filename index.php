<?php
include ("header.php");
?>
<style>
    .title{
        text-align: center;
        font-family: "Times New Roman", Times, serif;
        color: #528265;
        font-size: 4vw;
    }
    .title2{
        text-align: center;
        font-family: "Times New Roman", Times, serif;
        color: #528265;
        font-size: 3vw;
    }

</style>
    <!-- <div class="container">
        <img src="images/logo/logo-solo.png" alt="" class="img-fluid mx-auto d-block" style="width: 70%">
    </div> -->

<section style="min-height: 450px;">
    <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
    ?>
    
</section>


<?php
include ("footer.php");
?>