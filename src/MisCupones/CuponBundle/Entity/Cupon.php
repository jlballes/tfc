<?php

namespace MisCupones\CuponBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="cupones")
 */
class Cupon
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
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $precio;
 	
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $precio_anterior;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $ruta_imagen;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha_fin_venta;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $fecha_fin_canjeo;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $publicado;

    /** 
	* @ORM\OneToMany(targetEntity="CuponEstablecimiento", mappedBy="cupon") 
	*/
	protected $cuponesEstablecimientos;

    /**
     * @ORM\OneToMany(targetEntity="MisCupones\ComprasBundle\Entity\Compra", mappedBy="cupon")
     */
    protected $compras;

    
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
     * @return Cupon
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
     * @return Cupon
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
     * Set precio
     *
     * @param string $precio
     * @return Cupon
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set precio_anterior
     *
     * @param string $precioAnterior
     * @return Cupon
     */
    public function setPrecioAnterior($precioAnterior)
    {
        $this->precio_anterior = $precioAnterior;

        return $this;
    }

    /**
     * Get precio_anterior
     *
     * @return string 
     */
    public function getPrecioAnterior()
    {
        return $this->precio_anterior;
    }

    /**
     * Set ruta_imagen
     *
     * @param string $rutaImagen
     * @return Cupon
     */
    public function setRutaImagen($rutaImagen)
    {
        $this->ruta_imagen = $rutaImagen;

        return $this;
    }

    /**
     * Get ruta_imagen
     *
     * @return string 
     */
    public function getRutaImagen()
    {
        return $this->ruta_imagen;
    }

    /**
     * Set fecha_fin_venta
     *
     * @param \DateTime $fechaFinVenta
     * @return Cupon
     */
    public function setFechaFinVenta($fechaFinVenta)
    {
        $this->fecha_fin_venta = $fechaFinVenta;

        return $this;
    }

    /**
     * Get fecha_fin_venta
     *
     * @return \DateTime 
     */
    public function getFechaFinVenta()
    {
        return $this->fecha_fin_venta;
    }

    /**
     * Set fecha_fin_canjeo
     *
     * @param \DateTime $fechaFinCanjeo
     * @return Cupon
     */
    public function setFechaFinCanjeo($fechaFinCanjeo)
    {
        $this->fecha_fin_canjeo = $fechaFinCanjeo;

        return $this;
    }

    /**
     * Get fecha_fin_canjeo
     *
     * @return \DateTime 
     */
    public function getFechaFinCanjeo()
    {
        return $this->fecha_fin_canjeo;
    }

    /**
     * Set publicado
     *
     * @param boolean $publicado
     * @return Cupon
     */
    public function setPublicado($publicado)
    {
        $this->publicado = $publicado;

        return $this;
    }

    /**
     * Get publicado
     *
     * @return boolean 
     */
    public function getPublicado()
    {
        return $this->publicado;
    }

    /**
     * Add cuponesEstablecimientos
     *
     * @param \MisCupones\CuponBundle\Entity\CuponEstablecimiento $cuponesEstablecimientos
     * @return Cupon
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
     * @return Cupon
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
}
