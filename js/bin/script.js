$( document ).ready(function(){
  $('.slider').slider({
    height: 650
  });
  $(".button-collapse").sideNav();
  $('.materialboxed').materialbox();
  $('.scrollspy').scrollSpy({
    scrollOffset:50
  });
});

$(document).ready(function(){
  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if(scroll > 100){
      if(!flag){
        //aqui es blanco
        $( ".main-nav" ).addClass( "scrolling" );
        $(".main-nav__image").attr("src","img/logo.svg");

        
        flag = true;
      }
    }else{
      if(flag){
        //aqui es transparente
        $( ".main-nav" ).removeClass( "scrolling" );
        $(".main-nav__image").attr("src","img/logo-blanco.svg");

          
        flag = false;
      }
    }
  });
});

$(function() {
    $(window).load(function() {
      $('#preloader').fadeOut('slow');
    });
 });