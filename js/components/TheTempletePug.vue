<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Pug</h2>
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
            <li v-for="item in filterPug" :key="item.id">
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
      lnLists: [
        {
          id: 1,
          href: "pug_intro",
          time: "2019-10-19",
          topic: "Learn01-- 什麼是 Pug？"
        }
      ]
    };
  },

  computed: {
    filterPug: function() {
      var search = this;
      return this.lnLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>