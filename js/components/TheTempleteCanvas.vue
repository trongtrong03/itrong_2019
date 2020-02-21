<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Canvas</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-list-ul"></i>
            <b>Learn</b>
          </button>
        </div>
        <!-- Learn -->
        <div class="inside-list" v-if="active==1">
          <ul>
            <li v-for="item in filterCanvas" :key="item.id">
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
      format: ".php",
      query: "",
      active: 1,

      // data
      lists: [
        {
          id: 5,
          href: "js_canvas_base_path2",
          time: "2019-06-26",
          topic: "Learn05-- 基本繪圖 ● 其三：路徑（Path）-下"
        },
        {
          id: 4,
          href: "js_canvas_base_path",
          time: "2019-06-25",
          topic: "Learn04-- 基本繪圖 ● 其二：路徑（Path）-上"
        },
        {
          id: 3,
          href: "js_canvas_base_rect",
          time: "2019-06-25",
          topic: "Learn03-- 基本繪圖 ● 其一：矩形（Rect）"
        },
        {
          id: 2,
          href: "js_canvas_base_rendering",
          time: "2019-06-23",
          topic: "Learn02-- 渲染環境（rendering context）"
        },
        {
          id: 1,
          href: "js_canvas_intro",
          time: "2019-06-22",
          topic: "Learn01-- 什麼是 Canvas？"
        }
      ]
    };
  },

  computed: {
    filterCanvas: function() {
      var search = this;
      return this.lists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>