var nav = document.querySelector('nav');

window.addEventListener('scroll', function(){
    if (window.pageYOffset > 100){
        nav.classList.add('design', 'shadow');
    }else {
        nav.classList.remove('design', 'shadow');
    }
});

