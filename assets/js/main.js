  $(document).ready(function () {
  $('#search-button').click(function () {
    if($('#search-form').length){
      $('#search-form').remove();
      $("<div class='mt-md-0 ml-auto'>").insertBefore("#search-button");
    }
    else 
      $("<form class='form-inline mt-md-0 mx-auto' id='search-form'><input class='form-control' type='text' placeholder='Produto'></form>").insertBefore("#search-button");
  });
});

        

/* 
$(function(){
  $('#page_logo').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 350)
{
    if($('#page_logo').data('size') == 'big')
    {

        $('#page_logo').data('size','small');
        $('#page_logo').stop().animate({
          'padding-top': '5px',
          'padding-bottom': '25px'
        },100);

        $('#resizeable_nav').stop().animate({
          height:'100px'
        },100);

        $('.pageHeader .nav >li >a').stop().animate({
          'line-height': '60px'
        },50);
    }
}
else
  {
    if($('#page_logo').data('size') == 'small')
      {
        $('#page_logo').data('size','big');
        $('#page_logo').stop().animate({
          'padding-top': '15px',
          'padding-bottom': '15px'
        },100);

        $('#resizeable_nav').stop().animate({
          height:'115px'
        },100);

        $('#resizeable_nav').stop().animate({
          height:'125px'
        },50);

        $('.pageHeader .nav >li >a').stop().animate({
          'line-height': '85px'
        },100);
      }  
  }
});
*/
