<?php

/* print.html */
class __TwigTemplate_8be7d1b0c38820cc299672a4b1d179a10f7611068e02d6ee1a216932aa1a16c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("master.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html";
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
    <div class=\" col-lg-8\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Print Ticket</div>
          <div class=\"panel-body\">
                <div id=\"betting-form-container\">
                     <table class=\"table table-striped table-hover table-striped\" id=\"ticket\">
                     <table class=\"table table-striped table-hover table-striped\" id=\"ticket\">
                            <tr>
                                <td><strong>Draw ID:</strong></td>
                                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "draw_id"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td><strong>Ticket Number:</strong></td>
                                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "ticket_number"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td><strong>Security Code:</strong></td>
                                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "security_code"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td><strong>Numbers:</strong></td>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "numbers"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td><strong>Lucky Pick:</strong></td>
                                <td>
                                    ";
        // line 31
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "lucky_pick") == 1)) {
            // line 32
            echo "                                        Yes
                                    ";
        } else {
            // line 34
            echo "                                        No
                                    ";
        }
        // line 36
        echo "                                </td>
                            </tr>
                            <tr>
                                <td><strong>Draw Date:</strong></td>
                                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at"), "F j,Y"), "html", null, true);
        echo "</td>
                            </tr>
                     </table>
                     </table>
                     <div style=\"text-align: center;\">
                            <script type=\"text/javascript\">
                                jQuery(document).ready(function(){
                                    jQuery('#print-ticket').click(function(){
                                        window.print();
                                    });
                                });
                            </script>
                            <button class=\"btn btn-block btn-primary\" id=\"print-ticket\"><i class=\"glyphicon glyphicon-print\"></i> Print Ticket</button>
                     </div>   
                    <div style=\"clear: both;\"></div>
                </div>
          </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "print.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  83 => 36,  79 => 34,  75 => 32,  73 => 31,  65 => 26,  58 => 22,  51 => 18,  44 => 14,  31 => 3,  28 => 2,);
    }
}
