(window.onload = function () {
    /* ==========================================================================
    top
    ========================================================================== */
    $('.topMovie').on('inview', function (event, isInView) {
        if (isInView) {
            $(this).addClass('active');
        } else { }
    });
})();