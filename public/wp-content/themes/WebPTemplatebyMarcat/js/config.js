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