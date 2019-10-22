<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Haml</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-tag">
        <a href="#tagLearn">Pug</a>
      </div>
      <div class="inside-container">
        <div id="tagLearn" class="inside-list">
          <h2>Pug</h2>
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
      pugLists: [
        {
          id: 4,
          href: "haml_pug_attribute",
          time: "2019-10-21",
          topic: "Lesson04-- 屬性（Attribute）"
        },
        {
          id: 3,
          href: "haml_pug_whitespace",
          time: "2019-10-20",
          topic: "Lesson03-- 空白控制（Whitespace Control）"
        },
        {
          id: 2,
          href: "haml_pug_text",
          time: "2019-10-20",
          topic: "Lesson02-- 純文本（Plain Text）"
        },
        {
          id: 1,
          href: "haml_pug_intro",
          time: "2019-10-19",
          topic: "Lesson01-- 什麼是 Pug？"
        }
      ]
    };
  },

  computed: {
    filterPug: function() {
      var search = this;
      return this.pugLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>