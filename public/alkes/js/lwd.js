function slider()
{
	var slider;

	$('.bxslider').bxSlider({
		auto: true,
		speed: 1000,
		autoControls: false,
		adaptiveHeight: true,
		pager : true,
		controls : false
	});

    $('.bxslider-galeri').bxSlider({
        auto: false,
        speed: 1000,
        autoControls: false,
        adaptiveHeight: true,
        controls : false,
        pager : true,
        pagerCustom: '#bx-pager'
    });

	return slider;
}

function collapseMenu()
{
	var menu;

    $('.ikon-menu').click(function() {
        $(this).toggleClass('active');
        $('.menu-header').toggleClass('active');
        return false;
    });

	
    $('#collapse-search, #m-collapse-search').click(function(event) {
        event.preventDefault();

        $('#collapse-search .fa, #m-collapse-search .fa').toggleClass('fa-times');
        $('#search-box').slideToggle();
    });

	return menu;
}

function owlPro()
{
    var owlPro = $('.owl-pro');
    
    owlPro.owlCarousel({
        loop:true,
        margin:30,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 2000,
        responsiveClass:true,
        autoplayHoverPause: true,
        dots: false,
        navClass: [ 'pro-prev', 'pro-next' ],
        responsive:{
            0: {
                items: 1
            },
            576:{
                items:2
            },
            992:{
                items:3
            },
            1025:{
                items:4
            }
        }
    });
    $(".pro-prev").click(function(){
        owlPro.trigger('prev.owl.carousel');
    });
    $(".pro-next").click(function(){
        owlPro.trigger('next.owl.carousel');
    });

    var owlGaleri = $('.owl-galeri');
    
    owlGaleri.owlCarousel({
        loop:true,
        margin:10,
        autoplay: false,
        autoplayTimeout: 1000,
        smartSpeed: 1000,
        responsiveClass:true,
        autoplayHoverPause: true,
        dots: false,
        navClass: [ 'galeri-prev', 'galeri-next' ],
        responsive:{
            0: {
                items:3
            },
            320:{
                items:3
            },
            360:{
                items:3
            },
            480:{
                items:3
            },
            600:{
                items:4
            },
            767:{
                items:5
            },
            992:{
                items:5
            }
        }
    });
    $(".galeri-prev").click(function(){
        owlGaleri.trigger('prev.owl.carousel');
    });
    $(".galeri-next").click(function(){
        owlGaleri.trigger('next.owl.carousel');
    });

    // Owl Customer Service

    var owlCs = $('.owl-cs');
    
    owlCs.owlCarousel({
        loop:true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 2000,
        responsiveClass:true,
        autoplayHoverPause: true,
        dots: false,
        navClass: [ 'cs-prev', 'cs-next' ],
        responsive:{
            0: {
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    $(".cs-prev").click(function(){
        owlCs.trigger('prev.owl.carousel');
    });
    $(".cs-next").click(function(){
        owlCs.trigger('next.owl.carousel');
    });

    return owlPro;
}

// Load all function
(function() {

	slider();
	collapseMenu();
    owlPro();

})();
