<?php

/* CuponBundle:Front:detalleCupon.html.twig */
class __TwigTemplate_c96e087c55cfd2a1a427265bd77266c7f9d70ffebb50ebc3654819a5f0bab1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CuponBundle:Front:detalleCupon.html.twig", 1);
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "titulo", array()), "html", null, true);
        echo " | Cuponify!";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/CuponBundle/css/detalle_cupon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "

    <div class=\"row\">

        <div class=\"col-md-12 col-xs-12\">

            <h4 class=\"titulo-cupon\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "titulo", array()), "html", null, true);
        echo "</h4>

            <div class=\"col-md-6 col-xs-12\">
                <img id=\"imagen-detalle\" class=\"img-responsive\" src=\"http://localhost/misCupones/web/";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "rutaImagen", array()), "html", null, true);
        echo "\" alt=\"\">
            </div>

            <div class=\"caption-full col-md-6 col-xs-12\">
                <h4 class=\"precio-anterior\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "precioAnterior", array()), "html", null, true);
        echo "€</h4>
                <h4 class=\"precio-actual\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "precio", array()), "html", null, true);
        echo "€</h4>
                
                <div class=\"body\">
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "descripcion", array()), "html", null, true);
        echo "</p>
                </div>

                ";
        // line 32
        if ( !(null === (isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")))) {
            // line 33
            echo "                    <div class=\"col-md-12 tiempo-limitado\">TIEMPO LIMITADO!!</div>
                    <div class=\"col-md-12 tiempo\">";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 36
            echo "                    <div class=\"col-md-12 tiempo\">ESTE CUPÓN YA NO ESTÁ A LA VENTA.</div>
                ";
        }
        // line 38
        echo "
                <div class=\"col-md-12 caducidad\">
                    <span>Fecha de caducidad para canjear: </span>
                    <span>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cupon"]) ? $context["cupon"] : $this->getContext($context, "cupon")), "fechaFinCanjeo", array()), "d/m/Y"), "html", null, true);
        echo "</span>
                </div>

                <a id=\"a-boton-comprar\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("redirigiendo_pasarela_pago");
        echo "\" class=\"btn btn-primary ";
        if ((null === (isset($context["tiempo"]) ? $context["tiempo"] : $this->getContext($context, "tiempo")))) {
            echo " disabled ";
        }
        echo "\">Comprar</a>
                
            </div>

        </div>

        <div id=\"establecimientos\" class=\"col-md-12 col-xs-12\">

            <h4 class=\"titulo-establecimientos\">Establecimientos</h4>
            <p>A continuación le mostramos los establecimientos donde puede canjear este cupón:</p>

            <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">

                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["establecimientos"]) ? $context["establecimientos"] : $this->getContext($context, "establecimientos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 58
            echo "
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"heading";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                                    ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titulo", array()), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                            <div class=\"panel-body\">
                                <div class=\"col-md-8 col-xs-12\">
                                    <p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "descripcion", array()), "html", null, true);
            echo "</p>
                                    <p>Más información:</p>
                                    <ul>
                                        <li><strong>Dirección: </strong>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "direccion", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "codigoPostal", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "municipio", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "provincia", array()), "html", null, true);
            echo "</li>
                                        <li><strong>Teléfono: </strong>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "telefono", array()), "html", null, true);
            echo "</li>
                                        <li><strong>Email: </strong>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "email", array()), "html", null, true);
            echo "</li>
                                        <li><strong>Web: </strong>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "web", array()), "html", null, true);
            echo "</li>
                                    </ul>
                                </div>
                                <div class=\"gmaps\" class=\"col-md-4 col-xs-12\">
                                    <iframe width=\"600\" height=\"200\" frameborder=\"0\" style=\"border:0\"
                                    src=\"https://www.google.com/maps/embed/v1/place?q=";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "latitud", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "longitud", array()), "html", null, true);
            echo "&key=AIzaSyAl-sd14Rfnj4S4Y0_hnNnoc72CHTCzt0A\" allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo " 

            </div>
        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "CuponBundle:Front:detalleCupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 88,  219 => 81,  211 => 76,  207 => 75,  203 => 74,  193 => 73,  187 => 70,  179 => 67,  170 => 63,  164 => 62,  159 => 60,  155 => 58,  138 => 57,  118 => 44,  112 => 41,  107 => 38,  103 => 36,  98 => 34,  95 => 33,  93 => 32,  87 => 29,  81 => 26,  77 => 25,  70 => 21,  64 => 18,  56 => 12,  53 => 11,  47 => 8,  41 => 6,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} {{cupon.titulo}} | Cuponify!{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*  */
/*     <link href="{{ asset('bundles/CuponBundle/css/detalle_cupon.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     <div class="row">*/
/* */
/*         <div class="col-md-12 col-xs-12">*/
/* */
/*             <h4 class="titulo-cupon">{{cupon.titulo}}</h4>*/
/* */
/*             <div class="col-md-6 col-xs-12">*/
/*                 <img id="imagen-detalle" class="img-responsive" src="http://localhost/misCupones/web/{{ cupon.rutaImagen }}" alt="">*/
/*             </div>*/
/* */
/*             <div class="caption-full col-md-6 col-xs-12">*/
/*                 <h4 class="precio-anterior">{{cupon.precioAnterior}}€</h4>*/
/*                 <h4 class="precio-actual">{{cupon.precio}}€</h4>*/
/*                 */
/*                 <div class="body">*/
/*                     <p>{{cupon.descripcion}}</p>*/
/*                 </div>*/
/* */
/*                 {% if tiempo is not null %}*/
/*                     <div class="col-md-12 tiempo-limitado">TIEMPO LIMITADO!!</div>*/
/*                     <div class="col-md-12 tiempo">{{ tiempo }}</div>*/
/*                 {% else %}*/
/*                     <div class="col-md-12 tiempo">ESTE CUPÓN YA NO ESTÁ A LA VENTA.</div>*/
/*                 {% endif %}*/
/* */
/*                 <div class="col-md-12 caducidad">*/
/*                     <span>Fecha de caducidad para canjear: </span>*/
/*                     <span>{{ cupon.fechaFinCanjeo|date('d/m/Y') }}</span>*/
/*                 </div>*/
/* */
/*                 <a id="a-boton-comprar" href="{{ url('redirigiendo_pasarela_pago')}}" class="btn btn-primary {% if tiempo is null %} disabled {% endif %}">Comprar</a>*/
/*                 */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div id="establecimientos" class="col-md-12 col-xs-12">*/
/* */
/*             <h4 class="titulo-establecimientos">Establecimientos</h4>*/
/*             <p>A continuación le mostramos los establecimientos donde puede canjear este cupón:</p>*/
/* */
/*             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/* */
/*                 {% for e in establecimientos %}*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" role="tab" id="heading{{loop.index0}}">*/
/*                             <h4 class="panel-title">*/
/*                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{loop.index0}}" aria-expanded="true" aria-controls="collapse{{loop.index0}}">*/
/*                                     {{loop.index}} - {{e.titulo}}*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="collapse{{loop.index0}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{loop.index0}}">*/
/*                             <div class="panel-body">*/
/*                                 <div class="col-md-8 col-xs-12">*/
/*                                     <p>{{e.descripcion}}</p>*/
/*                                     <p>Más información:</p>*/
/*                                     <ul>*/
/*                                         <li><strong>Dirección: </strong>{{e.direccion}}, {{e.codigoPostal}}, {{e.municipio}}, {{e.provincia}}</li>*/
/*                                         <li><strong>Teléfono: </strong>{{e.telefono}}</li>*/
/*                                         <li><strong>Email: </strong>{{e.email}}</li>*/
/*                                         <li><strong>Web: </strong>{{e.web}}</li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="gmaps" class="col-md-4 col-xs-12">*/
/*                                     <iframe width="600" height="200" frameborder="0" style="border:0"*/
/*                                     src="https://www.google.com/maps/embed/v1/place?q={{e.latitud}},{{e.longitud}}&key=AIzaSyAl-sd14Rfnj4S4Y0_hnNnoc72CHTCzt0A" allowfullscreen>*/
/*                                     </iframe>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 {% endfor %} */
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
