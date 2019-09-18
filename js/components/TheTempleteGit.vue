<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Git</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-tag">
        <a href="#tagBash">BASH</a>
      </div>
      <div class="inside-container">
        <div id="tagBash" class="inside-list">
          <h2>BASH</h2>
          <ul>
            <li v-for="item in filterList" :key="item.id">
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
      gits: [
        {
          id: 1,
          href: "xxxx",
          time: "2019-08-07",
          topic: "xxxx"
        }
      ]
    };
  },

  computed: {
    filterList: function() {
      var search = this;
      return this.gits.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>