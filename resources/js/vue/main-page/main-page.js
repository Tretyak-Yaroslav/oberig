window.Vue = require('vue');

import Slider from './components/slider';
import left_menu from './components/left-menu';
import Articles from './components/articles';
import modal from './components/modal';




if (document.getElementById('left-menu')) {
    new Vue({
        el: '#left-menu',
        components: {
            left_menu,
        },
      }
    );
}

if (document.getElementById('vue-slider')) {
    new Vue({
        el: '#vue-slider',
        components: {
            Slider,
        },
      }
    );
}

if (document.getElementsByClassName('blog-article').length) {
    let articles = document.getElementsByClassName('blog-article');

    for (let i = 0; i < articles.length; i++ ) {

        let id = '#' + articles[i].id;

        new Vue({
            el: id,
            components: {
                Articles,
            },
        });
    }

}

new Vue({
    el: '#modal-header',
    components: {
        modal
    },
    data: {
        showModal: false
      }
});


