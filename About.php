<!doctype html>
<head>
    <title>UPLIGHT</title>
    <?php include "comps/common.php"; ?>
</head>
<body id="home">
<?php
include "comps/nav.php";
include "comps/carusel.php";
?>

<div class="container">
    <div class="image-text">
        <?php
            $item=new stdClass();
            $item->topic='IT for everyone';
            $item->text=$library->text('About');
            $item->image=$library->fromImages('Everyone');;
            $item->href = 'Products.php';
            echo $library->renderItem($item);
        ?>
    </div>
    <?php
       // include "comps/customers.php";
     ?>

</div>
<script  src="js/parse-section.js"></script>
<?php include "comps/footer.php"; ?>
</body>
</html>