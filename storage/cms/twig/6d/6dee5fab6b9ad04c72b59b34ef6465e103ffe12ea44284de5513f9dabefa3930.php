<?php

/* /home/simon511000/sousdomaines/travail/themes/site/partials/page/cahier-de-texte.htm */
class __TwigTemplate_e49f5c4168432008de322605d6e872092d40024ee394087cbbccc384186cfb49 extends Twig_Template
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
        echo "<h1>Cahier de texte</h1>
";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cahierDeTexte"] ?? null), "getUserCDT", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cdt"]) {
                // line 4
                echo "    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cdt"], "title", array()), "html", null, true);
                echo "</p>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  
";
        } else {
            // line 8
            echo "  ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("NestPasConnecte"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/home/simon511000/sousdomaines/travail/themes/site/partials/page/cahier-de-texte.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 6,  33 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Cahier de texte</h1>
{% if user %}
  {% for cdt in cahierDeTexte.getUserCDT %}
    <p>{{ cdt.title }}</p>
  {% endfor %}
  
{% else %}
  {% partial 'NestPasConnecte' %}
{% endif %}", "/home/simon511000/sousdomaines/travail/themes/site/partials/page/cahier-de-texte.htm", "");
    }
}
