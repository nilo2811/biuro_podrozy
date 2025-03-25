var obrazyTla = [
    'url("img/header_1.png")',
    'url("img/header_2.png")',
    'url("img/header_3.png")',
    'url("img/header_1.png")',
];
var indexObecnegoTla = 0;
function zmienTlo() {
    var header = document.querySelector('header');
    header.style.backgroundImage = obrazyTla[indexObecnegoTla];
    indexObecnegoTla = (indexObecnegoTla + 1) % obrazyTla.length;
}
document.addEventListener('DOMContentLoaded', function () {
    zmienTlo();
    setInterval(zmienTlo, 4000);
});
jQuery(document).ready(function($){
    setTimeout(function(){
        $('.trans--grow').addClass('grow');
    }, 275);
});
