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
          id: 25,
          href: "html_t_googleform",
          time: "2019-09-04",
          topic: "使用 Google 表單建立簡易的聯絡信件"
        },
        {
          id: 24,
          href: "html_t_data",
          time: "2019-09-02",
          topic: "淺談資料屬性（data-*）"
        },
        {
          id: 23,
          href: "html_t_symbol_list",
          time: "2019-08-31",
          topic: "HTML 常用特殊符號編碼對照表"
        },
        {
          id: 22,
          href: "html_t_div_vs",
          time: "2019-08-28",
          topic: "<div> V.S. <section> V.S. <article>"
        },
        {
          id: 21,
          href: "html_t_input_readonly_vs_disabled",
          time: "2019-08-26",
          topic: "輸入框（<input>、<textarea>）的 readonly 屬性與 disabled 比較"
        },
        {
          id: 20,
          href: "html_t_meta_http_equiv",
          time: "2019-08-25",
          topic: "<meta> 之 http-equiv 屬性"
        },
        {
          id: 19,
          href: "html_t_meta_charset",
          time: "2019-08-23",
          topic: "<meta> 之 charset 屬性"
        },
        {
          id: 18,
          href: "html_t_mq",
          time: "2019-08-23",
          topic: "HTML 的 Media Queries 寫法"
        },
        {
          id: 17,
          href: "html_t_h5_tag_a",
          time: "2019-08-22",
          topic: "超連結（<a>）HTML5 的新增屬性"
        },
        {
          id: 16,
          href: "html_t_meta_viewport",
          time: "2019-08-22",
          topic: "<meta> 之 viewport 屬性"
        },
        {
          id: 15,
          href: "html_t_schema",
          time: "2019-08-22",
          topic: "Schema 標記（item...）"
        },
        {
          id: 14,
          href: "html_t_meta_name",
          time: "2019-08-22",
          topic: "<meta> 的 name 屬性"
        },
        {
          id: 13,
          href: "html_star_label",
          time: "2017-10-12",
          topic: "用 HTML 與 CSS 實現評分效果"
        },
        {
          id: 12,
          href: "html_t_wb_plugin",
          time: "2017-09-19",
          topic: "微博分享按鈕"
        },
        {
          id: 11,
          href: "html_t_embed_pdf",
          time: "2017-07-24",
          topic: "將 PDF 文件內嵌於網頁（<embed>）"
        },
        {
          id: 10,
          href: "html_t_marquee",
          time: "2017-07-11",
          topic: "簡易跑馬燈語法（<marquee>）"
        },
        {
          id: 9,
          href: "html_t_line_plugin",
          time: "2016-12-18",
          topic: "LINE 條碼轉為網址與傳送分享按鈕"
        },
        {
          id: 8,
          href: "html_t_meta_twitter",
          time: "2016-12-10",
          topic: "寫給 Twitter 看的 SEO 標籤"
        },
        {
          id: 7,
          href: "html_t_meta_itemprop",
          time: "2016-12-06",
          topic: "寫給 Google 看的 SEO 標籤"
        },
        {
          id: 6,
          href: "html_t_meta_property",
          time: "2016-11-30",
          topic: "寫給 Facebook 看的 SEO 標籤"
        },
        {
          id: 5,
          href: "html_t_appicon",
          time: "2016-11-23",
          topic: "App icon 的語法教學"
        },
        {
          id: 4,
          href: "html_t_href_tel",
          time: "2016-11-23",
          topic: "<a> 播打電話號碼（tel）"
        },
        {
          id: 3,
          href: "html_img_onerror",
          time: "2016-11-23",
          topic: "<img> 的預設圖（onerror）"
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