<?php

namespace MisCupones\EstablecimientosBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="establecimientos")
 */
class Establecimiento
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
 
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $titulo;

    /**
     * @ORM\Column(type="text")
     */
    protected $descripcion;
 
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $direccion;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $provincia;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $municipio;

    /**
     * @ORM\Column(type="integer", length=5)
     */
    protected $codigo_postal;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=12)
     */
    protected $latitud;

    /**
     * @ORM\Column(type="decimal", precision=18, scale=12)
     */
    protected $longitud;

    /**
     * @ORM\Column(type="integer", length=16)
     */
    protected $telefono;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $web;

    /**
     * @ORM\OneToMany(targetEntity="MisCupones\CuponBundle\Entity\CuponEstablecimiento", mappedBy="establecimiento")
     */
    protected $cuponesEstablecimientos;

    /**
     * @ORM\OneToMany(targetEntity="MisCupones\ComprasBundle\Entity\Compra", mappedBy="establecimiento")
     */
    protected $compras;

    /** 
    * @ORM\OneToMany(targetEntity="usuarioEstablecimiento", mappedBy="establecimiento") 
    */
    protected $usuariosEstablecimientos;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cuponesEstablecimientos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titulo
     *
     * @param string $titulo
     * @return Establecimiento
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Establecimiento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Establecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Establecimiento
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return Establecimiento
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set codigo_postal
     *
     * @param integer $codigoPostal
     * @return Establecimiento
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigo_postal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigo_postal
     *
     * @return integer 
     */
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     * @return Establecimiento
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string 
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return Establecimiento
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Establecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Establecimiento
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
     * Set web
     *
     * @param string $web
     * @return Establecimiento
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Add cuponesEstablecimientos
     *
     * @param \MisCupones\CuponBundle\Entity\CuponEstablecimiento $cuponesEstablecimientos
     * @return Establecimiento
     */
    public function addCuponesEstablecimiento(\MisCupones\CuponBundle\Entity\CuponEstablecimiento $cuponesEstablecimientos)
    {
        $this->cuponesEstablecimientos[] = $cuponesEstablecimientos;

        return $this;
    }

    /**
     * Remove cuponesEstablecimientos
     *
     * @param \MisCupones\CuponBundle\Entity\CuponEstablecimiento $cuponesEstablecimientos
     */
    public function removeCuponesEstablecimiento(\MisCupones\CuponBundle\Entity\CuponEstablecimiento $cuponesEstablecimientos)
    {
        $this->cuponesEstablecimientos->removeElement($cuponesEstablecimientos);
    }

    /**
     * Get cuponesEstablecimientos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCuponesEstablecimientos()
    {
        return $this->cuponesEstablecimientos;
    }

    /**
     * Add compras
     *
     * @param \MisCupones\ComprasBundle\Entity\Compra $compras
     * @return Establecimiento
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
     * @return Establecimiento
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
}
