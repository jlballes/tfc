<?php

namespace Proxies\__CG__\MisCupones\UsuariosBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \MisCupones\UsuariosBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'email', 'password', 'salt', 'nombre', 'apellidos', 'rol', 'compras', 'usuariosEstablecimientos');
        }

        return array('__isInitialized__', 'id', 'email', 'password', 'salt', 'nombre', 'apellidos', 'rol', 'compras', 'usuariosEstablecimientos');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCompra($fechaCompra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCompra', array($fechaCompra));

        return parent::setFechaCompra($fechaCompra);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCompra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCompra', array());

        return parent::getFechaCompra();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCanjeo($fechaCanjeo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCanjeo', array($fechaCanjeo));

        return parent::setFechaCanjeo($fechaCanjeo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCanjeo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCanjeo', array());

        return parent::getFechaCanjeo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigo($codigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigo', array($codigo));

        return parent::setCodigo($codigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', array());

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanjeado($canjeado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanjeado', array($canjeado));

        return parent::setCanjeado($canjeado);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanjeado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanjeado', array());

        return parent::getCanjeado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCupon(\MisCupones\CuponBundle\Entity\Cupon $cupon = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCupon', array($cupon));

        return parent::setCupon($cupon);
    }

    /**
     * {@inheritDoc}
     */
    public function getCupon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCupon', array());

        return parent::getCupon();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\Establecimiento $establecimiento = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstablecimiento', array($establecimiento));

        return parent::setEstablecimiento($establecimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstablecimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstablecimiento', array());

        return parent::getEstablecimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', array($apellidos));

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', array());

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoUsuario($tipoUsuario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoUsuario', array($tipoUsuario));

        return parent::setTipoUsuario($tipoUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoUsuario', array());

        return parent::getTipoUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function addCompra(\MisCupones\ComprasBundle\Entity\Compra $compras)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCompra', array($compras));

        return parent::addCompra($compras);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCompra(\MisCupones\ComprasBundle\Entity\Compra $compras)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCompra', array($compras));

        return parent::removeCompra($compras);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompras()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompras', array());

        return parent::getCompras();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuariosEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento $usuariosEstablecimientos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuariosEstablecimiento', array($usuariosEstablecimientos));

        return parent::addUsuariosEstablecimiento($usuariosEstablecimientos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuariosEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento $usuariosEstablecimientos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuariosEstablecimiento', array($usuariosEstablecimientos));

        return parent::removeUsuariosEstablecimiento($usuariosEstablecimientos);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuariosEstablecimientos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuariosEstablecimientos', array());

        return parent::getUsuariosEstablecimientos();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', array($salt));

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function setRol($rol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRol', array($rol));

        return parent::setRol($rol);
    }

    /**
     * {@inheritDoc}
     */
    public function getRol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRol', array());

        return parent::getRol();
    }

}