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
          id: 14,
          href: 'git_bash_remote',
          time: '2019-10-03',
          topic: 'Lesson14-- 設定遠端（remote）',
        },
        {
          id: 13,
          href: 'git_bash_add',
          time: '2019-10-02',
          topic: 'Lesson13-- 補遺：新增檔案（add）',
        },
        {
          id: 12,
          href: 'git_bash_merge3',
          time: '2019-10-01',
          topic: 'Lesson12-- 合併（merge）：衝突',
        },
        {
          id: 11,
          href: 'git_bash_merge2',
          time: '2019-10-01',
          topic: 'Lesson11-- 合併（merge）：還原合併',
        },
        {
          id: 10,
          href: 'git_bash_merge',
          time: '2019-09-30',
          topic: 'Lesson10-- 合併（merge）：分支合併',
        },
        {
          id: 9,
          href: 'git_bash_branch3',
          time: '2019-09-30',
          topic: 'Lesson09-- 分支（branch）：刪除',
        },
        {
          id: 8,
          href: 'git_bash_branch2',
          time: '2019-09-30',
          topic: 'Lesson08-- 分支（branch）：進行作業',
        },
        {
          id: 7,
          href: 'git_bash_branch',
          time: '2019-09-30',
          topic: 'Lesson07-- 分支（branch）：建立與切換',
        },
        {
          id: 6,
          href: 'git_bash_reset',
          time: '2019-09-28',
          topic: 'Lesson06-- 將檔案從暫存區返回工作目錄（reset）',
        },
        {
          id: 5,
          href: 'git_bash_log',
          time: '2019-09-27',
          topic: 'Lesson05-- 查閱提交的歷史記錄（log）',
        },
        {
          id: 4,
          href: 'git_bash_status',
          time: '2019-09-26',
          topic: 'Lesson04-- 查看檔案狀態（status）',
        },
        {
          id: 3,
          href: 'git_bash_add_and_commit',
          time: '2019-09-26',
          topic: 'Lesson03-- 新增檔案（add）並提交（commit）',
        },
        {
          id: 2,
          href: 'git_bash_init',
          time: '2019-09-25',
          topic: 'Lesson02-- 建立 Git 版本庫（init）',
        },
        {
          id: 1,
          href: 'git_bash_config',
          time: '2019-09-25',
          topic: 'Lesson01-- Git 初始設定（config）',
        },
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