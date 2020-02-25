<template>
  <header id="header">
    <nav class="nav-wrap" :class="{ 'active': isActive }">
      <span class="logo">
        <a :href="'index' + format">iTRONG</a>
      </span>
      <ul>
        <li class="navHtml" :class="active==1 ? 'active' : ''">
          <span class="nav-title" @click="active=1">HTML</span>
          <ul class="nav-sub">
            <li v-for="nav in navHtml">
              <a :href="nav.href + format">{{ nav.name }}</a>
            </li>
          </ul>
        </li>
        <li class="navCss" :class="active==2 ? 'active' : ''">
          <span class="nav-title" @click="active=2">CSS</span>
          <ul class="nav-sub">
            <li v-for="nav in navCSS">
              <a :href="nav.href + format">{{ nav.name }}</a>
            </li>
          </ul>
        </li>
        <li class="navJs" :class="active==3 ? 'active' : ''">
          <span class="nav-title" @click="active=3">JAVASCRIPT</span>
          <ul class="nav-sub">
            <li v-for="nav in navJS">
              <a :href="nav.href + format">{{ nav.name }}</a>
            </li>
          </ul>
        </li>
        <li class="navFe" :class="active==4 ? 'active' : ''">
          <span class="nav-title" @click="active=4">FRONT-END</span>
          <ul class="nav-sub">
            <li v-for="nav in navFe">
              <a :href="nav.href + format">{{ nav.name }}</a>
            </li>
          </ul>
        </li>
        <li class="navApp" :class="active==5 ? 'active' : ''">
          <span class="nav-title" @click="active=5">APPLICATION</span>
          <ul class="nav-sub">
            <li v-for="nav in navApp">
              <a :href="nav.href + format">{{ nav.name }}</a>
            </li>
          </ul>
        </li>
        <li class="navRes" :class="active==6 ? 'active' : ''">
          <span class="nav-title" @click="active=6">RESOURCES</span>
          <ul class="nav-sub">
            <li v-for="nav in navRes">
              <a :href="nav.href +format">{{ nav.name }}</a>
            </li>
          </ul>
        </li>
        <!-- <li class="navCre">
          <span class="nav-title" :class="active==7 ? 'active' : ''" @click="active=7">CREATIONS</span>
          <ul class="nav-sub">
            <li v-for="nav in navCre">
              <a :href="nav.href + format">{{ nav.name }}</a>
            </li>
          </ul>
        </li> -->
      </ul>
      <div class="nav-bottom">
        <a href="#0" title="My Profile">
          <i class="far fa-user"></i>
        </a>
        <a href="https://github.com/trongtrong03" title="GitHub" target="_blank">
          <i class="fab fa-github"></i>
        </a>
        <a class="codepen" href="https://codepen.io/itrong/" title="CodePen" target="_blank">
          <i class="fab fa-codepen"></i>
        </a>
        <a
          class="ig"
          href="https://www.instagram.com/trongtrongchen/"
          title="instagram"
          target="_blank"
        >
          <i class="fab fa-instagram"></i>
        </a>
        <!-- <a class="line" href="#0" title="Line" @click="btnOpenL"></a> -->
        <a class="msg" :href="'_contact' + format" title="Contact me">
          <i class="far fa-envelope"></i>
        </a>
      </div>
    </nav>
    <button class="nav-btn" @click="navOpen">
      <i class="fas fa-bars"></i>
    </button>
    <span class="popup-overlay" @click="navClose" :class="{ 'active': isActive }"></span>
  </header>
</template>

<script>
module.exports = {
  data: function() {
    return {
      isActive: false,
      noScroll: false,
      active: false,
      format: ".php",

      navHtml: [
        {
          name: "Html",
          href: "_html"
        },
        {
          name: "Haml",
          href: "_haml"
        },
        {
          name: "SVG",
          href: "_svg"
        },
      ],

      navCSS: [
        {
          name: "CSS",
          href: "_css"
        },
        {
          name: "Sass",
          href: "_sass"
        },
        {
          name: "Compass",
          href: "_compass"
        }
      ],

      navJS: [
        {
          name: "Javascript",
          href: "_javascript"
        },
        {
          name: "jQuery",
          href: "_jquery"
        },
        {
          name: "Vue",
          href: "_vue"
        },
        {
          name: "Canvas",
          href: "_canvas"
        }
      ],
      
      navFe: [
        {
          name: "Gulp",
          href: "_gulp"
        },
      ],

      navApp: [
        {
          name: "Git",
          href: "_git"
        },
        {
          name: "Code Editor",
          href: "_editor"
        },
      ],

      navRes: [
        {
          name: "線上工具",
          href: "_webtools"
        },
        {
          name: "推薦資源",
          href: "_resources"
        },
        {
          name: "應用程式",
          href: "_software"
        },
        {
          name: "知識文章",
          href: "_knowledge"
        }
      ],

      // navCre: [
      //   {
      //     name: "寶島壯遊",
      //     href: "_travel"
      //   }
      // ]
    };
  },

  methods: {
    navOpen: function() {
      this.isActive = !this.isActive;
      this.noScroll = !this.noScroll;
    },

    navClose: function() {
      this.isActive = !this.isActive;
      this.noScroll = !this.noScroll;
    },
  }
};
</script>