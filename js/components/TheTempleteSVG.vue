<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／SVG</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-list">
          <ul>
            <li v-for="item in filterSVG" :key="item.id">
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
      query: "",

      // data
      svgLists: [
        {
          id: 1,
          href: "",
          time: "2019-xx-xx",
          topic: "title"
        }
      ]
    };
  },

  computed: {
    filterSVG: function() {
      var search = this;
      return this.svgLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>