const fontSizeToggler = {
    fs_bigger_btn: document.querySelector('.bigger-fs'),
    fs: document.querySelector("html"),

    listener() {
        const {fs_bigger_btn, fs} = this;
        fs_bigger_btn.addEventListener('click' , function () {

            if( fs_bigger_btn.classList.contains("active") ) {
                fs_bigger_btn.classList.remove("active");
                fs.style.fontSize = "32px"
            } else{
                fs_bigger_btn.classList.add("active");
                fs.style.fontSize = "36px"
            }
        });
    },

    init() {
        this.listener();
    }
}

export default fontSizeToggler;