<?php
/**
 * Created by Marcin.
 * Date: 02.11.2019
 * Time: 22:26
 */

namespace Mrcnpdlk\Api\PocztaTracking;

use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Sprawdz;
use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Wersja;
use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Witaj;
use Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylke;
use Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkePl;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\WsSecurity\WsSecurity;

class Api
{
    /**
     * @var \Mrcnpdlk\Api\PocztaTracking\Config
     */
    private $oConfig;
    /**
     * @var Sprawdz
     */
    private $oHandlerSprawdz;
    /**
     * @var Wersja|null
     */
    private $oHandlerWersja;
    /**
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Witaj|null
     */
    private $oHandlerWitaj;
    /**
     * @var array
     */
    private $tSoapOptions;

    /**
     * Api constructor.
     *
     * @param \Mrcnpdlk\Api\PocztaTracking\Config $oConfig
     *
     * @throws \Mrcnpdlk\Lib\ConfigurationException
     */
    public function __construct(Config $oConfig = null)
    {
        $this->oConfig = $oConfig ?? new Config();

        $this->tSoapOptions = [
            AbstractSoapClientBase::WSDL_URL      => 'https://tt.poczta-polska.pl/Sledzenie/services/Sledzenie?wsdl',
            AbstractSoapClientBase::WSDL_TRACE    => true,
            AbstractSoapClientBase::WSDL_CLASSMAP => Sdk\ClassMap::get(),
        ];
    }

    /**
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return string|null
     */
    public function getHello(): ?string
    {
        $res = $this->getHandlerWitaj()->witaj(new Sdk\StructType\Witaj('Anonymous'));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerWitaj()->getLastError());
        }

        return $res->getReturn();
    }

    /**
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return string|null
     */
    public function getVersion(): ?string
    {
        $res = $this->getHandlerWersja()->wersja();
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerWersja()->getLastError());
        }

        return $res->getReturn();
    }

    /**
     * @param string $trackingNr
     *
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
     */
    public function track(string $trackingNr): Sdk\StructType\Przesylka
    {
        $res = $this->getHandlerSprawdz()->sprawdzPrzesylke(new SprawdzPrzesylke($trackingNr));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
        }

        return $res->getReturn();
    }

    /**
     * @param string $trackingNr
     *
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
     */
    public function trackPL(string $trackingNr): Sdk\StructType\Przesylka
    {
        $res = $this->getHandlerSprawdz()->sprawdzPrzesylkePl(new SprawdzPrzesylkePl($trackingNr));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
        }

        return $res->getReturn();
    }

    /**
     * @param array $tErr
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Exception
     */
    protected function getExceptionObject(array $tErr): Exception
    {
        /** @var \Throwable $oErr */
        $oErr = reset($tErr);
        if ($oErr instanceof \SoapFault) {
            return new Exception($oErr->getMessage(), 1, $oErr);
        }

        return new Exception('Soap call exception', 1, $oErr);
    }

    /**
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Sprawdz
     */
    protected function getHandlerSprawdz(): Sprawdz
    {
        if (null === $this->oHandlerSprawdz) {
            $this->oHandlerSprawdz = new Sprawdz($this->tSoapOptions);
            $this->oHandlerSprawdz
                ->getSoapClient()
                ->__setSoapHeaders(WsSecurity::createWsSecuritySoapHeader(
                    $this->oConfig->getLogin(),
                    $this->oConfig->getPassword(),
                    false))
            ;
        }

        return $this->oHandlerSprawdz;
    }

    /**
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Wersja
     */
    protected function getHandlerWersja(): Wersja
    {
        if (null === $this->oHandlerWersja) {
            $this->oHandlerWersja = new Wersja($this->tSoapOptions);
            $this->oHandlerWersja
                ->getSoapClient()
                ->__setSoapHeaders(WsSecurity::createWsSecuritySoapHeader(
                    $this->oConfig->getLogin(),
                    $this->oConfig->getPassword(),
                    false))
            ;
        }

        return $this->oHandlerWersja;
    }

    /**
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Witaj
     */
    protected function getHandlerWitaj(): Witaj
    {
        if (null === $this->oHandlerWitaj) {
            $this->oHandlerWitaj = new Witaj($this->tSoapOptions);
            $this->oHandlerWitaj
                ->getSoapClient()
                ->__setSoapHeaders(WsSecurity::createWsSecuritySoapHeader(
                    $this->oConfig->getLogin(),
                    $this->oConfig->getPassword(),
                    false))
            ;
        }

        return $this->oHandlerWitaj;
    }
}
