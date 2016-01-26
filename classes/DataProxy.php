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

    private function loadData($ar){
        $data=array();
        foreach($ar as $url){
            if(file_exists($url)) $data[] = simplexml_load_file($url);
            else echo 'error load url '.$url;
        }
        return $data;
    }
    public function loadMain(){
        $urls = $this->addLocation($this->settings->main);
        return $this->loadData($urls);
    }
    public function loadOthers(){
        $urls = $this->addLocation($this->settings->others);
        return $this->loadData($urls);
    }
}



