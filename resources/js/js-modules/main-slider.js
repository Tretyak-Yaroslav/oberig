const mainSliderArrows = {
    leftArrows: document.querySelectorAll('#vue-slider .js-left'),
    rightArrows: document.querySelectorAll('#vue-slider .js-right'),

    leftArrowsClickListener() {
        this.leftArrows.forEach( arrow => {
            arrow.addEventListener("click",  () => {
                document.querySelector('#vue-slider .prev').click();
            });
    
        });
    },

    rightArrowsClickListener() {
        this.rightArrows.forEach( arrow => {
            arrow.addEventListener("click",  () => {
                document.querySelector('#vue-slider .next').click();
            });
        });
    },

    init() {
        this.leftArrowsClickListener();
        this.rightArrowsClickListener();
    }

}

export default mainSliderArrows;