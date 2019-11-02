<?php

namespace Mrcnpdlk\Api\PocztaTracking\Sdk;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return string[]
     */
    final public static function get()
    {
        return [
            'maksymalnaLiczbaPrzesylekResponse' => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\MaksymalnaLiczbaPrzesylekResponse',
            'sprawdzPrzesylkePl'                => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkePl',
            'sprawdzPrzesylkePlResponse'        => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkePlResponse',
            'sprawdzPrzesylki'                  => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylki',
            'sprawdzPrzesylkiResponse'          => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiResponse',
            'sprawdzPrzesylkiPl'                => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiPl',
            'sprawdzPrzesylkiPlResponse'        => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiPlResponse',
            'sprawdzPrzesylkiOdDo'              => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiOdDo',
            'sprawdzPrzesylkiOdDoResponse'      => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiOdDoResponse',
            'sprawdzPrzesylkiOdDoPl'            => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiOdDoPl',
            'sprawdzPrzesylkiOdDoPlResponse'    => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkiOdDoPlResponse',
            'wersjaResponse'                    => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\WersjaResponse',
            'witaj'                             => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Witaj',
            'witajResponse'                     => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\WitajResponse',
            'sprawdzPrzesylke'                  => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylke',
            'sprawdzPrzesylkeResponse'          => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SprawdzPrzesylkeResponse',
            'Przesylka'                         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Przesylka',
            'DanePrzesylki'                     => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\DanePrzesylki',
            'Procedura'                         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Procedura',
            'ListaPrzesylekPowiazanych'         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\ListaPrzesylekPowiazanych',
            'PrzesylkaPowiazana'                => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\PrzesylkaPowiazana',
            'Jednostka'                         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Jednostka',
            'SzczDaneJednostki'                 => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\SzczDaneJednostki',
            'GodzinyPracy'                      => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\GodzinyPracy',
            'GodzinyZUwagami'                   => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\GodzinyZUwagami',
            'ListaZdarzen'                      => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\ListaZdarzen',
            'Zdarzenie'                         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Zdarzenie',
            'Przyczyna'                         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Przyczyna',
            'Komunikat'                         => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\Komunikat',
            'ListaPrzesylek'                    => '\\Mrcnpdlk\\Api\\PocztaTracking\\Sdk\\StructType\\ListaPrzesylek',
        ];
    }
}
