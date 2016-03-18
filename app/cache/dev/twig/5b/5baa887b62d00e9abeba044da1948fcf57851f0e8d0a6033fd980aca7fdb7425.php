<?php

/* base.html.twig */
class __TwigTemplate_ff77b10b49678097ae7d51ccf6580d23f44e160a6c3533a3c6de67ca91cdf09c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/css/global.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getUrl("homepage");
        echo "\">Cuponify!</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"#\">Ayuda</a>
                        </li>

                        <li>
                            <a href=\"#\">Contacto</a>
                        </li>

                        ";
        // line 39
        if ((($this->env->getExtension('security')->isGranted("ROLE_USUARIO") || $this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_UESTABLECIMIENTO"))) {
            // line 40
            echo "                        <li>
                            <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getUrl("usuario_editar");
            echo "\">Mi cuenta</a>
                        </li>
                        ";
        }
        // line 44
        echo "
                        ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_UESTABLECIMIENTO")) {
            // line 46
            echo "                        <li>
                            <a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getUrl("usuario_establecimiento");
            echo "\">Estadísticas</a>
                        </li>
                        ";
        }
        // line 50
        echo "
                        <li>
                            ";
        // line 52
        if ((($this->env->getExtension('security')->isGranted("ROLE_USUARIO") || $this->env->getExtension('security')->isGranted("ROLE_SUPERADMIN")) || $this->env->getExtension('security')->isGranted("ROLE_UESTABLECIMIENTO"))) {
            // line 53
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("usuario_logout");
            echo "\">Cerrar sesión</a>
                            ";
        } else {
            // line 55
            echo "                                <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("usuario_login");
            echo "\">Iniciar sesión</a>
                            ";
        }
        // line 57
        echo "
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class=\"container\">

            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
            <hr>

            <!-- Footer -->
            <footer>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <p>Copyright &copy; Cuponify! 2016</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->


        <!-- jQuery -->
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 92,  188 => 69,  183 => 6,  177 => 5,  171 => 93,  169 => 92,  164 => 90,  158 => 87,  139 => 70,  137 => 69,  123 => 57,  117 => 55,  111 => 53,  109 => 52,  105 => 50,  99 => 47,  96 => 46,  94 => 45,  91 => 44,  85 => 41,  82 => 40,  80 => 39,  64 => 26,  47 => 12,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <!-- Bootstrap Core CSS -->*/
/*         <link href="{{ asset('bundles/CuponBundle/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* */
/*         <link href="{{ asset('bundles/CuponBundle/css/global.css') }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <div class="container">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ url('homepage') }}">Cuponify!</a>*/
/*                 </div>*/
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li>*/
/*                             <a href="#">Ayuda</a>*/
/*                         </li>*/
/* */
/*                         <li>*/
/*                             <a href="#">Contacto</a>*/
/*                         </li>*/
/* */
/*                         {% if is_granted('ROLE_USUARIO') or is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_UESTABLECIMIENTO')%}*/
/*                         <li>*/
/*                             <a href="{{ url('usuario_editar') }}">Mi cuenta</a>*/
/*                         </li>*/
/*                         {% endif %}*/
/* */
/*                         {% if is_granted('ROLE_UESTABLECIMIENTO')%}*/
/*                         <li>*/
/*                             <a href="{{ url('usuario_establecimiento') }}">Estadísticas</a>*/
/*                         </li>*/
/*                         {% endif %}*/
/* */
/*                         <li>*/
/*                             {% if is_granted('ROLE_USUARIO') or is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_UESTABLECIMIENTO')%}*/
/*                                 <a href="{{ url('usuario_logout') }}">Cerrar sesión</a>*/
/*                             {% else %}*/
/*                                 <a href="{{ url('usuario_login') }}">Iniciar sesión</a>*/
/*                             {% endif %}*/
/* */
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.navbar-collapse -->*/
/*             </div>*/
/*             <!-- /.container -->*/
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/* */
/*             {% block body %}{% endblock %}*/
/* */
/*             <hr>*/
/* */
/*             <!-- Footer -->*/
/*             <footer>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <p>Copyright &copy; Cuponify! 2016</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/* */
/*         </div>*/
/*         <!-- /.container -->*/
/* */
/* */
/*         <!-- jQuery -->*/
/*         <script src="{{ asset('bundles/CuponBundle/js/jquery.js') }}"></script>*/
/* */
/*         <!-- Bootstrap Core JavaScript -->*/
/*         <script src="{{ asset('bundles/CuponBundle/js/bootstrap.min.js') }}"></script>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
