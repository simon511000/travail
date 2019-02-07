<?php

/* C:\Users\simon\Desktop\travail/themes/site/layouts/defaut.htm */
class __TwigTemplate_9b4a95bfcc16741261b97baff79a91652fb74e5baa2b61a9ad9d93ca0ad33909 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " | Espace de travail</title>
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
  <link href=\"//oss.maxcdn.com/semantic-ui/2.1.6/semantic.min.css\" rel=\"stylesheet\">
  ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 11
        echo "</head>
<body>
\t<header>
    ";
        // line 14
        if (($context["user"] ?? null)) {
            // line 15
            echo "\t\t  ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 16
            echo "    ";
        }
        // line 17
        echo "\t</header>
\t<main>
\t\t<div class=\"container\">
\t\t\t";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 21
        echo "\t\t</div>
\t</main>
\t<footer>
\t\t";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("html/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "\t</footer>
  <script type=\"text/javascript\" src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "@jquery", 1 => "assets/js/semantic.min.js", 2 => "assets/js/script.js"));
        echo "\"></script>
  ";
        // line 27
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 28
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 29
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\simon\\Desktop\\travail/themes/site/layouts/defaut.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  93 => 28,  78 => 27,  74 => 26,  71 => 25,  67 => 24,  62 => 21,  60 => 20,  55 => 17,  52 => 16,  47 => 15,  45 => 14,  40 => 11,  37 => 10,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>{{ this.page.title }} | Espace de travail</title>
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
  <link href=\"//oss.maxcdn.com/semantic-ui/2.1.6/semantic.min.css\" rel=\"stylesheet\">
  {% styles %}
</head>
<body>
\t<header>
    {% if user %}
\t\t  {% partial \"html/header\" %}
    {% endif %}
\t</header>
\t<main>
\t\t<div class=\"container\">
\t\t\t{% page %}
\t\t</div>
\t</main>
\t<footer>
\t\t{% partial \"html/footer\" %}
\t</footer>
  <script type=\"text/javascript\" src=\"{{ ['@jquery','assets/js/semantic.min.js','assets/js/script.js']|theme }}\"></script>
  {% framework extras %}
  {% scripts %}
</body>
</html>", "C:\\Users\\simon\\Desktop\\travail/themes/site/layouts/defaut.htm", "");
    }
}
