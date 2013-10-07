jQuery(document).ready(function(e){
   
   // DATE PICKER
   jQuery('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
   });
    // VALIDATE DRAW FORM
    jQuery('#draw-form').validate({
         submitHandler: function(form) {
            jQuery('#draw-form').submit();
         }
    });
});