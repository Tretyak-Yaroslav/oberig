<template>
  <div :class="backgroundClass">
      <div class="blog-body carousel">
          <div class="news">
              <h2 class="mb-1">{{title}}</h2>
              <a :href="link_all" class="btn btn-coment mobile-hide">Усі матеріали</a>
          </div>
          <carousel :items="visibleItemsCount"
                    :responsive="{0:{items:1,nav:true},767:{items:2,nav:true},1025:{items:3,nav:true}}"
                    @changed="changed"
                    @resized="resized"
                    :dots="false"
                    :nav="true"
                    :margin="carouselMargin"
                    :autoHeight="true"
                    :rewind="false"
                    :stagePadding="carouselPadding">
            <div v-for="article in articles" :key="article.key" class="blog carousel_item">
              <a href="#">
                <img v-bind:src="article.img" />
              </a>
              <div class="blog-padding">
                <h3 class="sleep">{{ article.title }}</h3>
                <p class="blog-psychology">{{ article.p }}</p>
                <div class="blog-time">
                  <p class="time">
                      <span class="calendar"></span>
                   
                    {{ article.time}}
                  </p>
                </div>
                <a :href="article.link" class="btn btn-green center">Детальніше</a>
              </div>
            </div>
          </carousel>
          <div class="custom-nav" v-if="hasProgressBar">
            <div class="custom-nav__prev" @click="prev">
              <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.9913 4.57239L13.4689 0.987061V3.67606L0.259766 3.67606L0.259766 5.46873L13.4689 5.46873V8.15773L16.9913 4.57239Z" fill="#EEEEEE"/>
              </svg>
            </div>
            <div class="custom-nav__next" @click="next">
              <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.9913 4.57239L13.4689 0.987061V3.67606L0.259766 3.67606L0.259766 5.46873L13.4689 5.46873V8.15773L16.9913 4.57239Z" fill="#EEEEEE"/>
              </svg>
            </div>
            <div class="custom-nav__line">
              <div class="progress" :style="progressPersentage"></div>
            </div>
          </div>
      </div>
      <a :href="link_all" class="btn btn-coment center width-100 destop-hide">Усі матеріали</a>
  </div>
</template>

<script>
import carousel from "vue-owl-carousel";

export default {
  name: "articles",
  components: { carousel },
  props: {
    title: {
      required: true,
      type: String,
    },
    background: {
      required: true,
      type: String,
    },
    link_all: {
      required: true,
      type: String,
    },
    articles: {
      required: true,
      type: Array,
      default: () => [
        {
          id: 1,
          title: "4 шага навстречу здоровому сну",
          link: '#',
          p: "Розділ: Психологія",
          time: "8 листопада 2019 р.",
          img: "/img/about/stock.png"
        },
        {
          id: 2,
          title: "4 шага навстречу здоровому сну",
          link: '#',
          p: "Розділ: Психологія",
          time: "8 листопада 2019 р.",
          img: "/img/about/image.png"
        },
        {
          id: 3,
          title: "4 шага навстречу здоровому сну",
          link: '#',
          p: "Розділ: Психологія",
          time: "8 листопада 2019 р.",
          img: "/img/about/image.png"
        },
        {
          id: 4,
          title: "44 шага навстречу здоровому сну",
          link: '#',
          p: "Розділ: Психологія",
          time: "8 листопада 2019 р.",
          img: "/img/about/image.png"
        },
        {
          id: 5,
          title: "44 шага навстречу здоровому сну",
          link: '#',
          p: "Розділ: Психологія",
          time: "8 листопада 2019 р.",
          img: "/img/about/image.png"
        }
      ]
    }
  },
  methods: {
    changed(data) {
      this.currentStep = data.item.index;
      this.calculateMargin;
    },
    next() {
      document.querySelector(this.parent + ' .owl-next').click();
    },
    prev() {
      document.querySelector(this.parent + ' .owl-prev').click();
    },
    resized() {
      this.calculateMargin;
    },
    calculateMargin() {
      this.dataMargin = window.innerWidth < 1360 ? 20 : 44
    }

  },
  computed: {
    backgroundClass() {
      return this.background == 'grey' ? 'blog-section' : 'blog-body';
    },
    hasProgressBar() {
      return this.slidesCount > this.activeSlides ? true : false;
    },
    steps() {
      return 100 / this.slidesCount;
    },
    slidesCount() {
      return this.articles.length
    },
    activeSlides() {
      return ( document.querySelectorAll(this.parent + ' .owl-item.active').length == 1 || 
               document.querySelectorAll(this.parent + ' .owl-item.active').length == 2 ) ? 
                document.querySelectorAll(this.parent + ' .owl-item.active').length : this.visibleItemsCount;
    },
    progressPersentage() {
      return 'width:' + (( this.activeSlides +  this.currentStep) * this.steps) + "%";
    },
    carouselMargin() {
      return this.dataMargin = window.innerWidth < 1360 ? 20 : 44;
    },
    carouselPadding() {
      return this.dataPadding = window.innerWidth < 767 ? 0 : 30;
    }
    
  },

  mounted: function() {
    this.parent = '#' + this.$el.parentElement.id;
  },

  data: () => ({
    currentStep: 0,
    parent: null,
    visibleItemsCount: 3,
    dataMargin: 44,
    dataPadding: 30
  })
};
</script>
