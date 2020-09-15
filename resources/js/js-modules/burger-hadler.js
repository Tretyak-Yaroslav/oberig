const burgerHadler = {
    mobile_menu: document.querySelector('.mobile-menu'),
    mobile_burger: document.querySelector('.header_burger'),
    left_menu: document.querySelector('.left-menu_container'),

    listener() {
        const { mobile_burger, left_menu, mobile_menu } = this;

        mobile_menu.addEventListener("click", () => {
            if( mobile_burger.classList.contains("open") ){
                mobile_burger.classList.remove("open");
                left_menu.style.display = "none"
            }else{
                mobile_burger.classList.add("open");
                left_menu.style.display = "block"
            }
        });
    },

    init() {
        this.listener();
    }

}

export default burgerHadler;