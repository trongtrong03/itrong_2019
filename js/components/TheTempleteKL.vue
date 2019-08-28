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
      <div class="inside-tag">
        <a href="#tagWF">網頁前端</a>
        <a href="#tagVM">影像相關</a>
        <a href="#tagIS">資訊安全</a>
      </div>
      <div class="inside-container">
        <div id="tagWF" class="inside-list">
          <h2>網頁前端</h2>
          <ul>
            <li v-for="item in filterWFs" :key="item.id">
              <a :href="item.href + format">
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <div id="tagVM" class="inside-list">
          <h2>影像相關</h2>
          <ul>
            <li v-for="item in filterVMs" :key="item.id">
              <a :href="item.href + format">
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <div id="tagIS" class="inside-list">
          <h2>資訊安全</h2>
          <ul>
            <li v-for="item in filterISs" :key="item.id">
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
      wflists: [
        {
          id: 9,
          href: "kl_wf_ui_formdesign",
          time: "2017-11-17",
          topic: "「沒有人喜歡表單輸入」──思考如何表單填寫的設計"
        },
        {
          id: 8,
          href: "kl_wf_ui_gestalt",
          time: "2017-11-12",
          topic: "UI 的格式塔心理學（Gestalt psychology）"
        },
        {
          id: 7,
          href: "kl_wf_uidesign_example",
          time: "2017-11-10",
          topic: "幾個成功的 UI 設計範例"
        },
        {
          id: 6,
          href: "kl_wf_what_is_ux",
          time: "2017-11-04",
          topic: "淺談 UX（使用者經驗）"
        },
        {
          id: 5,
          href: "kl_wf_what_is_ui",
          time: "2017-11-01",
          topic: "淺談 UI（使用者介面）"
        },
        {
          id: 4,
          href: "kl_wf_breadcrumb_trail",
          time: "2017-04-27",
          topic: "什麼是麵包屑導覽（Breadcrumb Trail）？"
        },
        {
          id: 3,
          href: "kl_wf_vendor_prefixes",
          time: "2016-12-13",
          topic: "什麼是跨瀏覽器前綴？"
        },
        {
          id: 2,
          href: "kl_wf_appicon",
          time: "2016-12-01",
          topic: "什麼是 App icon？"
        },
        {
          id: 1,
          href: "kl_wf_oocss",
          time: "2016-11-25",
          topic: "什麼是 OOCSS？"
        }
      ],
      vmlists: [
        {
          id: 4,
          href: "kl_vm_heif",
          time: "2017-11-26",
          topic: "什麼是 HEIF？"
        },
        {
          id: 3,
          href: "kl_vm_apng",
          time: "2017-08-03",
          topic: "什麼是 APNG？"
        },
        {
          id: 2,
          href: "kl_vm_api",
          time: "2017-05-03",
          topic: "什麼是 API？"
        },
        {
          id: 1,
          href: "kl_vm_gpu",
          time: "2017-04-10",
          topic: "什麼是 GPU？"
        }
      ],
      islists: [
        {
          id: 2,
          href: "kl_is_domain",
          time: "2018-12-06",
          topic: "認識網域（Domain Name）"
        },
        {
          id: 1,
          href: "kl_is_gdpr",
          time: "2018-11-04",
          topic: "GDPR：歐盟一般資料保護規章"
        }
      ]
    };
  },

  computed: {
    filterWFs: function() {
      var search = this;
      return this.wflists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterVMs: function() {
      var search = this;
      return this.vmlists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterISs: function() {
      var search = this;
      return this.islists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>