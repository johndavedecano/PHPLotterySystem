<?php

/* auth-master.html */
class __TwigTemplate_9fbe7c0752b8884ddd309832a56df38b38d92591c966efd9628047f1da5c3312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Lottery System</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/css/styles.css\" rel=\"stylesheet\">
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/jquery.min.js\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Lottery System</a>
        </div>
        <div class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Home</a></li>
        </ul>
          <div class=\"navbar-right\" style=\"padding-top: 8px;\">
                <a class=\"btn btn-success\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/managers/login\"><i class=\"glyphicon glyphicon-cog\"></i> Manager Login</a>
                <a class=\"btn btn-success\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/bet\"><i class=\"glyphicon glyphicon-user\"></i> Bet Now</a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class=\"container\" style=\"padding-top: 25px;\">

        ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "
    </div><!-- /.container -->

  </body>
</html>
";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "auth-master.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  89 => 43,  87 => 42,  76 => 34,  72 => 33,  66 => 30,  59 => 26,  43 => 13,  39 => 12,  35 => 11,  31 => 10,  20 => 1,);
    }
}
