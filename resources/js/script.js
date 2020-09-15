import mainSliderArrows from '@modules/main-slider';
import Preloader from '@modules/preloader';
import randomDisplay from '@modules/random-display';
import burgerHadler from '@modules/burger-hadler';
import fontSizeToggler from '@modules/font-size-toggler';
import createMap from '@modules/map';
import lazyLoader from '@modules/lazy-loader';
import collapse from '@modules/collapse';
import faqsElement from '@modules/about-acordion';


//import SearchInput from '@modules/search-input';

if ( document.getElementById('map') ) {
  window.initMap = () => createMap();
}

document.addEventListener("DOMContentLoaded", function () {
    Preloader.init();
    lazyLoader.init();
    randomDisplay.init();
    mainSliderArrows.init();
    burgerHadler.init();
    fontSizeToggler.init();
    faqsElement.init();
  //SearchInput.init();

});
