<?php

/* CuponBundle:Front:redirigiendoPasarelaPago.html.twig */
class __TwigTemplate_0cc72c28d3b6d29e08534ffcef45f93b5b46f732e22dfcfaece5046683ebbc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CuponBundle:Front:redirigiendoPasarelaPago.html.twig", 1);
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
        echo " Redirigiendo a pasarela de pago | Cuponify!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

 ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    <header class=\"jumbotron hero-spacer\">
        <h2>Redirigiendo a la pasarela de pago...</h2>
        <p>(* página sin funcionalidad, solo para presentación)</p>
    </header>

";
    }

    public function getTemplateName()
    {
        return "CuponBundle:Front:redirigiendoPasarelaPago.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  47 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Redirigiendo a pasarela de pago | Cuponify!{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*  {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <header class="jumbotron hero-spacer">*/
/*         <h2>Redirigiendo a la pasarela de pago...</h2>*/
/*         <p>(* página sin funcionalidad, solo para presentación)</p>*/
/*     </header>*/
/* */
/* {% endblock %}*/
/* */
