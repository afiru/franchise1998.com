(window.onload = function () {
    /* ==========================================================================
    top
    ========================================================================== */

    $('.sliderTopTopics').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else { }
    });


    $('.bnrTopBnr').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else { }
    });

    $('.picMainTopAbout').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else { }
    });

    $('.picMainTopKikkake').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else { }
    });

    $('.secTopMade').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('opacity_0_fade_set2606');
        } else { }
    });

    $('.picTopCollection').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('activeImg');
        } else { }
    });

    $('.topLimitedSliderLxn').addClass('opacity_0_fade_in');
    $('.topLimitedSliderLxn').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else { }
    });

    $('.ulTopSelect').addClass('opacity_list_0_fade_set2606');
    $('.ulTopSelect').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else { }
    });

    $('.ulNavTopOnline').addClass('opacity_list_0_fade_set2606');
    $('.ulNavTopOnline').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else { }
    });

    $('.ulTopNav').addClass('opacity_list_0_fade_set2606');
    $('.ulTopNav').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else { }
    });

    $('.topPicUpLxn').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('opacity_0_fade_set2606');
        } else { }
    });

    $('.instagramFeed').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('opacity_0_fade_set2606');
        } else { }
    });

    $('.ulTopGifts').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('opacity_0_fade_set2606');
        } else { }
    });



    $('.secTopThinks').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
            $(this).addClass('opacity_0_fade_set2606');
        } else { }
    });



})();