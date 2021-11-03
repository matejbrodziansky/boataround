<?php

class Parser{

    protected static $url;
    protected static $task_model;
    public static $response;

    public function __construct($url = null)
    {
        if($url){
            self::$url = $url;
       }
       
    }

    public static function init(){
        return new self(self::$url);
    }

    public function setURL($url){
        self::$url = $url;
        return $this;
    }

    private function getParams(){
        $params = [
            'destinations' => 'zadar-1',
            'category' => 'sailing-yacht',
            'checkIn' => '2022-06-04',
            'checkOut' => '2022-06-11',
            'lang' => 'en_EN',
            'sort' => 'rank',
            'currency' => 'EUR',
            'reviewScore' => '7-',
            'loggedIn' => 0
        ];

        
        return http_build_query($params);
    }

    private function dumpMe($data){
            echo '<pre>';
            print_r($data);
            echo '</pre>';
            exit;
    }

    public function getData($dump = false){

        $data = json_decode(file_get_contents(self::$url.$this->getParams()),true);

        if(isset($data['data']) && !empty($data['data'])){
            if($dump){
                $this->dumpMe($data['data']);
            }

            $this->response = $data['data'];
            
        }
           
        return $this;
        
    }
}

Parser::init()
    ->setUrl('https://api.boataround.com/v1/search?');