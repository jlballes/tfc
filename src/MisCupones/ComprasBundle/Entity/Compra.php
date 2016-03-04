<?php

namespace MisCupones\ComprasBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="compras")
 */
class Compra
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha_compra;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $fecha_canjeo;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $codigo;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $canjeado;

    /**
     * @ORM\ManyToOne(targetEntity="MisCupones\CuponBundle\Entity\Cupon", inversedBy="compras")
     * @ORM\JoinColumn(name="cupon_id", referencedColumnName="id")
     */
    protected $cupon;

    /**
     * @ORM\ManyToOne(targetEntity="MisCupones\EstablecimientosBundle\Entity\Establecimiento", inversedBy="compras")
     * @ORM\JoinColumn(name="establecimiento_id", referencedColumnName="id")
     */
    protected $establecimiento;

    /**
     * @ORM\ManyToOne(targetEntity="MisCupones\UsuariosBundle\Entity\Usuario", inversedBy="compras")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

    

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
     * Set usuario
     *
     * @param \MisCupones\UsuariosBundle\Entity\Usuario $usuario
     * @return Compra
     */
    public function setUsuario(\MisCupones\UsuariosBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \MisCupones\UsuariosBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
