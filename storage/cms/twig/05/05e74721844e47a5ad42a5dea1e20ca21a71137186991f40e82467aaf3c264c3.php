<?php

/* C:\Users\simon\Desktop\travail/themes/site/partials/modal/login.htm */
class __TwigTemplate_b1fa244e6eac474c644b1df447efb17dd0107172b9e8028e61df18ee527a9cd2 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Connection\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Se connecter</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3\">
      \t<form data-request=\"onSignin\">
      \t\t<div class=\"md-form\">
      \t\t\t<i class=\"fas fa-user prefix\"></i>
      \t\t\t<input type=\"text\" class=\"form-control\" id=\"loginPseudo\" name=\"login\">
      \t\t\t<label for=\"loginPseudo\">Ton Pseudo</label>
      \t\t</div>
      \t\t<div class=\"md-form\">
      \t\t\t<i class=\"fas fa-unlock prefix\"></i>
      \t\t\t<input type=\"password\" class=\"form-control\" id=\"loginPassword\" name=\"password\">
      \t\t\t<label for=\"loginPassword\">Ton Mot de Passe</label>
      \t\t</div>
      \t\t<div class=\"modal-footer d-flex justify-content-center\">
\t\t\t\t    <button class=\"btn btn-default\" type=\"submit\" data-attach-loading>Connexion</button>
\t\t\t\t  </div>
      \t</form>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\simon\\Desktop\\travail/themes/site/partials/modal/login.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Connection\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Se connecter</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3\">
      \t<form data-request=\"onSignin\">
      \t\t<div class=\"md-form\">
      \t\t\t<i class=\"fas fa-user prefix\"></i>
      \t\t\t<input type=\"text\" class=\"form-control\" id=\"loginPseudo\" name=\"login\">
      \t\t\t<label for=\"loginPseudo\">Ton Pseudo</label>
      \t\t</div>
      \t\t<div class=\"md-form\">
      \t\t\t<i class=\"fas fa-unlock prefix\"></i>
      \t\t\t<input type=\"password\" class=\"form-control\" id=\"loginPassword\" name=\"password\">
      \t\t\t<label for=\"loginPassword\">Ton Mot de Passe</label>
      \t\t</div>
      \t\t<div class=\"modal-footer d-flex justify-content-center\">
\t\t\t\t    <button class=\"btn btn-default\" type=\"submit\" data-attach-loading>Connexion</button>
\t\t\t\t  </div>
      \t</form>
      </div>
    </div>
  </div>
</div>", "C:\\Users\\simon\\Desktop\\travail/themes/site/partials/modal/login.htm", "");
    }
}
