<div class="panels-flat row">
    <?php
    $panels3 = array('data/ImproveService.xml','data/ImproveDesign.xml','data/CorrespondTechnology.xml');
    foreach($panels3 as $url) {$topic = simplexml_load_file($url); ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa  fa-fw <?= (string)$topic->icon; ?>">
                        </i> <?= (string)$topic->h1; ?></h4> </div>
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