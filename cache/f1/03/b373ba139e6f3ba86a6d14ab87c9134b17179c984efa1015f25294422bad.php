<?php

/* index.html */
class __TwigTemplate_f103b373ba139e6f3ba86a6d14ab87c9134b17179c984efa1015f25294422bad extends Twig_Template
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
        ";
        // line 5
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error") != "")) {
            // line 6
            echo "            <div class=\"alert alert-warning\">";
            echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error");
            echo "</div>
        ";
        }
        // line 8
        echo "        ";
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info") != "")) {
            // line 9
            echo "            <div class=\"alert alert-success\">";
            echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info");
            echo "</div>
        ";
        }
        // line 11
        echo "        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Latest Draws</div>
          <div class=\"panel-body\">
                <div id=\"draws-grid\" class=\"backgrid-container\"></div>
          </div>
        </div>
    </div>
    <div class=\" col-lg-4\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Live Draw</div>
          <div class=\"panel-body\" id=\"live-draw\">
              <ul id=\"pingpong\"></ul>
              <script>
                    var left = '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true);
        echo "';
                    var time = '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo "';
                    if(time >= '2100' && time <= '2200'){
                        
                        jQuery.ajax({
                            type: 'GET',
                            url: '/live-draw',
                            complete:function(data){
                                if(data != ''){
                                    for(var i=0;i<data.length;i++){
                                        jQuery('#pingpong').append('<li>'+data[i]+'</li>');
                                    }
                                }
                            }
                        })
                        
                    }else{  
                        var myCountdown2 = new Countdown({
                            time: ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true);
        echo ", 
                            width:200, 
                            height:80, 
                            rangeHi:\"hour\"\t// <- no comma on last item!
                        });    
                    }
              </script>
          </div>
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
      label: \"Winning Price (\$)\",
      editable: false,
      cell: \"string\" 
    }, {
      name: \"date\",
      label: \"Draw Date\",
      editable: false,
      cell: \"string\"
    }];
    var Draws = Backbone.Model.extend({});
    var PageableDraws = Backbone.PageableCollection.extend({
      model: Draws,
      url: \"/managers/draws/request/latest\",
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
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  73 => 27,  69 => 26,  52 => 11,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
