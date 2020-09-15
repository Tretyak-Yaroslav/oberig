<template>
  <carousel :items="1" :dots="false" :nav="false" :autoHeight="true">
    <div class="carousel_item">
      <img class="lazy" data-lazy="https://oberig-dev.vis-design.com.ua/img/clinic.png" />
      <div class="carousel_item-info">
        <div class="carousel-info_wrap">
          <div class="carousel-info_header">
            <h1>Новий надсучасний корпус</h1>
          </div>
          <div class="horizontal-line"></div>
          <div class="carousel-info_description">
            <p>Універсальна клініка “Оберіг”</p>
          </div>
        </div>
        <div class="carousel-arrow carousel-arrow_left js-left">
         <img class="lazy carousel-img" data-lazy="/img/icons/left.svg"  srcset="">
        </div>
        <div class="carousel-arrow carousel-arrow_right js-right">
         <img class="lazy carousel-img" data-lazy="/img/icons/right.svg" alt="" srcset="">
        </div>
      </div>
    </div>

    <div class="carousel_item">
      <img class="lazy" data-lazy="https://oberig-dev.vis-design.com.ua/img/clinic.png" />
      <div class="carousel_item-info">
        <div class="carousel-info_wrap">
          <div class="carousel-info_header">
            <h1>Новий надсучасний корпус</h1>
          </div>
          <div class="horizontal-line"></div>
          <div class="carousel-info_description">
            <p>Універсальна клініка “Оберіг”</p>
          </div>
        </div>
        <div class="carousel-arrow carousel-arrow_left js-left">
          <img class="lazy carousel-img" data-lazy="/img/icons/left.svg"  srcset="">
        </div>
        <div class="carousel-arrow carousel-arrow_right js-right">
          <img class="lazy carousel-img" data-lazy="/img/icons/right.svg" alt="" srcset="">
        </div>
      </div>
    </div>

    <div class="carousel_item">
      <img
        class="lazy"
        data-lazy="https://cdn.pixabay.com/photo/2019/09/23/01/47/space-4497348_960_720.jpg"
      />
      <div class="carousel_item-info">
        <div class="carousel-info_wrap">
          <div class="carousel-info_header">
            <h1>Новий надсучасний корпус</h1>
          </div>
          <div class="horizontal-line"></div>
          <div class="carousel-info_description">
            <p>Універсальна клініка “Оберіг”</p>
          </div>
        </div>
        <div class="carousel-arrow carousel-arrow_left js-left">
          <img class="lazy carousel-img" data-lazy="/img/icons/left.svg"  srcset="">
        </div>
        <div class="carousel-arrow carousel-arrow_right js-right">
           <img class="lazy carousel-img" data-lazy="/img/icons/right.svg" alt="" srcset="">
        </div>
      </div>
    </div>

    <template slot="prev">
      <span class="prev arrow">prev</span>
    </template>
    <template slot="next">
      <span class="next arrow">next</span>
    </template>
  </carousel>
</template>

<script>
import carousel from "vue-owl-carousel";

export default {
  name: "Slider",
  components: { carousel },
  props: {},

  data: () => ({}),

  computed: {},

  mounted() {},

  watch: {},

  methods: {
    __t(phrase) {
      return window.__t(phrase);
    }
  }
};
</script>

