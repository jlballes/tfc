<?php

/* CuponBundle:Front:index.html.twig */
class __TwigTemplate_d8dd0a6e80f8965c0f8b30709accf64080596219b1d28255b1d095f6af820753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CuponBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cuponify!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/css/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
    <!-- Title -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h3>Últimos cupones</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class=\"row text-center\">

    \t";
        // line 25
        if (twig_test_empty((isset($context["cupones"]) ? $context["cupones"] : $this->getContext($context, "cupones")))) {
            // line 26
            echo "
\t\t \t<p>No disponemos de cupones en estos momentos</p>

\t\t";
        } else {
            // line 30
            echo "
        \t";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cupones"]) ? $context["cupones"] : $this->getContext($context, "cupones")));
            foreach ($context['_seq'] as $context["_key"] => $context["cupon"]) {
                // line 32
                echo "
        \t\t<div class=\"col-md-3 col-sm-6 hero-feature\">
                <div class=\"thumbnail\">
                    <img src=\"http://localhost/misCupones/web/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["cupon"], "rutaImagen", array()), "html", null, true);
                echo "\" alt=\"\">
                    <div class=\"caption\">
                        <h3>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["cupon"], "titulo", array()), "html", null, true);
                echo "</h3>
                        <p>";
                // line 38
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["cupon"], "descripcion", array())), 0, 80), "html", null, true);
                echo "...</p>
                        <h5 class=\"precio-anterior\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["cupon"], "precioAnterior", array()), "html", null, true);
                echo "€</h5>
                        <h5 class=\"precio-actual\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["cupon"], "precio", array()), "html", null, true);
                echo "€</h5>
                        <p>
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("detalle_cupon", array("id_cupon" => $this->getAttribute($context["cupon"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Ver cupón</a>
                        </p>
                    </div>
                </div>
            </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  

        ";
        }
        // line 51
        echo "
    </div>
    <!-- /.row -->

    <hr>

    <!-- Jumbotron Header -->
    <header class=\"jumbotron hero-spacer\">
        <h1>Cuponify!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <p><a class=\"btn btn-primary btn-large\">Registrate!</a>
        </p>
    </header>

";
    }

    public function getTemplateName()
    {
        return "CuponBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  123 => 48,  110 => 42,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  88 => 35,  83 => 32,  79 => 31,  76 => 30,  70 => 26,  68 => 25,  54 => 13,  51 => 12,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Cuponify!{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*  */
/*     <link href="{{ asset('bundles/CuponBundle/css/home.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <!-- Title -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h3>Últimos cupones</h3>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     <!-- Page Features -->*/
/*     <div class="row text-center">*/
/* */
/*     	{% if cupones is empty %}*/
/* */
/* 		 	<p>No disponemos de cupones en estos momentos</p>*/
/* */
/* 		{% else %}*/
/* */
/*         	{% for cupon in cupones %}*/
/* */
/*         		<div class="col-md-3 col-sm-6 hero-feature">*/
/*                 <div class="thumbnail">*/
/*                     <img src="http://localhost/misCupones/web/{{ cupon.rutaImagen }}" alt="">*/
/*                     <div class="caption">*/
/*                         <h3>{{ cupon.titulo }}</h3>*/
/*                         <p>{{ cupon.descripcion | striptags|slice(0, 80) }}...</p>*/
/*                         <h5 class="precio-anterior">{{ cupon.precioAnterior }}€</h5>*/
/*                         <h5 class="precio-actual">{{ cupon.precio }}€</h5>*/
/*                         <p>*/
/*                             <a href="{{ url('detalle_cupon', {'id_cupon': cupon.id }) }}" class="btn btn-primary">Ver cupón</a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {% endfor %}  */
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     <hr>*/
/* */
/*     <!-- Jumbotron Header -->*/
/*     <header class="jumbotron hero-spacer">*/
/*         <h1>Cuponify!</h1>*/
/*         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>*/
/*         <p><a class="btn btn-primary btn-large">Registrate!</a>*/
/*         </p>*/
/*     </header>*/
/* */
/* {% endblock %}*/
/* */
