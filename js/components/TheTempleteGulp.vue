<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Gulp</h2>
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
            <b>學習誌</b>
          </button>
        </div>
        <!-- 學習誌 -->
        <div class="inside-list" v-if="active==1">
          <ul>
            <li v-for="item in filterGulpLn" :key="item.id">
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
      glists: [
        {
          id: 6,
          href: "gulp_api_task",
          time: "2019-10-15",
          topic: "Lesson06-- gulp.task 於 Gulp4.0 的改動"
        },
        {
          id: 5,
          href: "gulp_api",
          time: "2019-10-15",
          topic: "Lesson05-- 淺說 Gulp API"
        },
        {
          id: 4,
          href: "gulp_use_plugin",
          time: "2019-10-14",
          topic: "Lesson04-- 使用 Gulp 套件與 寫入 gulpfile.js"
        },
        {
          id: 3,
          href: "gulp_gulpfile",
          time: "2019-10-14",
          topic: "Lesson03-- 建立 Gulp 專案"
        },
        {
          id: 2,
          href: "gulp_install",
          time: "2019-10-08",
          topic: "Lesson02-- Gulp 安裝流程"
        },
        {
          id: 1,
          href: "gulp_intro",
          time: "2019-10-07",
          topic: "Lesson01-- Gulp 基本介紹"
        }
      ]
    };
  },

  computed: {
    filterGulpLn: function() {
      var search = this;
      return this.glists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>