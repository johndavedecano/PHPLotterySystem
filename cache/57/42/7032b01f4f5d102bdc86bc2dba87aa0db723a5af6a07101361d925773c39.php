<?php

/* managers-dashboard.html */
class __TwigTemplate_57427032b01f4f5d102bdc86bc2dba87aa0db723a5af6a07101361d925773c39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("managers-master.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "managers-master.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row-fluid\">
    <div class=\" col-lg-12\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Latest Bets</div>
          <div class=\"panel-body\">
            <p>...</p>
          </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "managers-dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
