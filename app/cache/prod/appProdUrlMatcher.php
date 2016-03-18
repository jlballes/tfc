<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // compras_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'compras_homepage')), array (  '_controller' => 'MisCupones\\ComprasBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // usuario_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::loginAction',  '_route' => 'usuario_login',);
                }

                // usuario_login_check
                if ($pathinfo === '/login-check') {
                    return array('_route' => 'usuario_login_check');
                }

            }

            // usuario_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'usuario_logout');
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            // usuario_registro
            if ($pathinfo === '/registro') {
                return array (  '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::registroAction',  '_route' => 'usuario_registro',);
            }

            // usuario_recuperar_pass
            if ($pathinfo === '/recuperar-password') {
                return array (  '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::recuperarPassAction',  '_route' => 'usuario_recuperar_pass',);
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_editar
            if ($pathinfo === '/usuario/editar') {
                return array (  '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::usuarioEditarAction',  '_route' => 'usuario_editar',);
            }

            // usuario_establecimiento
            if ($pathinfo === '/usuario-establecimiento') {
                return array (  '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::usuarioEstablecimientoAction',  '_route' => 'usuario_establecimiento',);
            }

        }

        // establecimientos_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'establecimientos_homepage')), array (  '_controller' => 'MisCupones\\EstablecimientosBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::indexAction',  '_route' => 'homepage',);
        }

        // detalle_cupon
        if (0 === strpos($pathinfo, '/cupon') && preg_match('#^/cupon/(?P<id_cupon>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalle_cupon')), array (  '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::detalleCuponAction',));
        }

        // mis_cupones
        if ($pathinfo === '/usuario/mis-cupones') {
            return array (  '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::misCuponesAction',  '_route' => 'mis_cupones',);
        }

        // redirigiendo_pasarela_pago
        if ($pathinfo === '/redirigiendo-pasarela-pago') {
            return array (  '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::redirigiendoPasarelaPagoAction',  '_route' => 'redirigiendo_pasarela_pago',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
