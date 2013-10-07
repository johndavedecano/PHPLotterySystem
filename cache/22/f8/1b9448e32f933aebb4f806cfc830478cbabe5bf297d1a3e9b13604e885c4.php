<?php

/* managers-login.html */
class __TwigTemplate_22f81b9448e32f933aebb4f806cfc830478cbabe5bf297d1a3e9b13604e885c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("auth-master.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "auth-master.html";
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
    <div class=\" col-lg-4\" style=\"margin:auto; float:none;\">
        ";
        // line 5
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error") != "")) {
            // line 6
            echo "            <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Managers Login</div>
          <div class=\"panel-body\">
            <form role=\"form\" method=\"POST\">
              <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Enter email\" required=\"required\"/>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\" required=\"required\"/>
              </div>
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\" name=\"remember\"> Remember
                </label>
              </div>
              <button type=\"submit\" class=\"btn btn-primary pull-right\">Log Me In!</button>
            </form>
          </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "managers-login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
