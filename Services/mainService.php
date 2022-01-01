<?php
class mainService{

    public $params;
    public function __construct($params = [])
    {  
        $this->params = $params;
    }

    public function returnTime()
    {
        
        SERVICE::RESPONSE([

            "code" => "200",
            "msg" => $this->language->time,
            "time" =>  strval(date('Y-m-d H:i:s') )

        ]);
    }


}

?>