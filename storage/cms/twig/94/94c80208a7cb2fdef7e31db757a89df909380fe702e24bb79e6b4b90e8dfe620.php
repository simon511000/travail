<?php

/* /home/simon511000/sousdomaines/travail/themes/site/pages/me/cahier-de-texte.htm */
class __TwigTemplate_58aae329f27012042fb4ff002a6801e90a0b75fd9d3be89981aaa87ba2f47186 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Cahier de texte</h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/home/simon511000/sousdomaines/travail/themes/site/pages/me/cahier-de-texte.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Cahier de texte</h1>{{ this.page.id }}", "/home/simon511000/sousdomaines/travail/themes/site/pages/me/cahier-de-texte.htm", "");
    }
}
