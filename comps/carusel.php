<header id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol id="caruselIndicator" class="carousel-indicators">
        <?php $i=0; foreach($carousel as $row) {   ?>
        <li data-target="#myCarousel" data-slide-to="<?=$i;?>" class="<?= ($i?'':'active'); ?>"></li>
        <?php $i++; } ?>
    </ol>

    <div id="CaruselInner" class="carousel-inner">
        <?php $i=0; foreach($carousel as $row) {   ?>
            <div class="item <?=($i?'':'active');?>">
                <div class="fill" style="background-image:url('<?=(string)$row->image?>');"></div>
                <div class="carousel-caption">
                    <h2><?= $row->title?></h2>
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