<?php

/* C:\Users\simon\Desktop\travail/themes/site/partials/NestPasConnecte.htm */
class __TwigTemplate_eec25c41d73c27afb2866a9d242694f41a6c570c8a39ebc43fb9b17a4ba8fc91 extends Twig_Template
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
        echo "<h1>Cette page est réservé aux membres !</h1>
<h2>Veuillez vous connecter.</h2>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\simon\\Desktop\\travail/themes/site/partials/NestPasConnecte.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Cette page est réservé aux membres !</h1>
<h2>Veuillez vous connecter.</h2>", "C:\\Users\\simon\\Desktop\\travail/themes/site/partials/NestPasConnecte.htm", "");
    }
}
