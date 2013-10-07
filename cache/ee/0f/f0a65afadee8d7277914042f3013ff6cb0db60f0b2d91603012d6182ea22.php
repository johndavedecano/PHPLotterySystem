<?php

/* managers-master.html */
class __TwigTemplate_ee0ff0a65afadee8d7277914042f3013ff6cb0db60f0b2d91603012d6182ea22 extends Twig_Template
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
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Lottery System</a>
        </div>
        <div class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">Home</a></li>
            <li class=\"dropdown\">
                <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/managers/draws\">Draws</a>
            </li>
            <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/managers/winners\">Winners</a></li>
            <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/managers/bets\">Bets</a></li>
        </ul>
          <div class=\"navbar-right\" style=\"padding-top: 8px;\">
                <a class=\"btn btn-success\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/managers/logout\"><i class=\"glyphicon glyphicon-cog\"></i> Logout</a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class=\"container\" style=\"padding-top: 25px;\">

        ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
    </div><!-- /.container -->

  </body>
</html>
";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "managers-master.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 60,  155 => 61,  153 => 60,  142 => 52,  136 => 49,  132 => 48,  127 => 46,  122 => 44,  115 => 40,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 12,  35 => 11,  31 => 10,  20 => 1,);
    }
}
