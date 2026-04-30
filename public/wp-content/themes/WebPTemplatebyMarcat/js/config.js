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
//スムーススクロール
$(window).on('load', function () {
    let urlHash = location.hash;
    if (urlHash) {
        $('body,html').stop().scrollTop(0);
        var target = $(urlHash);
        var position = target.offset().top;
        $('body,html').stop().animate({
            scrollTop: position
        }, 500);
    }
    $('a[href^="#"]').click(function () {
        var href = $(this).attr("href");
        var target = $(href);
        var position = target.offset().top;
        $('body,html').stop().animate({
            scrollTop: position
        }, 500);
    });
});

$(window).scroll(function () {
    let trigger;

    if ($(window).width() <= 375) {
        // SP
        trigger = $(window).width() * 2.0107; // 201.07vw
    } else {
        // PC
        trigger = $(window).width() * 0.4984; // 49.84vw
    }

    if ($(this).scrollTop() >= trigger) {
        $('.baseHeader').addClass('active');
        $('.spFixedMenu').addClass('active');
    } else {
        $('.baseHeader').removeClass('active');
        $('.spFixedMenu').removeClass('active');
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
    if (document.querySelector('.jsactionLxn')) {
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
    }

    //PICK UP
    if (document.querySelector('.jsactionLxn02')) {
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
            spaceBetween02 = 14;
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
    }

    //gift
    if (document.querySelector('.jsactionLxnGift')) {
        let spaceBetween03;
        let totalSlides03 = document.querySelectorAll('.jsactionLxnGift .swiper-slide').length;
        let slidesPerView03 = window.innerWidth < 768 ? 2 : 4;
        const isSlideCountLessThanSlidesPerView03 = totalSlides03 + 1 <= Math.floor(slidesPerView03);
        let draggable03 = !isSlideCountLessThanSlidesPerView03;

        if (window.innerWidth > 768) {
            const justifyContent03 = !isSlideCountLessThanSlidesPerView03 ? 'flex-start' : 'center';
            $('.jsactionLxnGift .swiper-wrapper').css('justify-content', justifyContent03);
        }
        if (window.innerWidth < 768) {
            dragSize03 = 52;
            spaceBetween03 = 22;
        } else {
            dragSize03 = 114;
            spaceBetween03 = 36;
        }

        const mainGallerySlider03 = new Swiper('.jsactionLxnGift', {
            slidesPerView: slidesPerView03,
            spaceBetween: spaceBetween03,
            loop: false,
            allowTouchMove: !isSlideCountLessThanSlidesPerView03,
            scrollbar: {
                el: '.GiftProductsSliderScrollbar',
                draggable: draggable03,
                dragSize: dragSize03,
                snapOnRelease: false,
                dragClass: 'slider__btn03',
            },
        });
    }
    //商品詳細
    const thumbSwiper = new Swiper('.singleProductSliderThumbs', {

        slidesPerView: 'auto',
        loop: false,
    });

    const mainSwiper = new Swiper('.singleProductSlider', {
        loop: false,
        effect: 'fade',          // フェード切替
        fadeEffect: {
            crossFade: true      // クロスフェード
        },
        thumbs: {
            swiper: thumbSwiper,
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

    //のし
    $('.jsbtnYakigashiProductNoshi').on('click', function () {
        $(this).next('.jscntYakigashiProductNoshi').slideToggle();
        $(this).toggleClass('on off');

    });

    //商品一覧
    $('.jstitleNavSidebarProduct').on('click', function () {
        $(this).next('.ulNavSidebarProductWap').slideToggle();
        $(this).toggleClass('on off');

    });

});