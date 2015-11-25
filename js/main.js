(function ($) {
    "use strict";
    $(document).ready( function() {
        
        $('#ok').click( function () {
            var name = $('#my-name').val();
            if(''===name || undefined===name){
                $('#my-name').val("Pupil");
            }else{
                $('#my-name').hide();
                $('#ok').hide();           
             
                $('#txt').show('slow'); 
                $('#txt').text("Привет, "+name+"! Добро пожаловать!");
            }
        }); 
    });  

}(jQuery));