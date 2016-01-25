<!doctype html>
<head>
    <title>UPLIGHT</title>
    <?php
    include "comps/common.php";

     ?>
</head>
<body id="portfolio">
    <?php
    include "comps/nav.php";
    include "comps/carusel.php";
    ?>
<div class="container">
    <div data-id="breadcrumb"><h1>Portfolio</h1><h2>JAVASCRIPT</h2><a href="index.php">Home</a></div>
    <?php
        include "comps/allProjects.php";

        $projects = new Projects($library);
        $items = $projects->getAllProjects();
        foreach($items as $item){
             echo $library->getSection($item);
        }

        include "comps/related.php";
      ?>

</div>
    <script  src="js/parse-section.js"></script>
<?php include "comps/footer.php"; ?>
</body>
</html>