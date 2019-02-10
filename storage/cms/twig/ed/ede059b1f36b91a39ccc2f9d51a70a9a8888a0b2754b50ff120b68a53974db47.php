<?php

/* /home/simon511000/sousdomaines/travail/themes/site/partials/html/header.htm */
class __TwigTemplate_89b651331c1067861dd802e1bed220b12ff0b66b6c060b759bdbd26936fdc44a extends Twig_Template
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "  <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark info-color\">
    <a class=\"navbar-brand\" href=\"";
            // line 3
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("accueil");
            echo "\"><i class=\"fa fa-graduation-cap logo\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#nav\"
    aria-controls=\"nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"nav\">
      <ul class=\"navbar-nav mr-auto\">
      
        <li class=\"nav-item\" data-partialid=\"tableau-de-bord\">
          <a class=\"nav-link\" href=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("me-cahier-de-texte");
            echo "\">Tableau de bord</a>
        </li>
        
        <li class=\"nav-item\" data-partialid=\"cahier-de-texte\">
          <a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("me-tableau-de-bord");
            echo "\">Cahier de texte</a>
        </li>
        
      </ul>
    </div>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/simon511000/sousdomaines/travail/themes/site/partials/html/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 16,  40 => 12,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
  <nav class=\"navbar navbar-expand-lg fixed-top navbar-dark info-color\">
    <a class=\"navbar-brand\" href=\"{{ 'accueil'|page }}\"><i class=\"fa fa-graduation-cap logo\"></i></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#nav\"
    aria-controls=\"nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"nav\">
      <ul class=\"navbar-nav mr-auto\">
      
        <li class=\"nav-item\" data-partialid=\"tableau-de-bord\">
          <a class=\"nav-link\" href=\"{{ 'me-cahier-de-texte'|page }}\">Tableau de bord</a>
        </li>
        
        <li class=\"nav-item\" data-partialid=\"cahier-de-texte\">
          <a class=\"nav-link\" href=\"{{ 'me-tableau-de-bord'|page }}\">Cahier de texte</a>
        </li>
        
      </ul>
    </div>
  </nav>
{% endif %}", "/home/simon511000/sousdomaines/travail/themes/site/partials/html/header.htm", "");
    }
}
