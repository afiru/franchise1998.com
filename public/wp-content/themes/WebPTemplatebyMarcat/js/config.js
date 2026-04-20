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
    const swiper = new Swiper('.jsactionLxn', {
        // オプション設定
        scrollbar: {
            el: '.topPicUpScrollbar', // HTML側のクラス名と合わせる
            hide: false,
        },

    });
});