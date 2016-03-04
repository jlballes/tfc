<?php

/* base.html.twig */
class __TwigTemplate_dd46acaa79d34050308d824fc47894346cd16108caa2d7106ee4117a16c5e10a extends Twig_Template
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
                        <li>
                            <a href=\"#\">Iniciar sesión</a>
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
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
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
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/js/jquery.js"), "html", null, true);
        echo "\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
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

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    // line 73
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
        return array (  147 => 73,  142 => 50,  137 => 6,  131 => 5,  125 => 74,  123 => 73,  118 => 71,  112 => 68,  93 => 51,  91 => 50,  64 => 26,  47 => 12,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
/*                         <li>*/
/*                             <a href="#">Contacto</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Iniciar sesión</a>*/
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
