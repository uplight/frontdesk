<?php
include('comps/common.php');
include('comps/nav.php');
 include('comps/allProjects.php');
 $projects = new Projects($library);
?>
<div class="container">
    <div id="quote-online">
    <h1>Online quote</h1>
    <?php
    include('data/Options.html');
/*
            $xml = simplexml_load_file('data/Options.html');
            $xsec = $xml->xpath("//section");


            foreach( $xsec as $item){
            $title = str_replace(' ','-',(string)$item->h4);
            $lis = $item->ul->a;
            foreach( $lis as $a){
            $a['href'] = 'Options.php?title='.$title.'&option='.str_replace(' ','-',(string)$a);
            }

            }
            echo $xml->asXML();

*/

    ?>
    </div>
    <?php  include('comps/contactForm.php'); ?>
    <div class="media-row">
        <h2>Areas</h2>
        <?php
                //include('comps/allProjects.php');
               /// $projects = new Projects($library);
                $items = $projects->getAreas();
        foreach($items as $item) echo $library->renderItem($item)
        ?>
    </div>
    <div class="panels-flat">
        <?php

                    $items = $projects->getIntro();
        foreach($items as $item) echo $library->renderItem($item);
        ?>
    </div>
</div>
<script  src="js/parse-section.js"></script>
<script  src="js/quote-online.js"></script>
<?php include "comps/footer.php"; ?>

