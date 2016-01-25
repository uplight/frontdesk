<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Portfolio
            <small>JAVASCRIPT</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="all_col.php">Home</a>
            </li>
            <li class="active">Portfolio</li>
        </ol>
    </div>
</div>
<style type="text/css">
    section p{
        display:none;
    }
</style>
<!-- Project One -->
<section class="row item">
    <?php

        $projectName='Building Directories';
        $href='Portfolio.php?'.$projectName;
        $projectImage =  'data/images/'.findFile('Directories 700', $images);;
        $projectFile = 'data/directories/'.findFile($projectName, $directories);
      // echo '$projectFile   '.$projectImage;
    ?>

    <div class="col-md-7">
        <a href="<?=$href;?>">
            <img class="img-responsive img-hover" src="<?=$projectImage; ?>" alt="<?=$projectName; ?>">
        </a>
    </div>
    <div class="col-md-5">
        <?php
        include ($projectFile);
        ?>
        <br/>
        <a class="btn btn-primary" href="<?=$href;?>">View Project</i></a>
    </div>
</section>
<!-- /.row -->

<hr>

<!-- Project Two -->
<div class="row">
    <div class="col-md-7">
        <a href="portfolio-item.html">
            <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Two</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
        <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Three -->
<div class="row">
    <div class="col-md-7">
        <a href="portfolio-item.html">
            <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Three</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
        <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
    </div>
</div>
<!-- /.row -->

<hr>

<!-- Project Four -->
<div class="row">

    <div class="col-md-7">
        <a href="portfolio-item.html">
            <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Project Four</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
        <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
    </div>
</div>
