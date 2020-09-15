const Preloader = {
    loadData() {
        return new Promise((resolve, reject) => {
            setTimeout(resolve, 1000);
        })
    },
    init() {
        this.loadData()
                .then(() => {
                    let preloaderEl = document.getElementById('preloader');
                    preloaderEl.classList.add('hidden');
                    preloaderEl.classList.remove('visible');
                });
    }
}

export default Preloader;

