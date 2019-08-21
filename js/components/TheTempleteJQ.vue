<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／jQuery</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <button class="inside-btn" @click="clickOpen" :class="{active: isActive}">
          <i class="fas fa-list-ul"></i>
        </button>
        <div class="inside-form is-hide" :class="{active: isActive}">
          <h2>API</h2>
          <ul class="inside-flex">
            <li v-for="item in filterJQ" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </span>
            </li>
          </ul>
        </div>
        <div class="inside-list">
          <ul>
            <li v-for="item in listJQ" :key="item.id">
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
      isActive: false,
      isLink: true,
      query: "",

      // data
      jqAPI: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "xxxxx",
          note: "xxxxx。"
        }
      ],

      jqLists: [
        {
          id: 1,
          href: "",
          time: "2019-xx-xx",
          topic: "title"
        }
      ]
    };
  },

  methods: {
    clickOpen: function() {
      this.isActive = !this.isActive;
    }
  },

  computed: {
    filterJQ: function() {
      var search = this;
      return this.jqAPI.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    listJQ: function() {
      var search = this;
      return this.jqLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>