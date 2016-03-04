<?php

namespace MisCupones\CuponBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cupones = $em->getRepository('CuponBundle:Cupon')->findBy(
            array(
                'publicado' => true
            ),
            array(
                'fecha_fin_venta' => 'ASC'
            )
        );

        return $this->render('CuponBundle:Front:index.html.twig', array('cupones' => $cupones));
    }

    public function detalleCuponAction($id_cupon)
    {
        $em = $this->getDoctrine()->getManager();
        $cupon = $em->getRepository('CuponBundle:Cupon')->find($id_cupon);

        $ahora = new \DateTime();
        if($cupon->getFechaFinVenta() >= $ahora)
        {
            $objetoTiempoQueda = $ahora->diff($cupon->getFechaFinVenta());
            $tiempoQueda = $objetoTiempoQueda->format('%a').' días '.
                            $objetoTiempoQueda->format('%h').' horas '.
                            $objetoTiempoQueda->format('%i').' minutos ';
        }
        else{
            $tiempoQueda = null;
        }

        $cuponesEstablecimientos = $cupon->getCuponesEstablecimientos();
        $establecimientos = array();
        foreach ($cuponesEstablecimientos as $key => $ce) {
            $establecimientos[] = $ce->getEstablecimiento();
        }
        

        return $this->render('CuponBundle:Front:detalleCupon.html.twig', array('cupon' => $cupon, 'tiempo' => $tiempoQueda, 'establecimientos' => $establecimientos));
    }

    public function redirigiendoPasarelaPagoAction()
    {
        return $this->render('CuponBundle:Front:redirigiendoPasarelaPago.html.twig');
    }
}

