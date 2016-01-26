<?
class DataProxy{
    var $settings;
    var $main;
    var $others;
    function DataProxy(){
        $this->settings = json_decode(file_get_contents('data/content.json'));
    }

    private function addLocation($ar){
        $out=array();
        for($i=0,$n=count($ar);$i<$n;$i++) $out[]='data/'.$ar[$i].'.xml';
        return $out;
    }
   private function getMain(){
       $main = $this->settings->main;
       return $this->addLocation($main);

    }
    public function getOters(){
        $ar = $this->settings->others;
        return $this->addLocation($ar);
    }

    public function loadMain(){
        $urls= $this->getMain();
        $data=array();
        foreach($urls as $url)$data[] = simplexml_load_file($url);
        return $data;
    }
}



