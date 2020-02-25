<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Knowledge</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-box is-kl" v-if="active==1">
          <ul>
            <li v-for="item in filterList" :key="item.id">
              <a :href="item.href + format">
                <figure>
                  <span v-if="item.isImg">
                    <img :src="'images/pic/knowledge/cover/' + item.img + '.jpg'" />
                  </span>
                  <span v-else>
                    <img :src="'images/pic/knowledge/cover/default.jpg'" />
                  </span>
                  <time>{{ item.time }}</time>
                  <h2>{{ item.topic }}</h2>
                </figure>
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
      lists: [
        {
          id: 12,
          isImg: true,
          img: "default",
          href: "kl_bat_rename",
          time: "2019-06-11",
          topic: "作業系統：做一個簡易的批次更改副檔名功能執行程式"
        },
        {
          id: 11,
          isImg: true,
          img: "default",
          href: "kl_msdos",
          time: "2019-05-09",
          topic: "作業系統：MS-DOS 的基本指令介紹"
        },
        {
          id: 10,
          isImg: true,
          img: "default",
          href: "kl_whatis_domain",
          time: "2018-12-06",
          topic: "認識網域（Domain Name）"
        },
        {
          id: 9,
          isImg: true,
          img: "default",
          href: "kl_whatis_gdpr",
          time: "2018-11-04",
          topic: "GDPR：歐盟一般資料保護規章"
        },
        {
          id: 8,
          isImg: true,
          img: "default",
          href: "kl_whatis_heif",
          time: "2017-11-26",
          topic: "什麼是 HEIF？"
        },
        {
          id: 7,
          isImg: true,
          img: "default",
          href: "kl_ui_gestalt",
          time: "2017-11-12",
          topic: "UI 的格式塔心理學（Gestalt psychology）"
        },
        {
          id: 6,
          isImg: true,
          img: "default",
          href: "kl_whatis_uiux",
          time: "2017-11-01",
          topic: "關於 UI 與 UX 的三兩事"
        },
        {
          id: 5,
          isImg: true,
          img: "default",
          href: "kl_whatis_apng",
          time: "2017-08-03",
          topic: "什麼是 APNG？"
        },
        {
          id: 4,
          isImg: true,
          img: "default",
          href: "kl_whatis_api",
          time: "2017-05-03",
          topic: "什麼是 API？"
        },
        {
          id: 3,
          isImg: true,
          img: "default",
          href: "kl_breadcrumb_trail",
          time: "2017-04-27",
          topic: "什麼是麵包屑導覽（Breadcrumb Trail）？"
        },
        {
          id: 2,
          isImg: true,
          img: "default",
          href: "kl_vendor_prefixes",
          time: "2016-12-13",
          topic: "什麼是跨瀏覽器前綴？"
        },
        {
          id: 1,
          isImg: true,
          img: "default",
          href: "kl_appicon",
          time: "2016-12-01",
          topic: "什麼是 App icon？"
        },
      ],
    };
  },

  computed: {
    filterList: function() {
      var search = this;
      return this.lists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>