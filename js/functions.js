jQuery('document').ready(function($){

    //MENU RESPONSIVE

var navBtn =$('#navegacion .nav-button'),
    menu=$('#navegacion .menu');
navBtn.click(function(){
        if (menu.css('display')== 'none'){
        $(this).addClass('open');
        menu.addClass('open');
    } else {
        $(this).removeClass('open');
        menu.removeClass('open');

    }

});
});

//SLIDER
$('.slider').flexslider(
   {Animation: "slides",
} 
);