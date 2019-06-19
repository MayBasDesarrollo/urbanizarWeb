$( document ).ready(function() {

    $('#menuToggle').on("click", function(){
        if ($('body').hasClass('open')){
            $('body').removeClass('open');
        }else{
            $('body').addClass('open');
        }
    });

});