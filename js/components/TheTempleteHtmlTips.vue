<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／小貼士</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-list">
          <ul>
            <li v-for="item in filterHtips" :key="item.id">
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
      hTips: [
        {
          id: 5,
          href: "html_t_googleform",
          time: "2019-09-04",
          topic: "使用 Google 表單建立簡易的聯絡信件"
        },
        {
          id: 11,
          href: "html_t_data",
          time: "2019-09-02",
          topic: "淺談資料屬性（data-*）"
        },
        {
          id: 10,
          href: "html_t_symbol_list",
          time: "2019-08-31",
          topic: "HTML 常用特殊符號編碼對照表"
        },
        {
          id: 9,
          href: "html_t_div_vs",
          time: "2019-08-28",
          topic: "<div> V.S. <section> V.S. <article>"
        },
        {
          id: 8,
          href: "html_t_input_readonly_vs_disabled",
          time: "2019-08-26",
          topic: "輸入框（<input>、<textarea>）的 readonly 屬性與 disabled 比較"
        },
        {
          id: 7,
          href: "html_t_meta_http_equiv",
          time: "2019-08-25",
          topic: "<meta> 之 http-equiv 屬性"
        },
        {
          id: 6,
          href: "html_t_meta_charset",
          time: "2019-08-23",
          topic: "<meta> 之 charset 屬性"
        },
        {
          id: 5,
          href: "html_t_mq",
          time: "2019-08-23",
          topic: "HTML 的 Media Queries 寫法"
        },
        {
          id: 4,
          href: "html_t_h5_tag_a",
          time: "2019-08-22",
          topic: "超連結（<a>）HTML5 的新增屬性"
        },
        {
          id: 3,
          href: "html_t_meta_viewport",
          time: "2019-08-22",
          topic: "<meta> 之 viewport 屬性"
        },
        {
          id: 2,
          href: "html_t_schema",
          time: "2019-08-22",
          topic: "Schema 標記（item...）"
        },
        {
          id: 1,
          href: "html_t_meta_name",
          time: "2019-08-22",
          topic: "<meta> 的 name 屬性"
        },
        {
          id: 4,
          href: "html_t_wb_plugin",
          time: "2017-09-19",
          topic: "微博分享按鈕"
        },
        {
          id: 3,
          href: "html_t_line_plugin",
          time: "2016-12-18",
          topic: "LINE 條碼轉為網址與傳送分享按鈕"
        },
        {
          id: 2,
          href: "html_t_sk_plugin",
          time: "2016-11-21",
          topic: "SKYPE 外掛"
        },
        {
          id: 1,
          href: "html_t_fb_plugin",
          time: "2016-11-21",
          topic: "Facebook 社群套件"
        }
      ]
    };
  },

  computed: {
    filterHtips: function() {
      var search = this;
      return this.hTips.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>