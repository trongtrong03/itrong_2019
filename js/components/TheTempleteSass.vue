<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Sass</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-list">
          <ul>
            <li v-for="item in filterSass" :key="item.id">
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
      lists: [
        {
          id: 13,
          href: "css_scss_image_url",
          time: "2017-01-29",
          topic: "SCSS：自動尋找影像路徑（image-url）"
        },
        {
          id: 12,
          href: "css_scss_for",
          time: "2017-01-23",
          topic: "SCSS：迴圈的用法（@for）"
        },
        {
          id: 11,
          href: "css_scss_mixin_vs_extend",
          time: "2017-01-20",
          topic: "SCSS：mixin vs. extend"
        },
        {
          id: 10,
          href: "css_scss_extend",
          time: "2016-12-19",
          topic: "SCSS：合併共用（@extend）"
        },
        {
          id: 9,
          href: "css_scss_mixin",
          time: "2016-12-18",
          topic: "SCSS：定義參數（@mixin）"
        },
        {
          id: 8,
          href: "css_sass_inline_image",
          time: "2016-12-18",
          topic: "Sass：把背景圖片寫在 Sass 檔案裡（inline-image）"
        },
        {
          id: 7,
          href: "css_scss_default",
          time: "2016-12-18",
          topic: "SCSS：屬性的預設值（!default）"
        },
        {
          id: 6,
          href: "css_scss_import",
          time: "2016-12-01",
          topic: "SCSS：import 資料夾內的 sass 檔（@import）"
        },
        {
          id: 5,
          href: "css_scss_var2",
          time: "2016-12-01",
          topic: "SCSS：於選擇器、字串使用變數（$）"
        },
        {
          id: 4,
          href: "css_scss_var",
          time: "2016-11-30",
          topic: "SCSS：變數（$）宣告與使用"
        },
        {
          id: 3,
          href: "css_scss_base",
          time: "2016-11-29",
          topic: "SCSS：基礎寫法規則"
        },
        {
          id: 2,
          href: "css_scss_vs_sass",
          time: "2016-11-28",
          topic: "SCSS vs. Sass"
        },
        {
          id: 1,
          href: "css_sass_intro",
          time: "2016-11-25",
          topic: "Sass 與 SCSS 基本介紹"
        }
      ]
    };
  },

  computed: {
    filterSass: function() {
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