<?php

namespace MisCupones\UsuariosBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 * @UniqueEntity(fields="email", message="El email ya existe")
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $apellidos;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $rol;
    
    /**
     * @ORM\OneToMany(targetEntity="MisCupones\ComprasBundle\Entity\Compra", mappedBy="usuario")
     */
    protected $compras;

    /** 
    * @ORM\OneToMany(targetEntity="MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento", mappedBy="usuario") 
    */
    protected $usuariosEstablecimientos;


    function eraseCredentials()
    {
        //no es necesario incluir código
    }

    function getRoles()
    {
        return array($this->getRol());
    }

    function getUsername()
    {
        return $this->getEmail();
    }

    function getSalt()
    {
        return null;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha_compra
     *
     * @param \DateTime $fechaCompra
     * @return Compra
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fecha_compra = $fechaCompra;

        return $this;
    }

    /**
     * Get fecha_compra
     *
     * @return \DateTime 
     */
    public function getFechaCompra()
    {
        return $this->fecha_compra;
    }

    /**
     * Set fecha_canjeo
     *
     * @param \DateTime $fechaCanjeo
     * @return Compra
     */
    public function setFechaCanjeo($fechaCanjeo)
    {
        $this->fecha_canjeo = $fechaCanjeo;

        return $this;
    }

    /**
     * Get fecha_canjeo
     *
     * @return \DateTime 
     */
    public function getFechaCanjeo()
    {
        return $this->fecha_canjeo;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Compra
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set canjeado
     *
     * @param boolean $canjeado
     * @return Compra
     */
    public function setCanjeado($canjeado)
    {
        $this->canjeado = $canjeado;

        return $this;
    }

    /**
     * Get canjeado
     *
     * @return boolean 
     */
    public function getCanjeado()
    {
        return $this->canjeado;
    }

    /**
     * Set cupon
     *
     * @param \MisCupones\CuponBundle\Entity\Cupon $cupon
     * @return Compra
     */
    public function setCupon(\MisCupones\CuponBundle\Entity\Cupon $cupon = null)
    {
        $this->cupon = $cupon;

        return $this;
    }

    /**
     * Get cupon
     *
     * @return \MisCupones\CuponBundle\Entity\Cupon 
     */
    public function getCupon()
    {
        return $this->cupon;
    }

    /**
     * Set establecimiento
     *
     * @param \MisCupones\EstablecimientosBundle\Entity\Establecimiento $establecimiento
     * @return Compra
     */
    public function setEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\Establecimiento $establecimiento = null)
    {
        $this->establecimiento = $establecimiento;

        return $this;
    }

    /**
     * Get establecimiento
     *
     * @return \MisCupones\EstablecimientosBundle\Entity\Establecimiento 
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set tipo_usuario
     *
     * @param integer $tipoUsuario
     * @return Usuario
     */
    public function setTipoUsuario($tipoUsuario)
    {
        $this->tipo_usuario = $tipoUsuario;

        return $this;
    }

    /**
     * Get tipo_usuario
     *
     * @return integer 
     */
    public function getTipoUsuario()
    {
        return $this->tipo_usuario;
    }

    /**
     * Add compras
     *
     * @param \MisCupones\ComprasBundle\Entity\Compra $compras
     * @return Usuario
     */
    public function addCompra(\MisCupones\ComprasBundle\Entity\Compra $compras)
    {
        $this->compras[] = $compras;

        return $this;
    }

    /**
     * Remove compras
     *
     * @param \MisCupones\ComprasBundle\Entity\Compra $compras
     */
    public function removeCompra(\MisCupones\ComprasBundle\Entity\Compra $compras)
    {
        $this->compras->removeElement($compras);
    }

    /**
     * Get compras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompras()
    {
        return $this->compras;
    }

    /**
     * Add usuariosEstablecimientos
     *
     * @param \MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento $usuariosEstablecimientos
     * @return Usuario
     */
    public function addUsuariosEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento $usuariosEstablecimientos)
    {
        $this->usuariosEstablecimientos[] = $usuariosEstablecimientos;

        return $this;
    }

    /**
     * Remove usuariosEstablecimientos
     *
     * @param \MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento $usuariosEstablecimientos
     */
    public function removeUsuariosEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\usuarioEstablecimiento $usuariosEstablecimientos)
    {
        $this->usuariosEstablecimientos->removeElement($usuariosEstablecimientos);
    }

    /**
     * Get usuariosEstablecimientos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuariosEstablecimientos()
    {
        return $this->usuariosEstablecimientos;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Usuario
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
}
