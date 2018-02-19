 /*$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 100000000000,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );*/
$(document).ready(function(){
    $(".connexion").hide();
   // $(".div1").fadeOut();
   // $("#option").hide();
    $('#connexionbuton').on("click",function(){
            $(".connexion").show();
    $("#myCarousel").hide();
    $(".recherche").hide();
    }); 
    $('#accueil').on("click",function(){
            $(".connexion").hide();
    $("#myCarousel").show();
    $(".recherche").show();
    });
  //  $(window).on("scroll",function(){
       // if($(this).scrollTop()>350){$(".div1").fadeIn(300);}
          
    //})
        $('#accueil').on("click",function(){
 $(".connexion").hide();
    $("#myCarousel").show();
    $(".recherche").show();
        $('.reserver').on("click",function(){
                            $(".load").load("layout.html.twig");

        });
});
    $('#plus').on("click",function(){
    $("#option").show();
                $('.reserver').on("click",function(){

                });

});
});