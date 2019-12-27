<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Code Editor</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-list-ul"></i>
            <b>VS Code</b>
          </button>
          <button :class="active==2 ? 'active' : ''" @click="active=2">
            <i class="fas fa-list-ul"></i>
            <b>Sublime Text</b>
          </button>
        </div>
        <!-- Vscode -->
        <div class="inside-list" v-if="active==1">
          <ul>
            <li v-for="item in filterVscodes" :key="item.id">
              <a :href="item.href + format">
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <!-- Sublime -->
        <div class="inside-list" v-if="active==2">
          <ul>
            <li v-for="item in filterSublimes" :key="item.id">
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
      active: 1,

      // data
      vlists: [
        {
          id: 5,
          href: "editor_vscode_plugin_liveserver",
          time: "2019-07-16",
          topic: "VS Code 實用外掛介紹：Live Server"
        },
        {
          id: 4,
          href: "editor_vscode_langch",
          time: "2019-04-01",
          topic: "VS Code 實用外掛介紹：中文化"
        },
        {
          id: 3,
          href: "editor_vscode_hotkey",
          time: "2019-03-31",
          topic: "VS Code 實用快捷鍵一覽表"
        },
        {
          id: 2,
          href: "editor_vscode_use_git",
          time: "2019-03-25",
          topic: "VS Code 輕鬆使用 Git"
        },
        {
          id: 1,
          href: "editor_vscode_install",
          time: "2019-03-23",
          topic: "VS Code 簡介與安裝"
        }
      ],
      slists: [
        {
          id: 3,
          href: "editor_sublime_plugins",
          time: "2016-11-27",
          topic: "Sublime Text 套件推薦列表"
        },
        {
          id: 2,
          href: "editor_sublime_hotkey",
          time: "2016-11-25",
          topic: "Sublime Text 常用快捷鍵列表"
        },
        {
          id: 1,
          href: "editor_sublime_install",
          time: "2016-11-22",
          topic: "Sublime Text 安裝與初始設定"
        }
      ]
    };
  },

  computed: {
    filterVscodes: function() {
      var search = this;
      return this.vlists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterSublimes: function() {
      var search = this;
      return this.slists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>