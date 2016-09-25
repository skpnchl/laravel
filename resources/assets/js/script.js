/*(function () {
    var selector = $('[include]')
        , selectorvl = selector.attr('include');
    selector.load(selectorvl);
})();*/

/*scroll specifice aliment animation*/



$(document).ready(function(){

  /* smooth scroll*/
  $(function(){$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);if(t=t.length?t:$("[name="+this.hash.slice(1)+"]"),t.length)return $("html, body").animate({scrollTop:t.offset().top},1e3),!1}})});
  $('body').append('<div class="scrolltop">&lt;</div>');
$(document).on('scroll', function() {
    if ($(this).scrollTop() > 10) {
        $('.scrolltop').show();
    } else {
        $('.scrolltop').hide();
    }
})
$('.scrolltop').click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, "slow");
    return false;
})
$('.scrolltop').draggable();
$('.category').click(function() {
    $('.popup-cat').toggleClass('popup-click');
    $(this).toggleClass('active');
})
$('.mobile-nav').click(function() {
    $(this).toggleClass('open-anim');
    $('#mobile-nav-model').slideToggle()
})
 
});
