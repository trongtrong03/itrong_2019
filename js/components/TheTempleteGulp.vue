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
      <div class="inside-tag">
        <a href="#tagLearn">學習誌</a>
      </div>
      <div class="inside-container">
        <div id="tagLearn" class="inside-list">
          <h2>學習誌</h2>
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

      // data
      glists: [
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