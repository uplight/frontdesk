<div class="panels-flat row">
    <?php  foreach($panels4 as $topic) { ?>
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="<?= (string)$topic->icon; ?>">
                        </i> <?= (string)$topic->title; ?></h4> </div>
                <div class="panel-body">
                    <div><p>
                            <?=  (string)$topic->description; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>