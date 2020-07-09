$(`.col-6.p-0`).hover(
    function () {
        $('img#' + this.id).addClass('img-hover')
    },
    function () {
        $('img#' + this.id).removeClass('img-hover')
    }
)

var url = 'http://the19am.com/uph/json/?p=coffeeshop'
async function getData() {
    $.get(url).then(res => {
        res.forEach(function (item) {
            $('#product').append(`
            <div class="product card mx-3 my-3">
                <img src='asset/img/product.png' class='product-img' height="100%">
                <div class="product-detail">
                    <h3>${item.nama_produk}</h3>
                    <small>${item.short_desc}<small><br>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <p class="mt-2">Rp. ${item.price}</p>
                </div>
            </div>
            `)
        })
        $('#product-promo').append(`
            <div class="product card mx-3 my-3">
                <img src='asset/img/product.png' class='product-img' height="100%">
                <div class="product-detail">
                    <h3>${res[1].nama_produk}</h3>
                    <small>${res[1].short_desc}<small><br>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <i class="fa fa-star ml-2"></i>
                    <p class="mt-2 product-promo">Rp. ${res[1].price}</p>
                    <p class="mt-2">Rp. ${res[1].price-(res[1].price*0.1)}</p>
                </div>
            </div>
            `)
    })
}
getData();

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

    
    
