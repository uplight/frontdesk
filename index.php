<?
session_start();
?>
<!doctype html>
<head>
    <?php
    include 'classes/DataProxy.php';
    $d=new DataProxy();
    $main = $d->loadMain();
    include "comps/header-meta.php";
    ?>
</head>
<body id="home">
    <?php include "comps/nav.php"; ?>
    <?php
    $carousel = $main;
    include "comps/carusel.php";
    ?>
    <div class="container">

        <div class="col-lg-12" id="WelcomeToWeb">
            <h1 class="page-header">
                Welcome to Building directories Pro
            </h1>
        </div>

        <?php
        $panels3 = $main;
        include "comps/panels3.php";

        ?>
        <div class="panels-row">
            <h2>Main Features</h2>


        </div>

    </div>

    <?php
       /* include('data/com/Call to Action.html');*/
     ?>

    <?php
        include "comps/footer.php";
     ?>
   <!-- <script  src="js/parse-section.js"></script>-->
</body>

</html>

