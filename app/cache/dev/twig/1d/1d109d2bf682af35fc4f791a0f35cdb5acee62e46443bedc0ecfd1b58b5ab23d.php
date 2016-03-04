<?php

/* UsuariosBundle:Front:recuperarPass.html.twig */
class __TwigTemplate_1c8011ee15f9df7a2dc56faf159aa64be3eb3b8baabbcf780c56f80b8787409b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Front:recuperarPass.html.twig", 1);
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
            <h3>Recuperar contraseña</h3>

            <p>Introduce el email con el que te registraste en Cuponify! y recibirás un email con la información necesaria para reestablecer tu contraseña.</p>

            ";
        // line 20
        if (((isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")) == 2)) {
            // line 21
            echo "                <div class=\"alert alert-danger\" role=\"alert\">No encontramos este email en nuestra base de datos.</div>
            ";
        } elseif ((        // line 22
(isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")) == 1)) {
            // line 23
            echo "                <div class=\"alert alert-success\" role=\"alert\">Email enviado!!</div>
            ";
        }
        // line 25
        echo "
            <form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("usuario_recuperar_pass");
        echo "\" method=\"post\">
                <input placeholder=\"Email\" class=\"form-control\" type=\"text\" id=\"email\" name=\"email\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_email"]) ? $context["last_email"] : $this->getContext($context, "last_email")), "html", null, true);
        echo "\" />
                <input class=\"btn btn-primary\" type=\"submit\" name=\"login\" value=\"Recuperar contraseña\" />
            </form>

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Front:recuperarPass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  75 => 26,  72 => 25,  68 => 23,  66 => 22,  63 => 21,  61 => 20,  50 => 11,  47 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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
/*             <h3>Recuperar contraseña</h3>*/
/* */
/*             <p>Introduce el email con el que te registraste en Cuponify! y recibirás un email con la información necesaria para reestablecer tu contraseña.</p>*/
/* */
/*             {% if estado == 2 %}*/
/*                 <div class="alert alert-danger" role="alert">No encontramos este email en nuestra base de datos.</div>*/
/*             {% elseif estado == 1 %}*/
/*                 <div class="alert alert-success" role="alert">Email enviado!!</div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path('usuario_recuperar_pass') }}" method="post">*/
/*                 <input placeholder="Email" class="form-control" type="text" id="email" name="email" value="{{ last_email }}" />*/
/*                 <input class="btn btn-primary" type="submit" name="login" value="Recuperar contraseña" />*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
