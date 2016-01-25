<?php
if ($handle = opendir('./data')) {

    while (false !== ($entry = readdir($handle))) {

        //if ($entry != "." && $entry != "..") {
        $info=pathinfo($entry);
            if($info['extension'] =='html') echo $info['filename'].'<br/>';
       // }
    }

    closedir($handle);
}
 ?>