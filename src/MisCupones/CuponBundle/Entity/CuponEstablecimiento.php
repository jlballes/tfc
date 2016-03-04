<?php

namespace MisCupones\CuponBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="cupones_establecimientos")
 */
class CuponEstablecimiento
{
    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Cupon", inversedBy="cuponesEstablecimientos") 
     * @ORM\JoinColumn(name="id_cupon", referencedColumnName="id", nullable=false) 
     */
    protected $cupon;

    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="MisCupones\EstablecimientosBundle\Entity\Establecimiento", inversedBy="cuponesEstablecimientos") 
     * @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id", nullable=false) 
     */
    protected $establecimiento;


    /**
     * Set cupon
     *
     * @param \MisCupones\CuponBundle\Entity\Cupon $cupon
     * @return CuponEstablecimiento
     */
    public function setCupon(\MisCupones\CuponBundle\Entity\Cupon $cupon)
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
     * @return CuponEstablecimiento
     */
    public function setEstablecimiento(\MisCupones\EstablecimientosBundle\Entity\Establecimiento $establecimiento)
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
}
