// DOM が完全に読み込まれてから実行
document.addEventListener('DOMContentLoaded', () => {
    if (typeof Lenis !== 'undefined') {
        const lenis = new Lenis({
            smooth: true
        });

        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)
    } else {
        console.error('Lenis is not loaded yet!');
    }
});


window.addEventListener('load', function () {
    //
    if (window.innerWidth < 768) {
        spaceBetween = 10;

    } else {
        spaceBetween = 53;
    }
    const fvSwiper = new Swiper(".jsSliderTopTopics", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: spaceBetween,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        speed: 2000,
        navigation: {
            nextEl: ".nextSliderTopTopics",
            prevEl: ".prevSliderTopTopics",
        },
    });
    //LIMITED
    let spaceBetween01;
    let totalSlides = document.querySelectorAll('.jsactionLxn .swiper-slide').length;
    let slidesPerView = window.innerWidth < 768 ? 2 : 4;
    const isSlideCountLessThanSlidesPerView = totalSlides + 1 <= Math.floor(slidesPerView);
    let draggable = !isSlideCountLessThanSlidesPerView;

    if (window.innerWidth > 768) {
        const justifyContent = !isSlideCountLessThanSlidesPerView ? 'flex-start' : 'center';
        $('.jsactionLxn .swiper-wrapper').css('justify-content', justifyContent);
    }
    if (window.innerWidth < 768) {
        dragSize = 52;
        spaceBetween01 = 22;
    } else {
        dragSize = 114;
        spaceBetween01 = 36;
    }

    const mainGallerySlider = new Swiper('.jsactionLxn', {
        slidesPerView: slidesPerView,
        spaceBetween: spaceBetween01,
        loop: false,
        allowTouchMove: !isSlideCountLessThanSlidesPerView,
        scrollbar: {
            el: '.topLimitedSliderScrollbar',
            draggable: draggable,
            dragSize: dragSize,
            snapOnRelease: false,
            dragClass: 'slider__btn',
        },
    });

    //PICK UP
    let spaceBetween02;
    let totalSlides02 = document.querySelectorAll('.jsactionLxn02 .swiper-slide').length;
    let slidesPerView02 = window.innerWidth < 768 ? 2 : 3;
    const isSlideCountLessThanSlidesPerView02 = totalSlides02 + 1 <= Math.floor(slidesPerView02);
    let draggable02 = !isSlideCountLessThanSlidesPerView02;

    if (window.innerWidth > 768) {
        const justifyContent = !isSlideCountLessThanSlidesPerView02 ? 'flex-start' : 'center';
        $('.jsactionLxn02 .swiper-wrapper').css('justify-content', justifyContent);
    }
    if (window.innerWidth < 768) {
        dragSize02 = 52;
        spaceBetween02 = 22;
    } else {
        dragSize02 = 114;
        spaceBetween02 = 36;
    }

    const mainGallerySlider02 = new Swiper('.jsactionLxn02', {
        slidesPerView: slidesPerView02,
        spaceBetween: spaceBetween02,
        loop: false,
        allowTouchMove: !isSlideCountLessThanSlidesPerView02,
        scrollbar: {
            el: '.topPicUpScrollbar',
            draggable: draggable02,
            dragSize: dragSize02,
            snapOnRelease: false,
            dragClass: 'slider__btn02',
        },
    });
});

$(function () {
    //PCハンバーガー
    $('.jsbtnNavOpenPc').on('click', function () {

        $('.jsheaderMenuPc').animate({
            'right': '0%',
            'opacity': '100%'
        }, 0);
    });

    $('.jsCloseMenuPc').on('click', function () {

        $('.jsheaderMenuPc').animate({
            'right': '-100%',
            'opacity': '0%'
        }, 0);
    });
    $('.jsheaderMenuPc a').on('click', function () {

        $('.jsheaderMenuPc').animate({
            'right': '-100%',
            'opacity': '0%'
        }, 0);
    });

    //Spハンバーガー
    $('.jsbtnNavOpenSp').on('click', function () {

        $('.jsheaderMenuSp').animate({
            'right': '0%',
            'opacity': '100%'
        }, 0);
    });

    $('.jsCloseMenuSp').on('click', function () {

        $('.jsheaderMenuSp').animate({
            'right': '-100%',
            'opacity': '0%'
        }, 0);
    });
    $('.jsheaderMenuSp a').on('click', function () {

        $('.jsheaderMenuSp').animate({
            'right': '-100%',
            'opacity': '0%'
        }, 0);
    });

    //商品を探す
    $('.jbtnHeaderNavBtmPc').on('click', function () {

        $('.jsheaderFixedSearch').animate({
            'right': '0%',
            'opacity': '100%'
        }, 0);
    });

    $('.closeHeaderFixedSearch').on('click', function () {

        $('.jsheaderFixedSearch').animate({
            'right': '-100%',
            'opacity': '0%'
        }, 0);
    });
    $('.closeHeaderFixedSearch a').on('click', function () {

        $('.jsheaderFixedSearch').animate({
            'right': '-100%',
            'opacity': '0%'
        }, 0);
    });



    //お買い物ガイド
    $('.jstitleCntLiSbShoppingguideAllPosts').on('click', function () {
        $('.jsHeaderSpTrigger').slideToggle();

        $(this).toggleClass('on off');

        $(this)
            .next('.jsmainCntLiSbShoppingguideAllPostsLxn')
            .stop(true, true)
            .slideToggle();
    });
});