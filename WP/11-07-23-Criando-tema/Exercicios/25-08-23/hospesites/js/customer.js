/*
    Desenvolvido por: Alan
*/
window.onscroll = function() {minhafucao()};

var header = document.getElementById("myheader");
var sticky = header.offsetTop;

function minhafucao() {
    if( window.pageYOffset > sticky){
        header.classList.add("sticky");
    }else{
        header.classList.remove("sticky");
    }

    }
