<?php
session_start();
//$_SESSION['ip']=$_SERVER['REMOTE_ADDR'];
//$base=$_SERVER['DOCUMENT_ROOT'];
//$service=$_SERVER['PHP_SELF'];
$topic =!empty($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:0;
//$configXML=simplexml_load_file('data/config.xml');
//$comps=array();
//$data=array();
//$images = scandir('data/images');
//$directoriesImg = scandir('data/images/directories');
//$directories = scandir('data/directories');
//$common = scandir('data/com');

class Library{
    var $images;
    var $imagesDir;
    var $com;
    var $dir;
    var $portfolio;
    public function getSection($item){
        $text = file_get_contents($item->text);
       return  '<section data-tmpl="'.$item->tmpl.'">
        <h4>'.$item->topic.'</h4>
        <div>'.$text.'</div>
        <img src="'.$item->image.'"/>
        <a href="'.$item->href.'">More</a>
        </section>';
    }

    public function renderItem($item){
		$text = file_get_contents($item->text);
		return  '<section>
			<h4>'.$item->topic.'</h4>
			<div>'.$text.'</div>'.(isset($item->image)?'<img src="'.$item->image.'" title="'.$item->topic.'" />':'').(isset($item->icon)?'<icon>'.$item->icon.'</icon>':'').'<a href="'.$item->href.'">More</a></section>';
    }
	
	 public function renderImage($item){
		return  '<a '.(isset($item->href)?('href="'.$item->href.'"'):'').'  ><img src="'.$item->image.'" alt="'.$item->topic.'" title="'.$item->topic.'"  /></a>';		
    }

     public function fromImages($text){
            if(!$this->images)$this->images = scandir('data/images');
            foreach($this->images as $file)  if(strpos($file,$text)!==false)return 'data/images/'.$file;
        return 0;
     }
	 
    public function image($text){
		return $this->fromImages($text);
    }
	
    public function imageDir($text){
			if(!$this->imagesDir)$this->imagesDir = scandir('data/images/directories');
			foreach($this->imagesDir as $file)  if(strpos($file,$text)!==false)return 'data/images/directories/'.$file;
        return 0;
    }
	
    public function textCom($text){
			if(!$this->com)$this->com = scandir('data/com');
			foreach($this->com as $file)  if(strpos($file,$text)!==false)return 'data/com/'.$file;
        return 0;
    }
	
    public function text($name){
		return $this->textCom($name);
    }
	
    public function textPortfolio($word){
			if(!$this->portfolio)$this->portfolio = scandir('data/portfolio');
			foreach($this->portfolio as $file)  if(strpos($file,$word)!==false)return 'data/portfolio/'.$file;
        return 0;

    }
    public function textDir($text){
			if(!$this->dir)$this->dir = scandir('data/directories');
			foreach($this->dir as $file)  if(strpos($file,$text)!==false)return 'data/directories/'.$file;
        return 0;
    }


 }

$library = new Library();
/*
function searchFiles($words,$files){
    $words=explode(' ',$words);
    if(count($words)==1)$words[]='.';
    $out=array();
    foreach($files as $file) if(strpos($file,$words[0]) && strpos($file,$words[1])) $out[]=$file;
    return $out;
}

function findFile($word,$files){
    foreach($files as $file)  if(strpos($file,$word)!==false)return $file;
        return 0;
}
*/

?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Develop web applications and CMS on cloud solution using OWASP best practices security contror. Software as Service SaaS for Mobile Application work on Android, iOS, Windows
 and Data Integration on user Interface level">
<meta name="author" content="">

<meta name="google-site-verification" content="bwbiF8sgNJJbW_SCet7eSBrI-HH6e8mO2CnWiSsf-VM" />
<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
<link href="css/modern-business.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cerulean/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/font-awesome.css" rel="stylesheet" type="text/css">-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/my.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js/libs/underscore-min.js"></script>
<script  src="js/libs/require.js"></script>
<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-13156281-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- End Google Analytics -->