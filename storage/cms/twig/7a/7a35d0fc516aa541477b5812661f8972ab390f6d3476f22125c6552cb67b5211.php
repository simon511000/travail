<?php

/* C:\Users\simon\Desktop\travail/themes/site/pages/me/cahier-de-texte.htm */
class __TwigTemplate_19ab2376c54a2f0c07013645ce66ae71b49d9fddca384abf3e81f66b0e15d68e extends Twig_Template
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
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cahierDeTexte"] ?? null), "getUserCDT", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cdt"]) {
                // line 3
                echo "    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cdt"], "title", array()), "html", null, true);
                echo "</p>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 5
            echo "  
";
        } else {
            // line 7
            echo "  ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("NestPasConnecte"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\simon\\Desktop\\travail/themes/site/pages/me/cahier-de-texte.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  39 => 5,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
  {% for cdt in cahierDeTexte.getUserCDT %}
    <p>{{ cdt.title }}</p>
  {% endfor %}
  
{% else %}
  {% partial 'NestPasConnecte' %}
{% endif %}", "C:\\Users\\simon\\Desktop\\travail/themes/site/pages/me/cahier-de-texte.htm", "");
    }
}
