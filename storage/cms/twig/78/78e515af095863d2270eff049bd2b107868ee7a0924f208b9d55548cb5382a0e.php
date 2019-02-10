<?php

/* /home/simon511000/sousdomaines/travail/themes/site/pages/utilisateur.htm */
class __TwigTemplate_eb58f7ae72d9d97c6c584dd59d6572ff327f2e577c18e6d04065538245559523 extends Twig_Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "  ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("NestPasConnecte"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "  ";
            $context["pageParam"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array(), "any", false, true), "page", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", array(), "any", false, true), "page", array()), "tableau-de-bord")) : ("tableau-de-bord"));
            // line 5
            echo "  ";
            if (call_user_func_array($this->env->getFunction('partial_exists')->getCallable(), array(("page/" . ($context["pageParam"] ?? null))))) {
                // line 6
                echo "    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(("page/" . ($context["pageParam"] ?? null))                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 7
                echo "  ";
            } else {
                // line 8
                echo "    ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("404"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 9
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/home/simon511000/sousdomaines/travail/themes/site/pages/utilisateur.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  45 => 8,  42 => 7,  37 => 6,  34 => 5,  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}
  {% partial 'NestPasConnecte' %}
{% else %}
  {% set pageParam = this.param.page|default('tableau-de-bord') %}
  {% if partial_exists('page/'~pageParam) %}
    {% partial 'page/'~pageParam %}
  {% else %}
    {% partial '404' %}
  {% endif %}
{% endif %}", "/home/simon511000/sousdomaines/travail/themes/site/pages/utilisateur.htm", "");
    }
}
