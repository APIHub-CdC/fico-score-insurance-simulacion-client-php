<?php

namespace FicoScoreInsuranceSimulacion\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack;

use \FicoScoreInsuranceSimulacion\Client\Configuration;
use \FicoScoreInsuranceSimulacion\Client\ApiException;
use \FicoScoreInsuranceSimulacion\Client\ObjectSerializer;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \FicoScoreInsuranceSimulacion\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \FicoScoreInsuranceSimulacion\Client\Api\FicoScoreInsuranceSimulacionApi($client,$config);
    }
    
    public function testGetFicoscore()
    {
        $x_api_key = "your_api_key";

        $requestPersona = new \FicoScoreInsuranceSimulacion\Client\Model\Persona();
        $requestDomicilio = new \FicoScoreInsuranceSimulacion\Client\Model\Domicilio();

        $requestDomicilio->setDireccion(null);
        $requestDomicilio->setColonia(null);
        $requestDomicilio->setCiudad(null);
        $requestDomicilio->setCodigoPostal(null);
        $requestDomicilio->setMunicipio(null);
        $requestDomicilio->setEstado($requestDomicilio::ESTADO_AGS);

        
    
        $requestPersona->setPrimerNombre("ROBERTO");
        $requestPersona->setSegundoNombre(null);
        $requestPersona->setApellidoPaterno("SAHAGUN");
        $requestPersona->setApellidoMaterno("ZARAGOZA");
        $requestPersona->setApellidoAdicional(null);
        $requestPersona->setFechaNacimiento("2001-01-01");
        $requestPersona->setRfc(null);
        $requestPersona->setCurp(null);
        $requestPersona->setDomicilio($requestDomicilio);

        try {
            $result = $this->apiInstance->getFicoscore($x_api_key, $requestPersona);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getFicoscore: ', $e->getMessage(), PHP_EOL;
        }
    }
}
