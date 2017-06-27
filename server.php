<?php

class Server {

    public static function authenticate($header_params){
        if($header_params->username =='webwerks' && $header_params->password =='root') return true;
        else throw new SOAPFault('Wrong username/password combination', 401);
    }


    public function __construct()
    {

    }

    public function getStudentName($id_array){

       //return  'Sam';


        return '<?xml version="1.0"?>
                    <soap:Envelope xmlns:soap="http://www.w3.org/2001/12/soap-envelope" soap:encodingStyle="http://www.w3.org/2001/12/soap-encoding">
                  <soap:Body xmlns:m="http://www.example.org/stock">
                    <m:GetStockPrice>
                      <m:StockName>IBM</m:StockName>
                      <m:StockValue>500</m:StockValue>
                    </m:GetStockPrice>
                  </soap:Body>
                </soap:Envelope>';
    }
}

$params = array(
    'uri' =>'localhost/soap/server.php',
);

$server = new SoapServer(NULL , $params);
$server->setClass('server');
$server->handle();


