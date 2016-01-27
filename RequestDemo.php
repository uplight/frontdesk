<?php
include 'classes/DataProxy.php';
$d=new DataProxy();
include "comps/header.php";
?>
<body id="RequestDemo">
<?php include "comps/nav.php"; ?>
<div class="container">
    <div class="row">


            <div class="col-md-7 col-xs-12">
               <h2>Get Instant Access</h2>
                <h5>Set your kiosks up and running</h5>
                <div>
                    <img src="data/images/KiosksGroup.jpg">

                </div>

            </div>
            <div class="col-md-5 col-xs-12">
                <?php include "comps/requestDemo.php"; ?>
            </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <hr/>
        <br/>
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

<?php
include "comps/footer.php";
?>
</body>
