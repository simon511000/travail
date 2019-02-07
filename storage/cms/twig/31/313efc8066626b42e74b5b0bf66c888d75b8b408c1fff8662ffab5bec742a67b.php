<?php

/* C:\Users\simon\Desktop\travail/themes/site/partials/html/header.htm */
class __TwigTemplate_883efc2692cd4126f693d349f32d0dde87ff58b10f055c0a768be1aee62116ec extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
            echo "
  <a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Sign out</a>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\simon\\Desktop\\travail/themes/site/partials/html/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if user %}
  {{ user.username }}
  <a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Sign out</a>
{% endif %}", "C:\\Users\\simon\\Desktop\\travail/themes/site/partials/html/header.htm", "");
    }
}
