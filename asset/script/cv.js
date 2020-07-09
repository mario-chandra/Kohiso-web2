function openSidenav(){
    var elements = document.querySelectorAll('.sidenav')
    console.log(elements)
    var instances = M.Sidenav.init(elements[0])
    console.log(instances)
    instances.open();   
 }

$('div.img-container').hover(
function(){
    $('div.img-overlay').css('transition-duration','0.4s')
    $('div.img-overlay').css('opacity',0.4)
},
function(){
    $('div.img-overlay').removeAttr('style')
}
)