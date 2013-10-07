<?php

/* managers-winners.html */
class __TwigTemplate_b9f7f537850bd44c8630a9d3606f66e65d84cf20f5d800b859ece56d4a844ed7 extends Twig_Template
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
          <div class=\"panel-heading\">Winners</div>
          <div class=\"panel-body\" style=\"padding-top:0px; padding-bottom:0px; padding-top:10px;padding-bottom:10px;\">
                <div id=\"winners-grid\" class=\"backgrid-container\"></div>
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
    },
    {
      name: \"draw_id\",
      label: \"Draw ID\",
      editable: false,
      cell: \"string\" 
    }, 
    {
      name: \"winning_numbers\",
      label: \"Winning Number\",
      editable: false,
      cell: \"string\" 
    },
    {
      name: \"winning_price\",
      label: \"Winning Price(\$)\",
      editable: false,
      cell: \"string\" 
    },
    {
      name: \"ticket_number\",
      label: \"Ticket #\",
      editable: false,
      cell: \"string\" 
    },
    {
      name: \"security_code\",
      label: \"Security Code\",
      editable: false,
      cell: \"string\" 
    },
    {
      name: \"draw_date\",
      label: \"Date\",
      editable: false,
      cell: \"date\"
    }];
    var Draws = Backbone.Model.extend({});
    var PageableDraws = Backbone.PageableCollection.extend({
      model: Draws,
      url: \"/managers/winners/request\",
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
    var \$example2 = \$(\"#winners-grid\");
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
</div>
";
    }

    public function getTemplateName()
    {
        return "managers-winners.html";
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
