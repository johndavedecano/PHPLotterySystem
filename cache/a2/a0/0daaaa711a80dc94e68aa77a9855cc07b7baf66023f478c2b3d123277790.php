<?php

/* managers-bets.html */
class __TwigTemplate_a2a00daaaa711a80dc94e68aa77a9855cc07b7baf66023f478c2b3d123277790 extends Twig_Template
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
          <div class=\"panel-heading\">Bets</div>
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
      name: \"numbers\",
      label: \"Bet Numbers\",
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
      name: \"lucky_pick\",
      label: \"Lucky Pick\",
      editable: false,
        cell: Backgrid.SelectCell.extend({
          // It's possible to render an option group or use a
          // function to provide option values too.
          optionValues: [[\"Yes\",\"1\"], [\"No\", \"0\"]]
        }),
    },
    {
      name: \"date\",
      label: \"Bet Date\",
      editable: false,
      cell: \"string\"
    }];
    var Draws = Backbone.Model.extend({});
    var PageableDraws = Backbone.PageableCollection.extend({
      model: Draws,
      url: \"/managers/bets/request\",
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
      fields: ['date','status','ticket_number']
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
        return "managers-bets.html";
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
