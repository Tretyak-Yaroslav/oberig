<template>
  <div class="left-menu_container">
    <div class="open-menu-effect" :class="{ active : submenuShow }" v-if="loaded"></div>
    <aside class="left-menu">
      <div class="left-menu_wrap">
        <div class="left-menu_logo">
          <a href="/">
            <img class="lazy" data-lazy="/img/icons/logo-icon.svg" />
          </a>
        </div>
        <nav class="left-menu_items">
          <div class="left-menu_item submenu"
            v-for="nav_item in menu"
            :class="{ 'submenu-active' : nav_item.isActive }"
            :key="nav_item.id">
            <a v-if="nav_item.hasSubmenu"
              href="javascript:void(0);"
              @click="openSubMenu($event, nav_item)">{{nav_item.title}}</a>
            <div class="item-count" v-if="nav_item.count > 0">{{nav_item.count}}</div>
             <a :href="nav_item.link" v-if="nav_item.hasSubmenu == false">
                {{nav_item.title}}
            </a>
          </div>
        </nav>

        <div class="left-menu_items vision" v-on:click="makeGreen" v-bind:class="{green: isActive}">
          <div class="left-menu_disadvantages bigger-fs">
            <img class="img-aa lazy" data-lazy="/img/icons/АА.svg" />
            <p class="left-menu_disadvantages-p bigger-fs">
              Для людей
              <br />з вадами зору
            </p>
          </div>
          <div class="header_underline"></div>
        </div>
      </div>
      <div class="left-menu_social">
        <div class="left-menu_social-wrap fw">
          <a class="left-menu_social-item" :href="facebookLink" target="_blank">
            <img class="lazy" data-lazy="/img/icons/fb.svg" alt="facebook" />
          </a>
          <a class="left-menu_social-item" :href="instagramLink" target="_blank">
            <img class="lazy" data-lazy="/img/icons/insta.svg" alt="instagram" />
          </a>
          <a class="left-menu_social-item" :href="telegramLink" target="_blank">
            <img class="lazy" data-lazy="/img/icons/telegram.svg" alt="telegram" />
          </a>
          <a class="left-menu_social-item" :href="youtubeLink" target="_blank">
            <img class="lazy" data-lazy="/img/icons/yt.svg" alt="youtube" />
          </a>
        </div>
      </div>
    </aside>
    <transition name="fade">
      <div class="left-menu_submenu" v-if="submenuShow">
        <div class="left-menu_submenu-close" @click="closeSubMenu"></div>
        <div class="left-menu_submenu-search submenu-search">
          <div class="submenu-search_wrap">
            <div class="submenu-search_title">
              <h3>Про Оберіг</h3>
            </div>
            <div class="submenu-search_input">
              <input type="text" />
            </div>
          </div>

          <svg class="search_tree" width="806" height="188" viewBox="0 0 806 188" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M238.008 329.04C226.881 366.428 217.507 388.005 212.5 397.856H361.71C361.431 359.585 337.509 274.655 383.601 206.198C416.231 157.746 456.12 115.75 536.817 108.741C569.863 104.851 602.937 106.203 636.151 107.113C596.875 92.5632 555.019 86.113 513.144 88.1573C466.006 90.5217 420.48 105.951 381.738 132.692C378.567 115.667 369.665 106.534 366.911 101.209C361.348 90.5855 341.876 72.9814 341.876 72.9814C341.876 72.9814 341.487 77.8377 345.492 89.537C354.644 116.302 357.092 141.466 355.117 153.745L294.421 207.164C294.421 207.164 193.724 140.942 170.469 144.667C170.469 144.667 227.465 193.009 238.036 233.653C251.833 286.823 238.008 329.04 238.008 329.04Z" fill="#8EC478" />
            <path d="M655.289 189.616C598.264 179.573 611.922 125.602 611.922 125.602C611.922 125.602 667.167 132.141 655.289 189.616Z" fill="#8EC478" />
            <path d="M571.92 201.729C537.233 155.705 584.438 125.602 584.438 125.602C584.438 125.602 620.21 167.846 571.92 201.729Z" fill="#8EC478" />
            <path d="M490.89 165.363C502.295 109.019 556.399 123.836 556.399 123.836C556.399 123.836 548.471 178.47 490.89 165.363Z" fill="#8EC478" />
            <path d="M688.696 48.2048C631.922 29.3039 617.402 84.9856 617.402 84.9856C617.402 84.9856 670.866 106.177 688.696 48.2048Z" fill="#8EC478" />
            <path d="M578.07 -3.0343C540.406 46.6322 591.366 79.357 591.366 79.357C591.366 79.357 630.199 33.8017 578.07 -3.0343Z" fill="#8EC478" />
            <path d="M463.881 20.0057C483.742 87.9109 548.555 64.1537 548.555 64.1537C548.555 64.1537 533.2 -1.87515 463.881 20.0057Z" fill="#8EC478" />
            <path d="M392.694 49.5289C420.511 107.473 474.977 76.9007 474.977 76.9007C474.977 76.9007 451.61 19.8394 392.694 49.5289Z" fill="#8EC478" />
            <path d="M163.235 140.336C113.165 156.892 100.453 107.556 100.453 107.556C100.453 107.556 147.686 88.9864 163.235 140.336Z" fill="#8EC478" />
            <path d="M167.965 157.582C160.566 209.511 110.496 198.971 110.496 198.971C110.496 198.971 114.724 148.697 167.965 157.582Z" fill="#8EC478" />
            <path d="M210.944 71.4921C233.197 119.062 185.324 137.107 185.324 137.107C185.324 137.107 161.402 92.6831 210.944 71.4921Z" fill="#8EC478" />
            <path d="M263.932 137.659C238.202 170.77 207.659 143.868 207.659 143.868C207.659 143.868 230.524 110.674 263.932 137.659Z" fill="#8EC478" />
            <path d="M334.813 63.0498C293.088 58.635 300.237 18.9017 300.237 18.9017C300.237 18.9017 340.488 20.8884 334.813 63.0498Z" fill="#8EC478" />
            <path d="M518.042 241.077C496.122 194.694 542.799 176.841 542.799 176.841C542.799 176.841 566.388 220.134 518.042 241.077Z" fill="#8EC478" />
            <path d="M728.782 220.299C670.923 215.139 679.907 160.037 679.907 160.037C679.907 160.037 735.68 161.858 728.782 220.299Z" fill="#8EC478" />
            <path d="M110.496 155.512C80.5375 198.722 40.509 167.046 40.509 167.046C40.509 167.046 66.8794 124.029 110.496 155.512Z" fill="#8EC478" />
            <path d="M163.99 106.452C128.217 84.3783 152.251 51.488 152.251 51.488C152.251 51.488 187.773 70.8304 163.99 106.452Z" fill="#8EC478" />
            <path d="M346.521 61.035C338.51 20.1705 378.789 15.259 378.789 15.259C378.789 15.259 388.803 54.0265 346.521 61.035Z" fill="#8EC478" />
            <path d="M330.25 77.6189C316.147 116.386 279.345 100.217 279.345 100.217C279.345 100.217 290.75 62.2775 330.25 77.6189Z" fill="#8EC478" />
            <path d="M335.422 158.769C293.252 169.006 286.242 127.838 286.242 127.838C286.242 127.838 326.104 115.807 335.422 158.769Z" fill="#8EC478" />
            <path d="M182.293 178.496C214.589 219.885 171.945 248.112 171.945 248.112C171.945 248.112 138.704 210.062 182.293 178.496Z" fill="#8EC478" />
            <path d="M727.724 129.105C697.57 77.9487 649.642 110.204 649.642 110.204C649.642 110.204 675.762 161.03 727.724 129.105Z" fill="#8EC478" />
            <path d="M441.738 189.893C435.341 148.725 475.87 145.414 475.87 145.414C475.87 145.414 484.27 184.54 441.738 189.893Z" fill="#8EC478" />
            <path d="M527.722 -28.5315C512.478 3.69658 544.94 16.0856 544.94 16.0856C544.94 16.0856 561.297 -13.9902 527.722 -28.5315Z" fill="#8EC478" />
            <path d="M251.248 47.9016C269.246 78.7224 298.12 59.3801 298.12 59.3801C298.12 59.3801 282.459 28.8627 251.248 47.9016Z" fill="#8EC478" />
            <path d="M234.281 113.074C270.165 113.626 268.217 79.1901 268.217 79.1901C268.217 79.1901 233.836 76.7344 234.281 113.074Z" fill="#8EC478" />
            <path d="M624.718 33.0562C660.602 33.6081 658.682 -0.82737 658.682 -0.82737C658.682 -0.82737 624.301 -3.28311 624.718 33.0562Z" fill="#8EC478" />
            <path d="M700.713 82.2544C732.173 99.3618 746.666 68.0167 746.666 68.0167C746.666 68.0167 717.431 49.916 700.713 82.2544Z" fill="#8EC478" />
            <path d="M761.103 136.914C775.012 169.749 806 154.187 806 154.187C806 154.187 794.511 122.097 761.103 136.914Z" fill="#8EC478" />
            <path d="M805.998 222.671C760.156 224.906 761.102 180.813 761.102 180.813C761.102 180.813 804.941 176.178 805.998 222.671Z" fill="#8EC478" />
          </svg>
        </div>
        <div class="left-menu_submenu-wrap fw" v-if="groups != null">
          <div class="left-menu_submenu-group" v-for="(group, k) in groups" :key="group.id">
            <div class="left-menu_submenu-title">
              <h4>{{group.title_group}}</h4>
            </div>
            <template v-if="group.titles">
              <div
                class="left-menu_submenu-item"
                v-for="(link, i) in group.titles"
                :key="link.id"
                :style="{ 'animation-duration': (0.5 + i / 2 + k / 4) + 's' }"
              >
                <a :href="link.url" class>{{link.text}}</a>
              </div>
            </template>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import fontSizeToggler from "@modules/font-size-toggler";
export default {
  name: "left-menu",
  props: {
    facebookLink: {
      required: true,
      type: String,
      default: '#'
    },
    telegramLink: {
      required: true,
      type: String,
      default: '#'
    },
    instagramLink: {
      required: true,
      type: String,
      default: '#'
    },
    youtubeLink: {
      required: true,
      type: String,
      default: '#'
    },
    menu: {
      required: true,
      type: Array,
      default: () => [
        {
          title: "Про Оберіг",
          link: "",
          hasSubmenu: true,
          isActive: false,
          count: 0,
          id: 1,
          groups: [
            {
              title_group: "Чому “Оберіг”?",
              titles: [
                {
                  text: "Легенда",
                  url: "#"
                },
                {
                  text: "Бачення",
                  url: "#"
                },
                {
                  text: "Освіта",
                  url: "#"
                },
                {
                  text: "Рівність",
                  url: "#"
                },
                {
                  text: "Конкуренція",
                  url: "#"
                },
                {
                  text: "Вартість лікування",
                  url: "#"
                },
                {
                  text: "Факти про нас",
                  url: "#"
                },
                {
                  text: "Функціональна діагностика",
                  url: "#"
                },
                {
                  text: "Ендоскопія",
                  url: "#"
                }
              ]
            },
            {
              title_group: "Віртуальний тур",
              titles: [
                {
                  text: "Головний вхід клініки “Оберіг”",
                  url: "#"
                },
                {
                  text: "Вестибюль клініки “Оберіг”",
                  url: "#"
                },
                {
                  text: "Поліклініка",
                  url: "#"
                },
                {
                  text: "Стаціонар (дорослий)",
                  url: "#"
                },
                {
                  text: "Стаціонар (дитячий)",
                  url: "#"
                },
                {
                  text: "Операційна клініки “Оберіг”",
                  url: "#"
                },
                {
                  text: "Лінійний прискорювач",
                  url: "#"
                },
                {
                  text: "Інсультний центр клініки “Оберіг”",
                  url: "#"
                },
                {
                  text: "Кафе",
                  url: "#"
                },
                {
                  text: "Реанімація клініки “Оберіг”",
                  url: "#"
                }
              ]
            },
            {
              title_group: "Адміністрація"
            }
          ]
        },
        {
          title: "Діагностика і лікування",
          link: "#",
          hasSubmenu: false,
          isActive: false,
          count: 72,
          id: 2
        },
        {
          title: "Відділення і центри",
          link: "http://oberig.test/front/department",
          hasSubmenu: false,
          isActive: false,
          count: 0,
          id: 3,
          // groups: [
          //   {
          //     title_group: "Test",
          //     titles: [
          //       {
          //         text: "test link",
          //         url: "#"
          //       },
          //       {
          //         text: "test link",
          //         url: "#"
          //       }
          //     ]
          //   },
          //   {
          //     title_group: "Title",
          //     titles: [
          //       {
          //         text: "test link",
          //         url: "#"
          //       }
          //     ]
          //   },
          //   {
          //     title_group: "Адміністрація"
          //   }
          // ]
        },

        {
          title: "Лікарі",
          link: "#",
          hasSubmenu: false,
          isActive: false,
          count: 0,
          id: 4
        },

        {
          title: "Пацієнтам",
          link: "#",
          hasSubmenu: false,
          isActive: false,
          count: 0,
          id: 5
        },

        {
          title: "Спеціалістам",
          link: "#",
          hasSubmenu: false,
          isActive: false,
          count: 0,
          id: 6
        },
        {
          title: "Медіаматеріали",
          link: "#",
          hasSubmenu: false,
          isActive: false,
          count: 0,
          id: 7
        },
        {
          title: "Контакти",
          link: "#",
          hasSubmenu: false,
          isActive: false,
          count: 9,
          id: 8
        }
      ],
    }
  },
  components: { fontSizeToggler },
  computed: {
    classObject: function() {
      return {
        active: this.isActive && !this.error,
        "text-danger": this.error && this.error.type === "fatal"
      };
    }
  },
  data: {
    isActive: false
  },
  data() {
    return {
      isActive: false,
      submenuShow: false,
      loaded: false,
      selectedSubmenu: null,
      groups: null
    };
  },
  methods: {
    clearActiveMenu() {
      for (let i = 0; i < this.menu.length; i++) {
        if (this.menu[i].isActive == true) {
          this.menu[i].isActive = false;
        }
      }
    },
    makeGreen: function() {
      this.isActive = !this.isActive;
      if (this.makeGrenn === !this.isActive) {
        document.body.className = "home";
      }
    },
    toggleSubmenuDisplay(val) {
      this.submenuShow = val;
    },
    setDataForSubmenu(data) {
      this.groups = data;
    },
    setActiveButton(obj) {
      return (obj.isActive = true);
    },
    openSubMenu(e, item) {
      let clicked_submenu_btn = e.target.parentNode;

      this.clearActiveMenu();
      if (clicked_submenu_btn.classList.contains("submenu-active")) return;

      this.toggleSubmenuDisplay(true);

      this.setDataForSubmenu(item.groups);

      this.setActiveButton(item);
    },
    closeSubMenu() {
      this.clearActiveMenu();
      this.toggleSubmenuDisplay(false);
    }
  },
  mounted: function() {
    
    console.log(this.menu);

    document.onreadystatechange = () => {
      if (document.readyState == "complete") {
        this.loaded = !this.loaded;
      }
    };
  }
};
</script>

<style scoped>
.fade-enter-active {
  transition: opacity 0.4s;
  transition-delay: 0.4s;
}
.fade-leave-active {
  transition: opacity 0.1s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>