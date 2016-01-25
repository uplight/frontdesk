<div data-id="breadcrumb"><h1>Services</h1><h2>All Services</h2><a href="index.php">Home</a></div>
<!-- Image Header -->
<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
    </div>
</div>
<div class="panels-row">
    <h2>Main Services</h2>
        <?php
            include('comps/allProjects.php');
			
            $projects = new Projects($library);
            $items = $projects->getServices1();
            foreach($items as $item) echo $library->renderItem($item);
        ?>
</div>

<div class="tabs-row">
    <h2>Included</h2>
    <?php

            $items = $projects->getPlugins();
            foreach($items as $item) echo $library->renderItem($item);
    ?>
</div>

<div class="media-row">
    <h2>Areas</h2>
    <?php
            $items = $projects->getAreas();
            foreach($items as $item) echo $library->renderItem($item)
    ?>
</div>

