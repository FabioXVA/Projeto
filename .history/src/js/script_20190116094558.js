$('.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    autoHeight: false,
    loop: true,
    margin: 10,
    nav: true,
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
        setInterval(function () { 
            $(".owl-prev").removeClass("jello-vertical");
        }, 1000);
    });
    $(".owl-next").click(function () {
        $(this).addClass("jello-vertical");
        setInterval(function () {
            $(".owl-next").removeClass("jello-vertical");
        }, 1000);
    });
    $(".owl-next").removeClass("jello-vertical");
    $(".owl-prev").removeClass("jello-vertical");
});