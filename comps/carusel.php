<header id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel" data-interval="5000">

    <? $images = json_decode(file_get_contents('data/carusel.json')); ?>

    <ol id="caruselIndicator" class="carousel-indicators">
        <?php $i=0; foreach($images as $row) {   ?>
        <li data-target="#myCarousel" data-slide-to="<?=$i;?>" class="<?= ($i?'':'active'); ?>"></li>
        <?php $i++; } ?>
    </ol>

    <div id="CaruselInner" class="carousel-inner">
        <?php $i=0; foreach($images as $row) {   ?>
            <div class="item <?=($i?'':'active');?>">
                <div class="fill" style="background-image:url('<?=$row->src?>');"></div>
                <div class="carousel-caption">
                    <h2><?= $row->name?></h2>
                </div>
            </div>
        <?php $i++; } ?>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>