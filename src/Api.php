<?php
/**
 * Created by Marcin.
 * Date: 02.11.2019
 * Time: 22:26
 */

namespace Mrcnpdlk\Api\PocztaTracking;

use Mrcnpdlk\Api\PocztaTracking\Exception\NotFoundException;
use Mrcnpdlk\Api\PocztaTracking\Exception\SoapException;
use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Maksymalna;
use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Sprawdz;
use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Wersja;
use Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Witaj;
use Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylke;
use Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkePl;
use Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylki;
use Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\SprawdzPrzesylkiPl;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use WsdlToPhp\WsSecurity\WsSecurity;

class Api
{
    /**
     * @var \Mrcnpdlk\Api\PocztaTracking\Config
     */
    private $oConfig;
    /**
     * @var \Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Maksymalna
     */
    private $oHandlerMaksymalna;
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
     * sprawdzPrzesylke(String numer) – wymaga podania numeru przesyłki, zwraca informacje o danej przesyłce
     * w strukturze Przesylka – szczegółowe informacje o placówkach w atrybutach typu Jednostka nie są
     * generowane
     *
     * @param string $trackingNr
     *
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
     */
    public function checkShipment(string $trackingNr): Sdk\StructType\Przesylka
    {
        $res = $this->getHandlerSprawdz()->sprawdzPrzesylke(new SprawdzPrzesylke($trackingNr));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
        }

        $obj = $res->getReturn();

        if (null === $obj) {
            throw new NotFoundException(sprintf('Przesyłka o numerze %s nie została odnaleziona', $trackingNr));
        }
        $status = $obj->getStatus();

        if (0 !== $status) {
            switch ($status) {
                case -1:
                    throw new NotFoundException(sprintf('Przesyłka o numerze %s nie została odnaleziona', $trackingNr));
                case -2:
                    throw new Exception(sprintf('Numer przesyłki %s jest błędny', $trackingNr));
                case -99:
                default:
                    throw new Exception(sprintf('Nieznany bład'));
            }
        }

        return $obj;
    }

    /**
     * @param string $trackingNr
     *
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Przesylka
     */
    public function checkShipmentExt(string $trackingNr): Sdk\StructType\Przesylka
    {
        $res = $this->getHandlerSprawdz()->sprawdzPrzesylkePl(new SprawdzPrzesylkePl($trackingNr));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
        }

        $obj = $res->getReturn();

        if (null === $obj) {
            throw new NotFoundException(sprintf('Przesyłka o numerze %s nie została odnaleziona', $trackingNr));
        }
        $status = $obj->getStatus();

        if (0 !== $status) {
            switch ($status) {
                case -1:
                    throw new NotFoundException(sprintf('Przesyłka o numerze %s nie została odnaleziona', $trackingNr));
                case -2:
                    throw new Exception(sprintf('Numer przesyłki %s jest błędny', $trackingNr));
                case -99:
                default:
                    throw new Exception(sprintf('Nieznany bład'));
            }
        }

        return $obj;
    }

    /**
     * @param array $trackingNrs
     *
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat
     */
    public function checkShipments(array $trackingNrs): Sdk\StructType\Komunikat
    {
        $res = $this->getHandlerSprawdz()->sprawdzPrzesylki(new SprawdzPrzesylki($trackingNrs));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
        }

        $obj = $res->getReturn();

        if (null === $obj || null === $obj->getPrzesylki()) {
            throw new NotFoundException('Nie znaleziono przesyłek spełniających kryteria');
        }

        return $obj;
    }

    /**
     * @param array $trackingNrs
     *
     * @throws \Mrcnpdlk\Api\PocztaTracking\Exception
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\StructType\Komunikat
     */
    public function checkShipmentsExt(array $trackingNrs): Sdk\StructType\Komunikat
    {
        $res = $this->getHandlerSprawdz()->sprawdzPrzesylkiPl(new SprawdzPrzesylkiPl($trackingNrs));
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
        }

        $obj = $res->getReturn();

        if (null === $obj || null === $obj->getPrzesylki()) {
            throw new NotFoundException('Nie znaleziono przesyłek spełniających kryteria');
        }

        return $obj;
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
     * @return int
     */
    public function getMaxLimit(): int
    {
        $res = $this->getHandlerMaksymalna()->maksymalnaLiczbaPrzesylek();
        if (is_bool($res)) {
            throw $this->getExceptionObject($this->getHandlerSprawdz()->getLastError());
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
     * @param array $tErr
     *
     * @return \Mrcnpdlk\Api\PocztaTracking\Exception
     */
    protected function getExceptionObject(array $tErr): Exception
    {
        /** @var \Throwable $oErr */
        $oErr = reset($tErr);
        if (!$oErr instanceof \Throwable) {
            return new Exception('Unknown error');
        }
        if ($oErr instanceof \SoapFault) {
            return new SoapException($oErr->getMessage(), 1, $oErr);
        }

        return new Exception('Soap call exception', 1, $oErr);
    }

    /**
     * @return \Mrcnpdlk\Api\PocztaTracking\Sdk\ServiceType\Maksymalna
     */
    protected function getHandlerMaksymalna(): Maksymalna
    {
        if (null === $this->oHandlerMaksymalna) {
            $this->oHandlerMaksymalna = new Maksymalna($this->tSoapOptions);
            $this->oHandlerMaksymalna
                ->getSoapClient()
                ->__setSoapHeaders(WsSecurity::createWsSecuritySoapHeader(
                    $this->oConfig->getLogin(),
                    $this->oConfig->getPassword(),
                    false))
            ;
        }

        return $this->oHandlerMaksymalna;
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
