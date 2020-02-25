<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／Haml</h2>
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
            <b>PUG</b>
          </button>
        </div>
        <!-- Pug -->
        <div class="inside-list" v-if="active==1">
          <ul>
            <li v-for="item in filterPug" :key="item.id">
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
      pugLists: [
        {
          id: 15,
          href: "haml_pug_comment",
          time: "2019-10-27",
          topic: "Notes15-- 註解（Comment）"
        },
        {
          id: 14,
          href: "haml_pug_iteration",
          time: "2019-10-26",
          topic: "Notes14-- 迭代（Iteration）"
        },
        {
          id: 13,
          href: "haml_pug_for",
          time: "2019-10-25",
          topic: "Notes13-- 迴圈（For）"
        },
        {
          id: 12,
          href: "haml_pug_conditional",
          time: "2019-10-25",
          topic: "Notes12-- 條件式（Conditional）"
        },
        {
          id: 11,
          href: "haml_pug_interpolation",
          time: "2019-10-24",
          topic: "Notes11-- 變數（Variable）與嵌入（Interpolation）"
        },
        {
          id: 10,
          href: "haml_pug_code",
          time: "2019-10-24",
          topic: "Notes10-- 程式碼輸出的觀念（Code）"
        },
        {
          id: 9,
          href: "haml_pug_mixin",
          time: "2019-10-24",
          topic: "Notes09-- 混入（Mixin）"
        },
        {
          id: 8,
          href: "haml_pug_inheritance",
          time: "2019-10-23",
          topic: "Notes08-- 模板繼承（Inheritance）"
        },
        {
          id: 7,
          href: "haml_pug_include",
          time: "2019-10-23",
          topic: "Notes07-- 包含（Include）"
        },
        {
          id: 6,
          href: "haml_pug_attribute",
          time: "2019-10-21",
          topic: "Notes06-- 屬性（Attribute）"
        },
        {
          id: 5,
          href: "haml_pug_tag",
          time: "2019-10-21",
          topic: "Notes05-- 元素標籤（Tag）"
        },
        {
          id: 4,
          href: "haml_pug_whitespace",
          time: "2019-10-20",
          topic: "Notes04-- 空白控制（Whitespace Control）"
        },
        {
          id: 3,
          href: "haml_pug_text",
          time: "2019-10-20",
          topic: "Notes03-- 純文本（Plain Text）"
        },
        {
          id: 2,
          href: "haml_pug_doctype",
          time: "2019-10-20",
          topic: "Notes02-- 文件類型（Doctype）"
        },
        {
          id: 1,
          href: "haml_pug_intro",
          time: "2019-10-19",
          topic: "Notes01-- 什麼是 Pug？"
        }
      ]
    };
  },

  computed: {
    filterPug: function() {
      var search = this;
      return this.pugLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>