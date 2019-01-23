$('.owl-carousel').owlCarousel({
    items: 1,
    autoplay: true,
    autoHeight: false,
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i class='icon-arrow-left'></i>", "<i class='icon-arrow-right'></i>"],
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


$('nav ul li a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 500);
});
//efeito em portifolio

$(".thumb").hover(
     function() {
        $(this).find(".divider").addClass("fadeInUp");
    }, function() {
        $(this).find(".divider").removeClass("fadeInUp");
    }
);



//modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
});


$('.icon-zoom-in').click(function () {
    var imagem = $(this).attr('id');
    $(".modal-body").html("<img class = 'thumb-img' src='../src/img/" + imagem + "'>");
});


