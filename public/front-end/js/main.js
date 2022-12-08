$('.slick_banner').slick({
    draggable: true,
    arrows: true,
    autoplay:true,
    fade: true,
    speed: 900,
    dots:true,
    infinite: true,
    cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-thin fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-thin fa-chevron-right"></i></button>'
});

$('.slider_product').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-thin fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-thin fa-chevron-right"></i></button>'
});



window.addEventListener('scroll', event => {
    var navbarScroll = function () {
        const headerTop = document.body.querySelector('.header');
        if (!headerTop) {
            return;
        }
        if (window.scrollY === 0) {
            headerTop.classList.remove('active')
            headerTop.css('background', 'linear-gradient(180deg, rgba(0, 0, 0, 0.65) -24.84%, rgba(0, 0, 0, 0) 70.78%)')
        } 
        if(window.scrollY > 100){
            headerTop.classList.add('active')
        }

    };
    navbarScroll();
});

$('.btn-search').click(function (){
    $('.search-body').addClass('active');
})

$('.btn-search-close').click(function (){
    $('.search-body').removeClass('active');
})


$('.btn_show-menu').click(function(){
    $('.nav_mobile-menu').addClass('active');
})

$('.close-nav_mobile').click(function(){
    $('.nav_mobile-menu').removeClass('active');
})



function checkUrl(){
    var url = location.href;
    var lastChart = url.slice(-1);
    var lastChart2 = url.slice(-9);
    if(lastChart == '/'){
        $('.header').removeClass('block');
    }
    if(lastChart2 == 'trang-chu'){
        $('.header').removeClass('block');
    }
}
checkUrl();


$('.item-question-body').click(function(){
    $(this).find('.show-answer').toggleClass('active');
    $(this).find('.hide-answer').toggleClass('active');
    $(this).children('.item-answer').toggleClass('active');
})

$('.zoom_img-loader').click(function(){
    var src = $(this).attr('src');
    $('.zoom_loaded-img').addClass('active');
    $('.loaded-img').attr('src',src);

})

$('.zoom_close-img').click(() => $('.zoom_loaded-img').removeClass('active'))
// $('.zoom_in-img').click(function(){
//     $('.loaded-img').addClass('zoom-in');
// })



//=------------- Filter Item -------------//

$('.filter-all').click(function(){
    $(this).addClass('active');
    $('.filter-male').removeClass('active');
    $('.filter-female').removeClass('active');
    $('.filter-name').text('Tất cả');

    // $('.gender_0, .gender_1, .gender_2').removeClass('hide');
    $('.gender_0, .gender_1, .gender_2').fadeIn();

})
$('.filter-male').click(function(){
    $(this).addClass('active');
    $('.filter-all').removeClass('active');
    $('.filter-female').removeClass('active');
    $('.filter-name').text('Nam');

    // $('.gender_1').removeClass('hide');
    // $('.gender_0, .gender_2').addClass('hide');

    $('.gender_1').fadeIn();
    $('.gender_0, .gender_2').fadeOut();

})
$('.filter-female').click(function(){
    $(this).addClass('active');
    $('.filter-male').removeClass('active');
    $('.filter-all').removeClass('active');
    $('.filter-name').text('Nữ');

    // $('.gender_2').removeClass('hide');
    // $('.gender_0, .gender_1').addClass('hide');

    $('.gender_2').fadeIn();
    $('.gender_0, .gender_1').fadeOut();
})



