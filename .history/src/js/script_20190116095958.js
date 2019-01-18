$('.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    autoHeight: false,
    loop: true,
    margin: 10,
    nav: true,
     navText: ["<button type='button' role='presentation' class='owl-prev'><i aria-label='icon-arrow-left'></i></button>", "<button type='button' role='presentation' class='owl-next'><i aria-label='icon-arrow-right'></i></button>"],
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        
    }
})
$(".document").ready(function(){
    $(".owl-prev").click(function () {
        $(this).addClass("jello-vertical");
        setTimeout(function () {
            $(".owl-prev").removeClass("jello-vertical");
        }, 600);
    });
    $(".owl-next").click(function () {
        $(this).addClass("jello-vertical");
        setTimeout(function () {
            $(".owl-next").removeClass("jello-vertical");
        }, 600);
    });
});