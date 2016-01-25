<!doctype html>
<head>
<title>UPLIGHT | Mobile Applications | Kiosk Software | CMS | Web Applications </title>
    <?php include "comps/common.php"; ?>
</head>
<body id="home">
    <?php include "comps/nav.php"; ?>
    <?php include "comps/carusel.php"; ?>

    <div class="container">

        <div class="col-lg-12" id="WelcomeToWeb">
            <h1 class="page-header">
                Welcome to WEB Technology 2015
            </h1>
        </div>


        <div class="panels-flat">
            <?php
                include('comps/allProjects.php');
                $projects = new Projects($library);
                $items = $projects->getIntro();
                foreach($items as $item) echo $library->renderItem($item);
            ?>
        </div>
       <!-- <div class="imgs-c3m2s">
            <h2>Portfolio Heading</h2>
            <?php
                $items = $projects->getAllprojects();
                foreach($items as $item) echo $library->renderImage($item);
            ?>
        </div>-->
        <div class="image-text text-first">
            <?php
                $item=new stdClass();
                $item->tmpl='item-service';
                $item->topic='Modern Features';
                $item->text=$library->text('Modern Features');
                $item->image=$library->fromImages('Modern Features');;
                $item->href = 'Products.php';
                echo $library->renderItem($item);
             ?>
           <!-- <section>
                <h1>Modern Features</h1>
                <img src="<?php echo $library->fromImages('Modern Features');?>" />
                <div>
                    <?php echo file_get_contents($library->text('Modern Features')); ?>
                </div>
            </section>-->
        </div>




        <div class="panels-row">
            <h2>Main Services</h2>
            <?php
          //  include('comps/allProjects.php');
           // $projects = new Projects($library);
            $items = $projects->getServices1();
            foreach($items as $item) echo $library->renderItem($item);
            ?>
        </div>

    </div>

    <?php
        include('data/com/Call to Action.html');
     ?>

    <?php
        include "comps/footer.php";
     ?>
    <script  src="js/parse-section.js"></script>
</body>

</html>

