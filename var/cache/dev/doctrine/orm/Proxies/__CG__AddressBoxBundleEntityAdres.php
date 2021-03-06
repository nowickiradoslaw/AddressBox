<?php

namespace Proxies\__CG__\AddressBoxBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Adres extends \AddressBoxBundle\Entity\Adres implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'id', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'miasto', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'ulica', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'numerDomu', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'numerMieszkania', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'osoby'];
        }

        return ['__isInitialized__', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'id', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'miasto', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'ulica', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'numerDomu', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'numerMieszkania', '' . "\0" . 'AddressBoxBundle\\Entity\\Adres' . "\0" . 'osoby'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Adres $proxy) {
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
    public function setMiasto($miasto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMiasto', [$miasto]);

        return parent::setMiasto($miasto);
    }

    /**
     * {@inheritDoc}
     */
    public function getMiasto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMiasto', []);

        return parent::getMiasto();
    }

    /**
     * {@inheritDoc}
     */
    public function setUlica($ulica)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUlica', [$ulica]);

        return parent::setUlica($ulica);
    }

    /**
     * {@inheritDoc}
     */
    public function getUlica()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUlica', []);

        return parent::getUlica();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerDomu($numerDomu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerDomu', [$numerDomu]);

        return parent::setNumerDomu($numerDomu);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerDomu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerDomu', []);

        return parent::getNumerDomu();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumerMieszkania($numerMieszkania)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumerMieszkania', [$numerMieszkania]);

        return parent::setNumerMieszkania($numerMieszkania);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumerMieszkania()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumerMieszkania', []);

        return parent::getNumerMieszkania();
    }

    /**
     * {@inheritDoc}
     */
    public function addOsoby(\AddressBoxBundle\Entity\Osoba $osoby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOsoby', [$osoby]);

        return parent::addOsoby($osoby);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOsoby(\AddressBoxBundle\Entity\Osoba $osoby)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOsoby', [$osoby]);

        return parent::removeOsoby($osoby);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsoby()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsoby', []);

        return parent::getOsoby();
    }

    /**
     * {@inheritDoc}
     */
    public function getfullAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getfullAddress', []);

        return parent::getfullAddress();
    }

}
