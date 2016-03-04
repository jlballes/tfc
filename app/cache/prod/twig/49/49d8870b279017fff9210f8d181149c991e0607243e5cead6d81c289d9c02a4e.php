<?php

/* UsuariosBundle:Front:login.html.twig */
class __TwigTemplate_11b559c70ff6eceedcb515771c8f45f05deabbe7604f10014db0f142c5d3ccdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Front:login.html.twig", 1);
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
        echo " Iniciar sesión | Cuponify!";
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

    <div class=\"row\" style=\"margin-top:90px;\">

        <div class=\"col-md-12 col-xs-12\">

            ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 18
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 20
        echo "
            <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
                <label for=\"username\">Email:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
                <label for=\"password\">Contraseña:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
                <input type=\"submit\" name=\"login\" value=\"Acceder\" />
            </form>

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Front:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  69 => 21,  66 => 20,  60 => 18,  58 => 17,  50 => 11,  47 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Iniciar sesión | Cuponify!{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*  */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="row" style="margin-top:90px;">*/
/* */
/*         <div class="col-md-12 col-xs-12">*/
/* */
/*             {% if error %}*/
/*                 <div>{{ error.message }}</div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path('usuario_login_check') }}" method="post">*/
/*                 <label for="username">Email:</label>*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*                 <label for="password">Contraseña:</label>*/
/*                 <input type="password" id="password" name="_password" />*/
/*                 <input type="submit" name="login" value="Acceder" />*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
