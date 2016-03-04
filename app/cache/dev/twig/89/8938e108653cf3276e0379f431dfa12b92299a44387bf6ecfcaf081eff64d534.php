<?php

/* UsuariosBundle:Front:registro.html.twig */
class __TwigTemplate_7e1c79fa6d1bf6b293ded83e27ec6f1cc0af6ecb4cc2a3e03f8d5d6792e480d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Front:registro.html.twig", 1);
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
            <h3>Registro de usuario</h3>

            <p>Rellena el siguiente formulario y registrate en Cuponify!</p>

            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                <button class=\"btn btn-primary\" type=\"submit\">Enviar</button>
            ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Front:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  50 => 11,  47 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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
/*             <h3>Registro de usuario</h3>*/
/* */
/*             <p>Rellena el siguiente formulario y registrate en Cuponify!</p>*/
/* */
/*             {{ form_start(form) }}*/
/*                 {{ form_row(form.nombre, {'attr': {'class': 'form-control'}}) }}*/
/*                 {{ form_row(form.apellidos, {'attr': {'class': 'form-control'}}) }}*/
/*                 {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*                 {{ form_row(form.password.first, {'attr': {'class': 'form-control'}}) }}*/
/*                 {{ form_row(form.password.second, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                 <button class="btn btn-primary" type="submit">Enviar</button>*/
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
