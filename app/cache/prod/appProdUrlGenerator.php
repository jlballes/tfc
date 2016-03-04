<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'compras_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MisCupones\\ComprasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'usuario_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'usuario_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login-check',    ),  ),  4 =>   array (  ),),
        'usuario_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'usuario_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\UsuariosBundle\\Controller\\FrontController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro',    ),  ),  4 =>   array (  ),),
        'establecimientos_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MisCupones\\EstablecimientosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'detalle_cupon' => array (  0 =>   array (    0 => 'id_cupon',  ),  1 =>   array (    '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::detalleCuponAction',  ),  2 =>   array (    'id_cupon' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id_cupon',    ),    1 =>     array (      0 => 'text',      1 => '/cupon',    ),  ),  4 =>   array (  ),),
        'mis_cupones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::misCuponesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/mis-cupones',    ),  ),  4 =>   array (  ),),
        'redirigiendo_pasarela_pago' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MisCupones\\CuponBundle\\Controller\\FrontController::redirigiendoPasarelaPagoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redirigiendo-pasarela-pago',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
