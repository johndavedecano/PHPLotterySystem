<?php

/* master.html */
class __TwigTemplate_28791c3b00dadd4434736154e33408608d7a1655e85253187f07cf678904c31c extends Twig_Template
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
        echo "/css/datepicker.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/css/styles.css\" rel=\"stylesheet\">
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/jquery.min.js\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/bootstrap-datepicker.js\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/jquery.validate.js\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/functions.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/backgrid.css\" />
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/assets/js/lunr.js\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/assets/js/underscore.js\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/assets/js/backbone.js\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/backgrid.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/extensions/filter/backgrid-filter.css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/extensions/paginator/backgrid-paginator.css\" />
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/assets/js/backbone-pageable.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/extensions/filter/backgrid-filter.js\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/backgrid/extensions/paginator/backgrid-paginator.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["assets_url"]) ? $context["assets_url"] : null), "html", null, true);
        echo "/js/countdown/countdown.js\" type=\"text/javascript\"></script>
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
        // line 41
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">6/42 Lottery System</a>
        </div>
        <div class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Home</a></li>
        </ul>
          <div class=\"navbar-right\" style=\"padding-top: 8px;\">
                <a class=\"btn btn-success\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/managers/login\"><i class=\"glyphicon glyphicon-cog\"></i> Manager Login</a>
                <a class=\"btn btn-success\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/bet\"><i class=\"glyphicon glyphicon-user\"></i> Bet Now</a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class=\"container\" style=\"padding-top: 25px;\">

        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
    </div><!-- /.container -->

  </body>
</html>
";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 57,  149 => 58,  147 => 57,  136 => 49,  132 => 48,  126 => 45,  119 => 41,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  31 => 10,  20 => 1,);
    }
}
