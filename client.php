<?php
include 'server.php';

class Client {


    public function __construct()
    {

        $params = array(
            'location' => 'http://localhost/soap/server.php',
            'uri' => 'urn://localhost/soap/server.php',
            'trace' => 1
        );
        $this->instance = new SoapClient(NULL, $params);

        $auth_params = new StdClass();
        $auth_params->username ='webwerks';
        $auth_params->password = 'roota';

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader('Neostore', 'authenticate', $header_params, false);
        $this->instance->__setSoapHeaders(array($header));

    }



    public function getName($id_array){
        return $this->instance->__soapCall('getStudentName', $id_array);
    }

}

$client = new Client();
