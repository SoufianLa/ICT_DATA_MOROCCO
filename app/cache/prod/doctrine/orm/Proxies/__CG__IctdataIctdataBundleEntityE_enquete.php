<?php

namespace Proxies\__CG__\Ictdata\IctdataBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class E_enquete extends \Ictdata\IctdataBundle\Entity\E_enquete implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'id', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eDate', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesFixe', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesMobile', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusMobile', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusMobileInternet', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusSmartphone', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesequOrdinateur', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesOrdinateurBureau', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesOrdinateurPc', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesOrdinateurTablette', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesInternetFixe', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesInternetMobile', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesInternetMobileFixe', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusInternet', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eNbrInternautes'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'id', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eDate', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesFixe', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesMobile', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusMobile', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusMobileInternet', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusSmartphone', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesequOrdinateur', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesOrdinateurBureau', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesOrdinateurPc', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesOrdinateurTablette', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesInternetFixe', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesInternetMobile', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eMenagesInternetMobileFixe', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eIndividusInternet', '' . "\0" . 'Ictdata\\IctdataBundle\\Entity\\E_enquete' . "\0" . 'eNbrInternautes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (E_enquete $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEDate($eDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEDate', [$eDate]);

        return parent::setEDate($eDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEDate', []);

        return parent::getEDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesFixe($eMenagesFixe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesFixe', [$eMenagesFixe]);

        return parent::setEMenagesFixe($eMenagesFixe);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesFixe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesFixe', []);

        return parent::getEMenagesFixe();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesMobile($eMenagesMobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesMobile', [$eMenagesMobile]);

        return parent::setEMenagesMobile($eMenagesMobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesMobile', []);

        return parent::getEMenagesMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setEIndividusMobile($eIndividusMobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEIndividusMobile', [$eIndividusMobile]);

        return parent::setEIndividusMobile($eIndividusMobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEIndividusMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEIndividusMobile', []);

        return parent::getEIndividusMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setEIndividusMobileInternet($eIndividusMobileInternet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEIndividusMobileInternet', [$eIndividusMobileInternet]);

        return parent::setEIndividusMobileInternet($eIndividusMobileInternet);
    }

    /**
     * {@inheritDoc}
     */
    public function getEIndividusMobileInternet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEIndividusMobileInternet', []);

        return parent::getEIndividusMobileInternet();
    }

    /**
     * {@inheritDoc}
     */
    public function setEIndividusSmartphone($eIndividusSmartphone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEIndividusSmartphone', [$eIndividusSmartphone]);

        return parent::setEIndividusSmartphone($eIndividusSmartphone);
    }

    /**
     * {@inheritDoc}
     */
    public function getEIndividusSmartphone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEIndividusSmartphone', []);

        return parent::getEIndividusSmartphone();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesequOrdinateur($eMenagesequOrdinateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesequOrdinateur', [$eMenagesequOrdinateur]);

        return parent::setEMenagesequOrdinateur($eMenagesequOrdinateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesequOrdinateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesequOrdinateur', []);

        return parent::getEMenagesequOrdinateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesOrdinateurBureau($eMenagesOrdinateurBureau)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesOrdinateurBureau', [$eMenagesOrdinateurBureau]);

        return parent::setEMenagesOrdinateurBureau($eMenagesOrdinateurBureau);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesOrdinateurBureau()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesOrdinateurBureau', []);

        return parent::getEMenagesOrdinateurBureau();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesOrdinateurPc($eMenagesOrdinateurPc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesOrdinateurPc', [$eMenagesOrdinateurPc]);

        return parent::setEMenagesOrdinateurPc($eMenagesOrdinateurPc);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesOrdinateurPc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesOrdinateurPc', []);

        return parent::getEMenagesOrdinateurPc();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesOrdinateurTablette($eMenagesOrdinateurTablette)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesOrdinateurTablette', [$eMenagesOrdinateurTablette]);

        return parent::setEMenagesOrdinateurTablette($eMenagesOrdinateurTablette);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesOrdinateurTablette()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesOrdinateurTablette', []);

        return parent::getEMenagesOrdinateurTablette();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesInternetFixe($eMenagesInternetFixe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesInternetFixe', [$eMenagesInternetFixe]);

        return parent::setEMenagesInternetFixe($eMenagesInternetFixe);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesInternetFixe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesInternetFixe', []);

        return parent::getEMenagesInternetFixe();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesInternetMobile($eMenagesInternetMobile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesInternetMobile', [$eMenagesInternetMobile]);

        return parent::setEMenagesInternetMobile($eMenagesInternetMobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesInternetMobile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesInternetMobile', []);

        return parent::getEMenagesInternetMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setEMenagesInternetMobileFixe($eMenagesInternetMobileFixe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEMenagesInternetMobileFixe', [$eMenagesInternetMobileFixe]);

        return parent::setEMenagesInternetMobileFixe($eMenagesInternetMobileFixe);
    }

    /**
     * {@inheritDoc}
     */
    public function getEMenagesInternetMobileFixe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEMenagesInternetMobileFixe', []);

        return parent::getEMenagesInternetMobileFixe();
    }

    /**
     * {@inheritDoc}
     */
    public function setEIndividusInternet($eIndividusInternet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEIndividusInternet', [$eIndividusInternet]);

        return parent::setEIndividusInternet($eIndividusInternet);
    }

    /**
     * {@inheritDoc}
     */
    public function getEIndividusInternet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEIndividusInternet', []);

        return parent::getEIndividusInternet();
    }

    /**
     * {@inheritDoc}
     */
    public function setENbrInternautes($eNbrInternautes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setENbrInternautes', [$eNbrInternautes]);

        return parent::setENbrInternautes($eNbrInternautes);
    }

    /**
     * {@inheritDoc}
     */
    public function getENbrInternautes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getENbrInternautes', []);

        return parent::getENbrInternautes();
    }

}