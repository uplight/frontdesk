<div  class="media3">
    <style>
        .media3 .description{
            height: 80px;
            overflow: hidden;
        }

    </style>
    <?php $i=0; foreach($media3 as $topic) { ?>
       <!-- <div class="<?/*=($i%3);*/?>">-->
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                  <i class="fa fa-circle fa-stack-2x text-success"></i>
                                  <i class="<?= (string)$topic->icon; ?> fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?= (string)$topic->title; ?></h4>
                        <p class="description"> <?=  substr((string)$topic->description,0,100); ?> ...</p>
                    </div>
                </div>
            </div>
       <!-- </div>-->
    <? $i++; } ?>
</div>