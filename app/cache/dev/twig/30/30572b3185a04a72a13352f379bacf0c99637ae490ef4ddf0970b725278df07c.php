<?php

/* UsuariosBundle:Front:usuarioEditar.html.twig */
class __TwigTemplate_841257232aad6119f5ee134f58b4eba2f524fcb1f6b0f9a24cd12ae8ce99596e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Front:usuarioEditar.html.twig", 1);
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
        echo " Editar mis datos | Cuponify!";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/css/usuario.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "

    <div class=\"row first-row\">

        <div class=\"col-md-6 col-xs-12\">
            <h3>Mi cuenta</h3>

            <ul class=\"nav nav-tabs nav-justified pestanas\">
                <li role=\"presentation\" class=\"active\"><a data-toggle=\"tab\" href=\"#usuario_editar\">Editar mis datos</a></li>
                <li role=\"presentation\"><a data-toggle=\"tab\" href=\"#mis_compras\">Mis compras</a></li>
            </ul>

            <div class=\"tab-content\">
                <div id=\"usuario_editar\" class=\"tab-pane fade in active\">

                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                        <button class=\"btn btn-primary\" type=\"submit\">Enviar</button>
                    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

                <div id=\"mis_compras\" class=\"tab-pane fade row\">

                    <p>Para canjear sus cupones anote el código y pongase en contacto con los establecimientos que puede encontrar haciendo click sobre el nombre de cada cupón.</p>

                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compras"]) ? $context["compras"] : $this->getContext($context, "compras")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 49
            echo "                        <div class=\"col-md-12\">
                            <div class=\"thumbnail row\">
                                <div class=\"col-md-3 col-xs-4\">
                                    <img src=\"http://localhost/misCupones/web/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "ruta_imagen", array(), "array"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"col-md-9 col-xs-8\">
                                    <div class=\"col-md-12 col-xs-12 pull-left\">
                                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("detalle_cupon", array("id_cupon" => $this->getAttribute($context["c"], "cupon_id", array(), "array"))), "html", null, true);
            echo "\">
                                            ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titulo", array(), "array"), "html", null, true);
            echo "
                                        </a>
                                    </div>
                                    <div class=\"col-md-12 col-xs-12 pull-left\">
                                        <strong> Código: </strong><span>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "codigo", array(), "array"), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col-md-12 col-xs-12 pull-left\">
                                        <strong>Válido hasta: </strong><span>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "fecha_fin_canjeo", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col-md-12 col-xs-12 pull-left\">
                                        <strong>Fecha de compra: </strong><span>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "fecha_compra", array(), "array"), "d/m/Y"), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col-md-12  col-xs-12 pull-left\">
                                        <strong>Precio: </strong><span>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "precio", array(), "array"), "html", null, true);
            echo " €</span>
                                    </div>
                                    ";
            // line 72
            if ($this->getAttribute($context["c"], "canjeado", array(), "array")) {
                // line 73
                echo "                                        <div class=\"col-md-12  col-xs-12 pull-left\">
                                            <span class=\"canjeado\">CUPÓN CANJEADO</span>
                                        </div>
                                    ";
            } else {
                // line 77
                echo "                                        <div class=\"col-md-12  col-xs-12 pull-left\">
                                            <span class=\"pendiente\">CUPÓN PENDIENTE DE CANJEAR</span>
                                        </div>
                                    ";
            }
            // line 81
            echo "                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </div>
            </div>

            

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Front:usuarioEditar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 85,  190 => 81,  184 => 77,  178 => 73,  176 => 72,  171 => 70,  165 => 67,  159 => 64,  153 => 61,  146 => 57,  142 => 56,  135 => 52,  130 => 49,  126 => 48,  116 => 41,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  87 => 32,  78 => 29,  75 => 28,  71 => 27,  54 => 12,  51 => 11,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Editar mis datos | Cuponify!{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     */
/*     <link href="{{ asset('bundles/CuponBundle/css/usuario.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="row first-row">*/
/* */
/*         <div class="col-md-6 col-xs-12">*/
/*             <h3>Mi cuenta</h3>*/
/* */
/*             <ul class="nav nav-tabs nav-justified pestanas">*/
/*                 <li role="presentation" class="active"><a data-toggle="tab" href="#usuario_editar">Editar mis datos</a></li>*/
/*                 <li role="presentation"><a data-toggle="tab" href="#mis_compras">Mis compras</a></li>*/
/*             </ul>*/
/* */
/*             <div class="tab-content">*/
/*                 <div id="usuario_editar" class="tab-pane fade in active">*/
/* */
/*                     {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                         <div class="alert alert-success">*/
/*                             {{ flash_message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/*                     {{ form_start(form) }}*/
/*                         {{ form_row(form.nombre, {'attr': {'class': 'form-control'}}) }}*/
/*                         {{ form_row(form.apellidos, {'attr': {'class': 'form-control'}}) }}*/
/*                         {{ form_row(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*                         {{ form_row(form.password.first, {'attr': {'class': 'form-control'}}) }}*/
/*                         {{ form_row(form.password.second, {'attr': {'class': 'form-control'}}) }}*/
/* */
/*                         <button class="btn btn-primary" type="submit">Enviar</button>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/* */
/*                 <div id="mis_compras" class="tab-pane fade row">*/
/* */
/*                     <p>Para canjear sus cupones anote el código y pongase en contacto con los establecimientos que puede encontrar haciendo click sobre el nombre de cada cupón.</p>*/
/* */
/*                     {% for c in compras %}*/
/*                         <div class="col-md-12">*/
/*                             <div class="thumbnail row">*/
/*                                 <div class="col-md-3 col-xs-4">*/
/*                                     <img src="http://localhost/misCupones/web/{{ c['ruta_imagen'] }}" alt="">*/
/*                                 </div>*/
/*                                 <div class="col-md-9 col-xs-8">*/
/*                                     <div class="col-md-12 col-xs-12 pull-left">*/
/*                                         <a href="{{ url('detalle_cupon', {'id_cupon': c['cupon_id'] }) }}">*/
/*                                             {{ c['titulo'] }}*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="col-md-12 col-xs-12 pull-left">*/
/*                                         <strong> Código: </strong><span>{{ c['codigo'] }}</span>*/
/*                                     </div>*/
/*                                     <div class="col-md-12 col-xs-12 pull-left">*/
/*                                         <strong>Válido hasta: </strong><span>{{ c['fecha_fin_canjeo']|date("d/m/Y") }}</span>*/
/*                                     </div>*/
/*                                     <div class="col-md-12 col-xs-12 pull-left">*/
/*                                         <strong>Fecha de compra: </strong><span>{{ c['fecha_compra']|date("d/m/Y") }}</span>*/
/*                                     </div>*/
/*                                     <div class="col-md-12  col-xs-12 pull-left">*/
/*                                         <strong>Precio: </strong><span>{{ c['precio'] }} €</span>*/
/*                                     </div>*/
/*                                     {% if c['canjeado'] %}*/
/*                                         <div class="col-md-12  col-xs-12 pull-left">*/
/*                                             <span class="canjeado">CUPÓN CANJEADO</span>*/
/*                                         </div>*/
/*                                     {% else %}*/
/*                                         <div class="col-md-12  col-xs-12 pull-left">*/
/*                                             <span class="pendiente">CUPÓN PENDIENTE DE CANJEAR</span>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             */
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
