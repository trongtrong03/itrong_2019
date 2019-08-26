<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／小貼士</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-list">
          <ul>
            <li v-for="item in filterCtips" :key="item.id">
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

      // data
      cTips: [
        {
          id: 19,
          href: "css_t_justify_content",
          time: "2019-09-03",
          topic: "Flexbox 使用分散水平對齊之於最後一行的改善方法"
        },
        {
          id: 18,
          href: "css_t_units",
          time: "2019-08-29",
          topic: "CSS 使用單位介紹"
        },
        {
          id: 17,
          href: "css_t_horizontal_scrollable_menu",
          time: "2019-08-28",
          topic: "水平延伸式的滾軸選單"
        },
        {
          id: 16,
          href: "css_t_removeTextNodes",
          time: "2019-08-27",
          topic: "解决 inline-block 的空白間距"
        },
        {
          id: 15,
          href: "css_t_linear_radial_gradient",
          time: "2019-08-22",
          topic: "背景斜切角（linear-gradient）與內圓角（radial-gradient）"
        },
        {
          id: 14,
          href: "css_t_repeating_linear_gradient",
          time: "2019-08-22",
          topic: "背景影像重複漸變（repeating-linear-gradient）"
        },
        {
          id: 13,
          href: "css_t_drop_shadow_box_shadow",
          time: "2019-08-21",
          topic: "drop-shadow VS box-shadow"
        },
        {
          id: 12,
          href: "css_t_viewport_units",
          time: "2019-08-21",
          topic: "可視區域單位（Viewport units）"
        },
        {
          id: 11,
          href: "css_t_placeholder",
          time: "2019-08-20",
          topic: "input 的提示訊息（placeholder）"
        },
        {
          id: 10,
          href: "css_t_selection",
          time: "2019-08-18",
          topic: "設定反白（selection）的樣式"
        },
        {
          id: 9,
          href: "css_t_div_size_adjust",
          time: "2019-08-18",
          topic: "實現元素的等比縮放"
        },
        {
          id: 8,
          href: "css_t_table_cell",
          time: "2019-08-18",
          topic: "讓多個 Div 等高（table-cell）"
        },
        {
          id: 7,
          href: "css_t_checkbox",
          time: "2019-08-17",
          topic: "客製化按鈕核選方塊（checkbox）樣式"
        },
        {
          id: 6,
          href: "css_t_media_queries",
          time: "2019-08-17",
          topic: "介紹 Media Queries"
        },
        {
          id: 5,
          href: "css_t_hsla",
          time: "2019-08-15",
          topic: "顏色屬性（hsl 與 hsla）"
        },
        {
          id: 4,
          href: "css_t_fontcolor_gradient",
          time: "2019-08-12",
          topic: "製作文字色彩漸層"
        },
        {
          id: 3,
          href: "css_t_ios_overflow_scrolling",
          time: "2019-08-12",
          topic:
            "iOS 行動裝置 iframe 無法向下滾動的解決方法（-webkit-overflow-scrolling）"
        },
        {
          id: 2,
          href: "css_t_word_break_vs_word_wrap",
          time: "2019-08-09",
          topic: "word-break V.S. word-wrap"
        },
        {
          id: 1,
          href: "css_t_direction_vs_text_align",
          time: "2019-08-07",
          topic: "direction V.S. text-align"
        }
      ]
    };
  },

  computed: {
    filterCtips: function() {
      var search = this;
      return this.cTips.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>