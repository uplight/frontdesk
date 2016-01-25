<?php
include('comps/common.php');
include('comps/nav.php');
?>
<div id="online-quote">
<h1>Online quote</h1>
<?php

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

?>
</div>
<div class="media-row">
    <h2>Areas</h2>
    <?php
            include('comps/allProjects.php');
            $projects = new Projects($library);
            $items = $projects->getAreas();
    foreach($items as $item) echo $library->renderItem($item)
    ?>
</div>
<script  src="js/parse-section.js"></script>
<?php include "comps/footer.php"; ?>

