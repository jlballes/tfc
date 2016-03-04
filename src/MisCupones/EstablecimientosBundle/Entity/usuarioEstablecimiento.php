<?php

namespace MisCupones\EstablecimientosBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios_establecimeintos")
 */
class usuarioEstablecimiento
{
    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Establecimiento", inversedBy="usuariosEstablecimientos") 
     * @ORM\JoinColumn(name="id_establecimiento", referencedColumnName="id", nullable=false) 
     */
    protected $establecimiento;

    /** 
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="MisCupones\UsuariosBundle\Entity\Usuario", inversedBy="usuariosEstablecimientos") 
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id", nullable=false) 
     */
    protected $usuario;


    /**
     * Set establecimiento
     *
     * @param \MisCupones\EstablecimientosBundle\Entity\Establecimiento $establecimiento
     * @return usuarioEstablecimiento
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

    /**
     * Set usuario
     *
     * @param \MisCupones\UsuariosBundle\Entity\Usuario $usuario
     * @return usuarioEstablecimiento
     */
    public function setUsuario(\MisCupones\UsuariosBundle\Entity\Usuario $usuario)
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
