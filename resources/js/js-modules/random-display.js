const randomDisplay = {
    items: document.querySelectorAll(".right-menu .right-menu_item"),
    default_arr: [],
    itemsLength() {
        return this.items.length;
    },
    createArray() {
        for (let i = 0; i < this.itemsLength(); i++) {
            this.default_arr.push(i);
        }
    },
    shuffle() {
        this.default_arr.sort(() => Math.random() - 0.5);
    },
    hover() {
        setTimeout(function(){
            for(let i = 0; i < randomDisplay.itemsLength(); i++) {
                for (let k = 0; k < randomDisplay.default_arr.length; k++) {
                    setTimeout(function(){
                        randomDisplay.items[randomDisplay.default_arr[k]].classList.add('show', 'with-color');
                        setTimeout(function(){
                            randomDisplay.items[randomDisplay.default_arr[k]].classList.remove('show');
                        }, 70 * (k + 1));
                    }, 150 * (k + 1));
                }
            }
        }, 2500);
        
    },
    init() {
        this.createArray();
        this.shuffle();
        this.hover();
    }
}

export default randomDisplay;