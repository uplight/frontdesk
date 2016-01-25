<?php

    $img='data/images/directories/';
    $file ='data/directories/';
    $com ='data/com/';

    $img1 = $library->imageDir('Kiosk and Mobile');
    $file1 = $library->textDir('Building');

    $img2 = $library->imageDir('Structure');
    $file2 = $library->textDir('What is');

    $img3 = $library->imageDir('Information');
    $file3 = $library->textDir('Information');

    $img4 = $library->imageDir('Color Picker');
    $file4 = $library->textDir('Brand Colors');

    $file5 = $library->textDir('handoff');

    $img6 = $library->imageDir('RSS');
    $file6 = $library->textDir('Messaging');


    $file7 = $library->textDir('CMS');

    $file8 = $library->textDir('Edit');

    $file9 = $library->textDir('Categories');

    $file10 = $library->textDir('Appearance');

    $file11 = $library->textDir('Info Pages');

    $file12 = $library->textDir('Import Export');

    $file13 = $library->text('Techical');

?>

<div class="row" id="Building-Directories">
    <div class="col-lg-12">
        <h1 class="page-header">Building Directories
            <small>Products</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a>
            </li>
            <li><a href="Products.php">Products</a>
            </li>
            <li class="active">Building Directories</li>
        </ol>
    </div>
</div>


<section class="row">
    <div class="col-md-6">

        <img class="img-responsive" src="<?= $img1;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file1);?>
    </div>

</section>
<br/>
<hr/>
<br/>
<section class="row">


    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img2;  ?>" />
    </div>

    <div class="col-md-6">
        <?php include($file2);?>
    </div>


</section>
<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img3;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file3);?>
    </div>

</section>
<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img4;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file4);?>
    </div>

</section>
<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file5);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-6">
        <img class="img-responsive" src="<?= $img6;  ?>" />
    </div>
    <div class="col-md-6">
        <?php include($file6);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file7);?>
    </div>


</section>


<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file8);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file9);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file10);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file11);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file12);?>
    </div>

</section>

<br/>
<hr/>
<br/>
<section class="row">

    <div class="col-md-12">
        <?php include($file13);?>
    </div>

</section>