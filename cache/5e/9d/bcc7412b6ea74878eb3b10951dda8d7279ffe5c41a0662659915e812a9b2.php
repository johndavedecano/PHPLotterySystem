<?php

/* managers-draws.html */
class __TwigTemplate_5e9dbcc7412b6ea74878eb3b10951dda8d7279ffe5c41a0662659915e812a9b2 extends Twig_Template
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
    <div class=\" col-lg-9\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Draws</div>
          <div class=\"panel-body\" style=\"padding-top:0px; padding-bottom:0px; padding-top:10px;padding-bottom:10px;\">
                <div id=\"draws-grid\" class=\"backgrid-container\"></div>
          </div>
        </div>
    </div>
    <script type=\"text/javascript\">
    var columns = [{
      name: \"id\", // The key of the model attribute
      label: \"ID\", // The name to display in the header
      editable: false,
      cell: Backgrid.IntegerCell.extend({
        orderSeparator: ''
      })
    }, {
      name: \"numbers\",
      label: \"Numbers\",
      editable: false,
      cell: \"string\" 
    }, {
      name: \"winning_price\",
      label: \"Winning Price(\$)\",
      editable: false,
      cell: \"string\" 
    }, {
      name: \"date\",
      label: \"Date\",
      editable: false,
      cell: \"string\"
    }, {
        name: \"status\",
        editable: false,
        label: \"Status\",
        cell: Backgrid.SelectCell.extend({
          // It's possible to render an option group or use a
          // function to provide option values too.
          optionValues: [[\"Closed\",\"closed\"], [\"Open\", \"open\"]]
        }),
    }];
    var Draws = Backbone.Model.extend({});
    var PageableDraws = Backbone.PageableCollection.extend({
      model: Draws,
      url: \"/managers/draws/request\",
      state: {
        pageSize: 15
      },
      mode: \"client\",
    });
    
    var pageableDraws = new PageableDraws();
    
    // Set up a grid to use the pageable collection
    var pageableGrid = new Backgrid.Grid({
      columns: columns,
      collection: pageableDraws
    });
    
    // Render the grid
    var \$example2 = \$(\"#draws-grid\");
    \$example2.append(pageableGrid.render().\$el)
    
    // Initialize the paginator
    var paginator = new Backgrid.Extension.Paginator({
      collection: pageableDraws
    });
    
    // Render the paginator
    \$example2.append(paginator.render().\$el);
    
    // Initialize a client-side filter to filter on the client
    // mode pageable collection's cache.
    var filter = new Backgrid.Extension.ClientSideFilter({
      collection: pageableDraws.fullCollection,
      fields: ['date','status']
    });
    
    // Render the filter
    \$example2.prepend(filter.render().\$el);
    
    // Add some space to the filter and move it to the right
    filter.\$el.css({float: \"right\", margin: \"20px\"});
    
    // Fetch some data
    pageableDraws.fetch({reset: true});
    </script>
    <div class=\" col-lg-3\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Create</div>
          <div class=\"panel-body\">
            ";
        // line 97
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error") != "")) {
            // line 98
            echo "                <div class=\"alert alert-warning\">";
            echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error");
            echo "</div>
            ";
        }
        // line 100
        echo "            ";
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info") != "")) {
            // line 101
            echo "                <div class=\"alert alert-success\">";
            echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info");
            echo "</div>
            ";
        }
        // line 103
        echo "            <form role=\"form\" id=\"draw-form\" method=\"POST\">
              <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Winning Price (\$)</label>
                  <input type=\"text\" class=\"form-control required number\" name=\"winning_price\" id=\"winning-price\" placeholder=\"\">
              </div>
              <div class=\"form-group\" style=\"position: relative;\">
                <label for=\"exampleInputEmail1\">Draw Date</label>
                <input type=\"text\" class=\"form-control datepicker required\" name=\"draw_date\" id=\"draw-date\" placeholder=\"\">
              </div>
              <button type=\"submit\" class=\"btn btn-primary\" id=\"submit-draw\">Submit</button>
            </form>
          </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "managers-draws.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 103,  138 => 101,  135 => 100,  129 => 98,  127 => 97,  31 => 3,  28 => 2,);
    }
}
