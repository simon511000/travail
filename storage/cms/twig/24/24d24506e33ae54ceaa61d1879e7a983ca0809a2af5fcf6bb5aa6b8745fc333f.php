<?php

/* C:\Users\simon\Desktop\travail/themes/site/pages/accueil.htm */
class __TwigTemplate_41cbec22ff3ed51475fd49abb0f987fa1fb99eef819b05cd7f0fff80197f76fe extends Twig_Template
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
            echo "<div class=\"ui placeholder segment\">
<div class=\"ui two column very relaxed stackable grid\">
  <div class=\"column\">
    <div class=\"ui form\">
      <div class=\"field\">
        <label>Username</label>
        <div class=\"ui left icon input\">
          <input type=\"text\" placeholder=\"Username\">
          <i class=\"user icon\"></i>
        </div>
      </div>
      <div class=\"field\">
        <label>Password</label>
        <div class=\"ui left icon input\">
          <input type=\"password\">
          <i class=\"lock icon\"></i>
        </div>
      </div>
      <div class=\"ui blue submit button\">Login</div>
    </div>
  </div>
  <div class=\"middle aligned column\">
    <div class=\"ui big button\"><i class=\"signup icon\"></i> S'inscrire </div>
  </div>
</div>
<div class=\"ui vertical divider\">Ou </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\simon\\Desktop\\travail/themes/site/pages/accueil.htm";
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
        return new Twig_Source("{% if not user %}
<div class=\"ui placeholder segment\">
<div class=\"ui two column very relaxed stackable grid\">
  <div class=\"column\">
    <div class=\"ui form\">
      <div class=\"field\">
        <label>Username</label>
        <div class=\"ui left icon input\">
          <input type=\"text\" placeholder=\"Username\">
          <i class=\"user icon\"></i>
        </div>
      </div>
      <div class=\"field\">
        <label>Password</label>
        <div class=\"ui left icon input\">
          <input type=\"password\">
          <i class=\"lock icon\"></i>
        </div>
      </div>
      <div class=\"ui blue submit button\">Login</div>
    </div>
  </div>
  <div class=\"middle aligned column\">
    <div class=\"ui big button\"><i class=\"signup icon\"></i> S'inscrire </div>
  </div>
</div>
<div class=\"ui vertical divider\">Ou </div>
</div>
{% endif %}", "C:\\Users\\simon\\Desktop\\travail/themes/site/pages/accueil.htm", "");
    }
}
