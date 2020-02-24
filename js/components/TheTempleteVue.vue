<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Vue</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-th"></i>
            <b>Effects</b>
          </button>
          <button :class="active==2 ? 'active' : ''" @click="active=2">
            <i class="fas fa-list-ul"></i>
            <b>Learn</b>
          </button>
          <button :class="active==3 ? 'active' : ''" @click="active=3">
            <i class="fas fa-list"></i>
            <b>Tips</b>
          </button>
        </div>
        <!-- Effects -->
        <div class="inside-grid" v-if="active==1">
          <ul>
            <li v-for="item in vueEff" :key="item.id">
              <a :href="item.href + format">
                <figure>
                    <img :src="'images/pic/vue/effect/' + item.href + '.jpg'">
                </figure>
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <!-- Learn -->
        <div class="inside-list" v-if="active==2">
          <ul>
            <li v-for="item in vueLn" :key="item.id">
              <a :href="item.href + format">
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <!-- Tips -->
        <div class="inside-list" v-if="active==3">
          <ul>
            <li v-for="item in vueTip" :key="item.id">
              <a :href="item.href + format">
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>
</template>

<script>
module.exports = {
  data: function() {
    return {
      format: '.php',
      isLink: true,
      query: "",
      active: 1,

      // effect
      effs: [
        {
          id: 5,
          href: 'vue_eff_image_comparison',
          time: '2019-06-30',
          topic: '兩張影像的拖曳比較',
        },
        {
          id: 4,
          href: 'vue_eff_gotop',
          time: '2019-06-03',
          topic: '點擊按鈕返回頂部',
        },
        {
          id: 3,
          href: 'vue_eff_filter',
          time: '2019-05-27',
          topic: '項目篩選功能',
        },
        {
          id: 2,
          href: 'vue_eff_tabs',
          time: '2019-01-16',
          topic: '頁籤切換功能',
        },
        {
          id: 1,
          href: 'vue_eff_search',
          time: '2019-01-11',
          topic: '列表搜尋功能',
        },
      ],

      // learn
      lns: [
        {
          id: 2,
          href: 'vue_ln_template_data',
          time: '2020-01-15',
          topic: '資料（Data）與樣板（Template）',
        },
        {
          id: 1,
          href: 'vue_ln_base',
          time: '2020-01-12',
          topic: 'Vue.js 的基本介紹',
        }
      ],

      // tip
      tips: [
        {
          id: 3,
          href: 'vue_tip_httpVueLoader',
          time: '2019-01-13',
          topic: 'httpVueLoader -- 不需編譯也能載入 .vue',
        },
        {
          id: 2,
          href: 'vue_tip_warn_1',
          time: '2017-12-12',
          topic: '[Vue warn]: Templates should only be responsible for mapping the state to the UI...',
        },
        {
          id: 1,
          href: 'vue_tip_vcomponent_data_function',
          time: '2017-12-06',
          topic: '組件的 data 必須由 function 宣告',
        },
      ],
      
    };
  },

  methods: {
  },

  computed: {
    vueEff: function() {
      var search = this;
      return this.effs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    vueLn: function() {
      var search = this;
      return this.lns.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },

    vueTip: function() {
      var search = this;
      return this.tips.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>