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

    <div class=\"row first-row\">

        <div class=\"col-md-6 col-xs-12\">
            <h3>Iniciar sesión</h3>

            <p>Utilice el email y la contraseña con la que se registro en Cuponify! Si no recuerda la contraseña haga click <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("usuario_recuperar_pass");
        echo "\">aquí.</a> Si aun no tiene cuenta <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("usuario_registro");
        echo "\">registresé!</a></p>

            ";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 21
            echo "                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 23
        echo "
            <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
                <input placeholder=\"Email\" class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
                <input placeholder=\"Contraseña\" class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />
                <input class=\"btn btn-primary\" type=\"submit\" name=\"login\" value=\"Acceder\" />
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
        return array (  81 => 25,  77 => 24,  74 => 23,  68 => 21,  66 => 20,  59 => 18,  50 => 11,  47 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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
/*     <div class="row first-row">*/
/* */
/*         <div class="col-md-6 col-xs-12">*/
/*             <h3>Iniciar sesión</h3>*/
/* */
/*             <p>Utilice el email y la contraseña con la que se registro en Cuponify! Si no recuerda la contraseña haga click <a href="{{ url('usuario_recuperar_pass') }}">aquí.</a> Si aun no tiene cuenta <a href="{{ url('usuario_registro') }}">registresé!</a></p>*/
/* */
/*             {% if error %}*/
/*                 <div class="alert alert-danger" role="alert">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path('usuario_login_check') }}" method="post">*/
/*                 <input placeholder="Email" class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*                 <input placeholder="Contraseña" class="form-control" type="password" id="password" name="_password" />*/
/*                 <input class="btn btn-primary" type="submit" name="login" value="Acceder" />*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
