(window.onload = function () {
    /* ==========================================================================
    top
    ========================================================================== */

    $('.sliderTopTopics').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else {}
    });


    $('.bnrTopBnr').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else {}
    });

    $('.picMainTopAbout').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else {}
    });
    $('.picMainTopKikkake').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else {}
    });


})();