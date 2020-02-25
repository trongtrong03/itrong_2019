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
      <div class="inside-container">
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-list-ul"></i>
            <b>Bash</b>
          </button>
        </div>
        <!-- Bash -->
        <div class="inside-list" v-if="active==1">
          <ul>
            <li v-for="item in filterNt" :key="item.id">
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
      nts: [
        {
            id: 19,
            href: 'git_bash_amend',
            time: '2019-10-20',
            topic: 'Notes20-- 修改 Commit 記錄（--amend）',
        },
        {
            id: 19,
            href: 'git_bash_diff',
            time: '2019-10-17',
            topic: 'Notes19-- 差異比對（diff）',
        },
        {
            id: 18,
            href: 'git_bash_clone',
            time: '2019-10-14',
            topic: 'Notes18-- 複製（clone）',
        },
        {
            id: 17,
            href: 'git_bash_pull',
            time: '2019-10-14',
            topic: 'Notes17-- 拉取（pull）',
        },
        {
            id: 16,
            href: 'git_bash_push',
            time: '2019-10-09',
            topic: 'Notes16-- 推送（push）',
        },
        {
            id: 15,
            href: 'git_bash_remote2',
            time: '2019-10-05',
            topic: 'Notes15-- 遠端（remote）的相關指令',
        },
        {
            id: 14,
            href: 'git_bash_remote',
            time: '2019-10-03',
            topic: 'Notes14-- 設定遠端（remote）',
        },
        {
            id: 13,
            href: 'git_bash_add',
            time: '2019-10-02',
            topic: 'Notes13-- 補遺：新增檔案（add）',
        },
        {
            id: 12,
            href: 'git_bash_merge3',
            time: '2019-10-01',
            topic: 'Notes12-- 合併（merge）：衝突',
        },
        {
            id: 11,
            href: 'git_bash_merge2',
            time: '2019-10-01',
            topic: 'Notes11-- 合併（merge）：還原合併',
        },
        {
            id: 10,
            href: 'git_bash_merge',
            time: '2019-09-30',
            topic: 'Notes10-- 合併（merge）：分支合併',
        },
        {
            id: 9,
            href: 'git_bash_branch3',
            time: '2019-09-30',
            topic: 'Notes09-- 分支（branch）：刪除',
        },
        {
            id: 8,
            href: 'git_bash_branch2',
            time: '2019-09-30',
            topic: 'Notes08-- 分支（branch）：進行作業',
        },
        {
            id: 7,
            href: 'git_bash_branch',
            time: '2019-09-30',
            topic: 'Notes07-- 分支（branch）：建立與切換',
        },
        {
            id: 6,
            href: 'git_bash_reset',
            time: '2019-09-28',
            topic: 'Notes06-- 將檔案從暫存區返回工作目錄（reset）',
        },
        {
            id: 5,
            href: 'git_bash_log',
            time: '2019-09-27',
            topic: 'Notes05-- 查閱提交的歷史記錄（log）',
        },
        {
            id: 4,
            href: 'git_bash_status',
            time: '2019-09-26',
            topic: 'Notes04-- 查看檔案狀態（status）',
        },
        {
            id: 3,
            href: 'git_bash_add_and_commit',
            time: '2019-09-26',
            topic: 'Notes03-- 新增檔案（add）並提交（commit）',
        },
        {
            id: 2,
            href: 'git_bash_init',
            time: '2019-09-25',
            topic: 'Notes02-- 建立 Git 版本庫（init）',
        },
        {
            id: 1,
            href: 'git_bash_config',
            time: '2019-09-25',
            topic: 'Notes01-- Git 初始設定（config）',
        },
      ]
    };
  },

  computed: {
    filterNt: function() {
      var search = this;
      return this.nts.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>