<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／OS</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-tag">
        <a href="#tagWindows">Windows</a>
      </div>
      <div class="inside-container">
        <div id="tagWindows" class="inside-list">
          <h2>Windows</h2>
          <ul>
            <li v-for="item in filterWindows" :key="item.id">
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
      winlists: [
        {
          id: 9,
          href: "os_ms_bat_rename",
          time: "2019-05-10",
          topic: ".bat：批次更改副檔名（rename）"
        },
        {
          id: 8,
          href: "os_ms_msdos_type",
          time: "2017-06-01",
          topic: "MS-DOS：顯示檔案內容（type）"
        },
        {
          id: 7,
          href: "os_ms_msdos_dir",
          time: "2017-05-08",
          topic: "MS-DOS：顯示資訊（dir）"
        },
        {
          id: 6,
          href: "os_ms_msdos_copy",
          time: "2017-05-06",
          topic: "MS-DOS：複製檔案（copy）"
        },
        {
          id: 5,
          href: "os_ms_msdos_del",
          time: "2017-05-06",
          topic: "MS-DOS：刪除檔案（del）"
        },
        {
          id: 4,
          href: "os_ms_msdos_rd",
          time: "2017-05-06",
          topic: "MS-DOS：刪除空目錄（rd）"
        },
        {
          id: 3,
          href: "os_ms_msdos_md",
          time: "2017-05-05",
          topic: "MS-DOS：建立目錄（md）"
        },
        {
          id: 2,
          href: "os_ms_msdos_ren",
          time: "2017-05-05",
          topic: "MS-DOS：重新命名（ren）"
        },
        {
          id: 1,
          href: "os_ms_msdos_cd",
          time: "2017-05-04",
          topic: "MS-DOS：移動路徑（cd）"
        }
      ]
    };
  },

  computed: {
    filterWindows: function() {
      var search = this;
      return this.winlists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>