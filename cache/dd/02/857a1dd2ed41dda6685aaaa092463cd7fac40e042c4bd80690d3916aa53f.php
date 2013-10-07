<?php

/* bet.html */
class __TwigTemplate_dd02857a1dd2ed41dda6685aaaa092463cd7fac40e042c4bd80690d3916aa53f extends Twig_Template
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
          <div class=\"panel-heading\">Choose atleast 6 numbers below.</div>
          <div class=\"panel-body\">
                <div id=\"betting-form-container\">
                    ";
        // line 10
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error") != "")) {
            // line 11
            echo "                        <div class=\"alert alert-warning\">";
            echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error");
            echo "</div>
                    ";
        }
        // line 13
        echo "                    ";
        if (($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info") != "")) {
            // line 14
            echo "                        <div class=\"alert alert-success\">";
            echo $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info");
            echo "</div>
                    ";
        }
        // line 16
        echo "                    <form role=\"form\" id=\"betting-form\" method=\"POST\">
                        <input type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" name=\"csrf_token\"/>
                        <ul id=\"betting-form-list\">
                            
                        </ul>
                        <div style=\"clear: both; margin-top:35px;\"><br /></div>
                        <div class=\"form-actions\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary disabled\" disabled=\"disabled\" id=\"place-bet\">Place Bet</button>
                            <label class=\"pull-right\">
                              <input type=\"checkbox\" id=\"lucky-pick\" name=\"lucky_pick\"/> Luck Pick
                            </label>
                        </div>
                    </form>
                    <div style=\"clear: both;\"></div>
                </div>
          </div>
        </div>
    </div>
    <div class=\" col-lg-4\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Todays Draw</div>
          <div class=\"panel-body\"  style=\"text-align: center;\">
                <p style=\"margin: 0px;\">Total Price</p>
                <h1 style=\"margin: 0px;\">\$";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["draw"]) ? $context["draw"] : null), "winning_price"), 2), "html", null, true);
        echo "</h1>
          </div>
        </div>
    </div>
    <div class=\" col-lg-4\">
        <div class=\"panel panel-default\">
          <!-- Default panel contents -->
          <div class=\"panel-heading\">Time Left</div>
          <div class=\"panel-body\"  style=\"text-align: center;\">
              <div style=\"padding-left: 60px;\">
                <script type=\"application/javascript\">
                var myCountdown2 = new Countdown({
                    time: ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true);
        echo ", 
                    width:200, 
                    height:80, 
                    rangeHi:\"hour\"\t// <- no comma on last item!
                });
                // ARRAY PROTOTYPE
                Array.prototype.remove = function() {
                    var what, a = arguments, L = a.length, ax;
                    while (L && this.length) {
                        what = a[--L];
                        while ((ax = this.indexOf(what)) !== -1) {
                            this.splice(ax, 1);
                        }
                    }
                    return this;
                };
                jQuery(document).ready(function(){
                    // LETS LOAD THE CHECKBOXES HERE
                    for(var i=1;i<43;i++){
                        jQuery('#betting-form-list').append('<li>'+i+'<input type=\"checkbox\" value=\"'+i+'\" name=\"bet[]\" class=\"bets\" id=\"check-'+i+'\"></li>');
                    }
                    // NOW LETS 
                    var bets = [];
                    jQuery('.bets').click(function(){
                    if(jQuery('#lucky-pick').is(':checked')){
                        alert(\"You cannot manually select or remove an item while lucky pick is selected.\");
                        return false;
                    }else{
                        
                        if(jQuery(this).is(':checked')){
                            if(bets.length >= 6){
                                alert(\"You can only select atleast 6 numbers.\");
                                return false;
                            }else{
                                jQuery(this).closest('li').css('background-color','#f9d5db');
                                if(jQuery.inArray(this.value, bets) > -1){
                                    //do something
                                    alert(\"This number already exists.\");    
                                    return false;
                                }else{
                                    
                                    bets.push(this.value);
                                    
                                    if(bets.length >= 6){
                                        jQuery('#place-bet').removeAttr('disabled');
                                        jQuery('#place-bet').removeClass('disabled');
                                    }
                                   
                                }
                            }
                        }else{
                            
                            for(var i=0;i<bets.length;i++){
                                if(bets[i] ==  this.value){
                                    bets = bets.splice(bets[i]);
                                }
                            }
                            
                            if(bets.length <= 5){
                                jQuery('#place-bet').attr('disabled','disabled');
                                jQuery('#place-bet').addClass('disabled');
                            }else{
                                jQuery('#place-bet').removeAttr('disabled');
                                jQuery('#place-bet').removeClass('disabled');
                            }
                            jQuery(this).closest('li').removeAttr('style');
                        }  
                    }
                    });
                    
                    // LUCK PICK 
                    jQuery('#lucky-pick').click(function(){
                        if(jQuery(this).is(':checked')){
                            bets = new Array;
                            // UNCHECK ALL THE CHECKBOXES FIRST and REMOVE LI STYLES
                            jQuery('.bets').removeAttr('checked');
                            jQuery('.bets').closest('li').removeAttr('style');
                            // GENERATE SHUFFLE THE ARRAY VALUES
                            sets = [];
                            for(var i=1;i<43;i++){
                                sets.push(i);
                            }
                            sets =  sets.sort(function() { return 0.5 - Math.random() });
                            
                            // LETS CHECK FIRST 6 VALUES ITERATE ALL CHECKBOXES
                            randoms = sets.slice(0,6);
                              for(var x=0;x<randoms.length;x++){
                                    jQuery(\"#check-\"+randoms[x]).prop('checked', true);
                                    jQuery(\"#check-\"+randoms[x]).closest('li').css('background-color','#f9d5db');
                                    bets.push(randoms[x]);
                              }  
                            console.log(bets);
                            // ENABLE BUTTON AT LAST
                            if(bets.length <= 5){
                                jQuery('#place-bet').attr('disabled','disabled');
                                jQuery('#place-bet').addClass('disabled');
                            }else{
                                jQuery('#place-bet').removeAttr('disabled');
                                jQuery('#place-bet').removeClass('disabled');
                            }
                            
                        }else{
                            // UNCHECK ALL THE CHECKBOXES FIRST and REMOVE LI STYLES
                            jQuery('.bets').removeAttr('checked');
                            jQuery('.bets').closest('li').removeAttr('style');
                            jQuery('#lucky-pick').removeAttr(\"checked\");
                            bets = [];
                            if(bets.length <= 5){
                                jQuery('#place-bet').attr('disabled','disabled');
                                jQuery('#place-bet').addClass('disabled');
                            }else{
                                jQuery('#place-bet').removeAttr('disabled');
                                jQuery('#place-bet').removeClass('disabled');
                            }
                        }
                    });
                });
                </script>
              </div>
          </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bet.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 52,  86 => 40,  60 => 17,  57 => 16,  51 => 14,  48 => 13,  42 => 11,  40 => 10,  31 => 3,  28 => 2,);
    }
}
