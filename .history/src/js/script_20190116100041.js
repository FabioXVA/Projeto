$('.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    autoHeight: false,
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i aria-label='icon-arrow-left'></i>", "<i aria-label='icon-arrow-right'></i>"],
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