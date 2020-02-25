<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Javascript</h2>
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
            <i class="fas fa-list"></i>
            <b>Notes</b>
          </button>
        </div>
        <!-- Effects -->
        <div class="inside-grid" v-if="active==1">
          <ul>
            <li v-for="item in JsPlugin" :key="item.id">
              <a :href="item.href + format">
                <figure>
                    <img :src="'images/pic/js/plugin/' + item.href + '.jpg'">
                </figure>
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <!-- Notes -->
        <div class="inside-list" v-if="active==2">
          <ul>
            <li v-for="item in JsNotes" :key="item.id">
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

      // plug
      plugins: [
        {
          id: 1,
          href: 'js_plugin_highlight',
          time: '2017-07-20',
          topic: 'highlight.js',
        },
      ],

      // Notes
      nts: [
        {
          id: 1,
          href: "jq_tec_callback",
          time: "2016-12-05",
          topic: "1111111"
        }
      ],
    };
  },

  methods: {
  },

  computed: {
    JsPlugin: function() {
      var search = this;
      return this.plugins.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    JsNotes: function() {
      var search = this;
      return this.nts.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>