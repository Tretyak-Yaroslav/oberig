const lazyLoader = {
    targets: document.querySelectorAll('.lazy'),

    lazyLoad(target) {
        const io = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-lazy');

                    img.setAttribute('src', src);
                    img.classList.add('fade');

                    observer.disconnect();
                }
            });
        });

        io.observe(target)
    },

    loadIE() {
        Array.prototype.forEach.call(this.targets, function (img) {
            const src = img.getAttribute('data-lazy');
            img.setAttribute('src', src);
        });
    },

    init() {
        let isIE = !!navigator.userAgent.match(/Trident/g) || !!navigator.userAgent.match(/MSIE/g);
        return !isIE ? this.targets.forEach(this.lazyLoad) : this.loadIE();
    }
}

export default lazyLoader;