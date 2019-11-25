<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／jQuery</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <button class="inside-btn" @click="clickOpen" :class="{active: isActive}">
          <i class="fas fa-list-ul"></i>
        </button>
        <div class="inside-form is-hide" :class="{active: isActive}">
          <h2>選擇器</h2>
          <ul class="inside-flex">
            <li v-for="item in apiSelector_1" :key="item.id">
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <ul class="inside-flex">
            <li v-for="item in apiSelector_2" :key="item.id">
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <ul class="inside-flex">
            <li v-for="item in apiSelector_3" :key="item.id">
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <ul class="inside-flex">
            <li v-for="item in apiSelector_4" :key="item.id">
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <ul class="inside-flex">
            <li v-for="item in apiSelector_5" :key="item.id">
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">{{ item.note }}</b>
              </span>
            </li>
          </ul>
        </div>
        <div class="inside-list">
          <ul>
            <li v-for="item in listJQ" :key="item.id">
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
      isActive: false,
      isLink: true,
      query: "",

      // data
      apiSelectorList_1: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$('*')",
          note: "* 指定所有元素。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$('#idName')",
          note: "#id 指定符合選取 ID 名稱的元素。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$('.className')",
          note: "選取符合 class 名稱的元素。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$('.cName1.cName2')",
          note: "選取同時擁有 class 名稱「cName1」與「cName2」的所有元素。"
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "$('element')",
          note: "選取指定的所有元素。"
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "$('element1, element2, element3')",
          note: "選取指定的複數所有元素（也可以指定 ID 或 class）。"
        },
      ],

      apiSelectorList_2: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$('element:first')",
          note: "選取指定的所有元素裡的第一個。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$('element:last')",
          note: "選取指定的所有元素裡的最後一個。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$('element:even')",
          note: "選取指定的所有元素裡的偶數項。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$('element:odd')",
          note: "選取指定的所有元素裡的奇數項。"
        },
      ],

      apiSelectorList_3: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$('element:eq(index)')",
          note: "選取指定元素的索引值數字對應的項目，index 從 0 開始計算，例如：$('ul li:eq(3)')。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$('element:gt(index)')",
          note: "列出選取大於索引值數字的指定元素。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$('element:lt(index)')",
          note: "列出選取小於索引值數字的指定元素。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$('element:not(selector)')",
          note: "例如：$('input:not(:empty)')，即選取所有不為空的 input 元素。"
        },
      ],

      apiSelectorList_4: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$(':header')",
          note: "選取所有標題元素：<h1> ~ <h6>。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$(':animated')",
          note: "選取所有正在執行 animate 動畫的元素。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$(':contains(text)')",
          note: "選取所有包含指令字串（text）的元素。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$(':empty')",
          note: "選取所有空元素（沒有子元素或文本的元素）。"
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "$(':hidden')",
          note: "選取所有隱藏的元素。"
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "$(':visible')",
          note: "選取所有可見的元素。"
        },
      ],

      apiSelectorList_5: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$('[attribute]')",
          note: "選取所有包含指定屬性的元素，例如：$('[href]')。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$('[attribute=value]')",
          note: "選取所有包含指定屬性與等同其值的元素。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$('[attribute!=value]')",
          note: "選取所有包含指定屬性與不等同其值的元素。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$('[attribute$=value]')",
          note: "選取所有包含指定屬性與包含其值的元素。"
        },
      ],




      jqLists: [
        {
          id: 1,
          href: "",
          time: "2019-xx-xx",
          topic: "title"
        }
      ]
    };
  },

  methods: {
    clickOpen: function() {
      this.isActive = !this.isActive;
    }
  },

  computed: {
    apiSelector_1: function() {
      var search = this;
      return this.apiSelectorList_1.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiSelector_2: function() {
      var search = this;
      return this.apiSelectorList_2.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiSelector_3: function() {
      var search = this;
      return this.apiSelectorList_3.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiSelector_4: function() {
      var search = this;
      return this.apiSelectorList_4.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiSelector_5: function() {
      var search = this;
      return this.apiSelectorList_5.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    listJQ: function() {
      var search = this;
      return this.jqLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>