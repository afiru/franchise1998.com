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
    let totalSlides = document.querySelectorAll('.swiperaction .swiper-slide').length;
    let slidesPerView = window.innerWidth < 768 ? 1.95 : 5;
    const isSlideCountLessThanSlidesPerView = totalSlides + 1 <= Math.floor(slidesPerView);
    let draggable = !isSlideCountLessThanSlidesPerView;

    if (window.innerWidth > 768) {
        const justifyContent = !isSlideCountLessThanSlidesPerView ? 'flex-start' : 'center';
        $('.swiperaction .swiper-wrapper').css('justify-content', justifyContent);
    }
    if (window.innerWidth < 768) {
        dragSize = 52;
        spaceBetween01 = 15;
    } else {
        dragSize = 114;
        spaceBetween01 = 34;
    }

    const mainGallerySlider = new Swiper('.swiperaction', {
        slidesPerView: slidesPerView,
        spaceBetween: spaceBetween01,
        loop: false,
        allowTouchMove: !isSlideCountLessThanSlidesPerView,
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: draggable,
            dragSize: dragSize,
            snapOnRelease: false,
            dragClass: 'slider__btn',
        },
    });

});