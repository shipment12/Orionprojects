window.addEventListener('scroll', function(){
    let menuArea = document.getElementById('app');

    if(window.pageYOffset > 0){
        menuArea.classList.add('cus-nav');
        
    }else{
        menuArea.classList.remove('cus-nav')
    }
})

$('a[href^="#"]').bind('click.smoothscroll', function(e) {
    e.preventDefault();
    
    // Get the current target hash
    var target = this.hash;
    
    // Animate the scroll bar action so its smooth instead of a hard jump
    $('html, body').stop().animate({
        'scrollTop' : $(target).offset().top
    }, 900, 'swing', function() {
        window.location.hash = target;
    });
});


