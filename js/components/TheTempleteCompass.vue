<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Compass</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-list">
          <ul>
            <li v-for="item in filterCompass" :key="item.id">
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
          id: 7,
          href: "css_compass_autoprefixer",
          time: "2017-06-17",
          topic: "CSS 自動前綴工具（Autoprefixer）"
        },
        {
          id: 6,
          href: "css_compass_sass_globbing",
          time: "2017-01-03",
          topic: "import 資料夾內所有 Sass/SCSS 檔（sass-globbing）"
        },
        {
          id: 5,
          href: "css_compass_error_font",
          time: "2016-12-18",
          topic: "解決 font-family 使用中文字型導致同步出現錯誤碼的問題"
        },
        {
          id: 4,
          href: "css_compass_css3",
          time: "2016-12-11",
          topic: "Compass：About Compass CSS3"
        },
        {
          id: 3,
          href: "css_compass_config",
          time: "2016-11-30",
          topic: "Compass：config.rb 的配置介紹"
        },
        {
          id: 2,
          href: "css_compass_sass",
          time: "2016-11-28",
          topic: "Compass：安裝 Sass 的指令"
        },
        {
          id: 1,
          href: "css_compass_install_ruby",
          time: "2016-11-28",
          topic: "Compass：安裝 Ruby 工作環境"
        }
      ]
    };
  },

  computed: {
    filterCompass: function() {
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