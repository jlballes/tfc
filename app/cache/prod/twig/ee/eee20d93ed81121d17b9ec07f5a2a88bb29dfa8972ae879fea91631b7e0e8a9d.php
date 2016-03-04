<?php

/* ComprasBundle:Default:index.html.twig */
class __TwigTemplate_44b6d62995479372eb8a99d1f5cc1b8206f3968939f4c8dd3b2a550f32a80bd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "ComprasBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
