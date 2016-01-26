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
                Welcome to Building directories Pro <a href="Contact?Request-Demo#Contact-Form" class="btn btn-success pull-right">Request Demo</a>
            </h1>
        </div>

        <?php
        $panels3 = $main;
        include "comps/panels3.php";

        ?>
        <hr/>
        <br/>
        <div>
            <div class="col-lg-12">
            <h2>Main Features</h2>
            </div>
            <br/>
            <?
            $others = $d->loadOthers();
          //  $panels4=$others;
          //  include "comps/panels4.php";
            $media3=$others;
            include "comps/media3.php";

            ?>


        </div>

    </div>
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <p>
                    Turnkey solution that includes everything you need to extend your business with modern technology.
                    <br> <i> Connecting the world together.</i>

                </p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="Contact?Ask-question#Contact-Form">Ask a question</a>
            </div>
        </div>
    </div>

    <?php
        include "comps/footer.php";
     ?>
   <!-- <script  src="js/parse-section.js"></script>-->
</body>

</html>

