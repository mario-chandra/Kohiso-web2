$(`.col-6.p-0`).hover(
    function () {
        $('img#' + this.id).addClass('img-hover')
    },
    function () {
        $('img#' + this.id).removeClass('img-hover')
    }
)

$('div.press-main').hover(function () {
    $(this).children('h1').css('display','none')
    $(this).children('div').css('display','block')
    $(this).children('div').addClass('show-detail')
}, function () {
    $(this).removeAttr('style')
    $(this).children('h1').css('display','block')
    $(this).children('div').css('display','none')
    $(this).children('div').removeClass('show-detail')
})

$('.head-title').addClass('is-visible')

$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + window.innerHeight;
    $(".fade-in-section").each(function() {
      var objectBottom = $(this).offset().top
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        $(this).addClass('is-visible');
      }
    });
  }).scroll();
});

$('.btn-amount').click(function(ev){
    ev.preventDefault();
    $('.btn-amount.active').removeClass('active')
    $(this).addClass('active')
})
