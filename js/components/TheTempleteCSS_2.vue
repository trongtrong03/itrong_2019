<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／選擇器（Selectors）</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query"/>
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-form">
          <h2>選擇器列表（Selectors）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCSS" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b class="two-rows">
                  <q>Ex:</q>
                  {{ item.example }}
                  <br />
                  {{ item.note }}
                </b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b class="two-rows">
                  <q>Ex:</q>
                  {{ item.example }}
                  <br />
                  {{ item.note }}
                </b>
              </span>
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
      isLink: true,
      isCSS3: true,
      query: "",

      // data
      cssSelectors: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: ".class",
          example: ".index-wrap",
          note: "選擇 class 名稱為 index-wrap 的所有元素。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: ".class1.class2",
          example: ".index-wrap.blue",
          note: "選擇 class 名稱同時包含 index-wrap 與 blue 的所有元素。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: ".class1 .class2",
          example: ".index-wrap .blue",
          note:
            "選擇所有 class 名稱為 .index-wrap 元素裡，class 名稱為 blue 的子元素。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "#id",
          example: "#index",
          note: "選擇 ID 為 index 的元素。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "*",
          example: "*",
          note: "選擇所有元素。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "element",
          example: "div",
          note: "選擇所有 <div> 元素。",
          isCSS3: false
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "element, element",
          example: "div, p",
          note: "選擇所有 <div> 與 <p> 的元素。",
          isCSS3: false
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "element element",
          example: "div p",
          note: "選擇所有 <div> 裡的 <p> 元素。",
          isCSS3: false
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "element > element",
          example: "div > p",
          note: "選擇所有 <div> 裡下一層為 <p> 的子元素。",
          isCSS3: false
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "element + element",
          example: "div + p",
          note: "選擇所有 <div> 之後的下一個 <p> 元素。",
          isCSS3: false
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "element ~ element",
          example: "div ~ p",
          note: "選擇所有 <div> 之後的所有 <p> 元素。",
          isCSS3: true
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "[attribute]",
          example: "a[target]",
          note: "選擇帶有 target 屬性的所有 <a> 連結。",
          isCSS3: false
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "[attribute=value]",
          example: "a[target=_blank]",
          note: '選擇屬性值為 target="_blank" 的所有 a 連結。',
          isCSS3: false
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: "[attribute~=value]",
          example: "[title~=car]",
          note: "選擇 title 屬性值裡名稱包含 car 的所有元素。",
          isCSS3: false
        },
        {
          id: 15,
          isLink: false,
          href: "",
          topic: "[attribute|=value]",
          example: "[class|=arrow]",
          note: "選擇 class 屬性值裡名稱包含 arrow 的所有元素。",
          isCSS3: false
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: ":link",
          example: "a:link",
          note: "選擇所有尚未造訪的 <a> 連結。",
          isCSS3: false
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: ":visited",
          example: "a:visited",
          note: "選擇所有已造訪的 <a> 連結。",
          isCSS3: false
        },
        {
          id: 18,
          isLink: false,
          href: "",
          topic: ":active",
          example: "a:active",
          note: "選擇作用中的 <a> 連結。",
          isCSS3: false
        },
        {
          id: 19,
          isLink: false,
          href: "",
          topic: ":hover",
          example: "a:hover",
          note: "選擇滑鼠正懸停上方的 <a> 連結。",
          isCSS3: false
        },
        {
          id: 20,
          isLink: false,
          href: "",
          topic: ":focus",
          example: "input:focus",
          note: "選擇正獲得焦點的 <input> 元素。",
          isCSS3: false
        },
        {
          id: 21,
          isLink: false,
          href: "",
          topic: ":first-letter",
          example: "p:first-letter",
          note: "選擇每個 <p> 元素的首字母。",
          isCSS3: false
        },
        {
          id: 22,
          isLink: false,
          href: "",
          topic: ":first-line",
          example: "p:first-line",
          note: "選擇每個 <p> 元素的首行。",
          isCSS3: false
        },
        {
          id: 23,
          isLink: false,
          href: "",
          topic: ":first-child",
          example: "p:first-child",
          note: "選擇同階層的第一個 <p> 元素。",
          isCSS3: false
        },
        {
          id: 24,
          isLink: false,
          href: "",
          topic: ":before / ::before",
          example: "p:before / p::before",
          note: "在每個 <p> 元素內容之前插入內容。",
          isCSS3: false
        },
        {
          id: 25,
          isLink: false,
          href: "",
          topic: ":after / ::after",
          example: "p:after / p::after",
          note: "在每個 <p> 元素內容之後插入內容。",
          isCSS3: false
        },
        {
          id: 26,
          isLink: false,
          href: "",
          topic: ":lang(language)",
          example: "p:lang(tw)",
          note: "選擇 lang 屬性值包含 tw 的所有 <p> 元素。",
          isCSS3: false
        },
        {
          id: 27,
          isLink: false,
          href: "",
          topic: "[attribute^=value]",
          example: 'a[src^="https"]',
          note: "選擇其 src 屬性值為 https 開頭的所有 <a> 元素。",
          isCSS3: true
        },
        {
          id: 28,
          isLink: false,
          href: "",
          topic: "[attribute$=value]",
          example: 'a[src$=".jpg"]',
          note: "選擇其 src 屬性值為 .jpg 結尾的所有 <a> 元素。",
          isCSS3: true
        },
        {
          id: 29,
          isLink: false,
          href: "",
          topic: "[attribute*=value]",
          example: 'a[src*="abc"]',
          note: "選擇其 src 屬性值中包含 abc 字串的所有 <a> 元素。",
          isCSS3: true
        },
        {
          id: 30,
          isLink: false,
          href: "",
          topic: ":first-of-type",
          example: "p:first-of-type",
          note: "選擇同階層所有 <p> 元素的第一個。",
          isCSS3: true
        },
        {
          id: 31,
          isLink: false,
          href: "",
          topic: ":last-of-type",
          example: "p:last-of-type",
          note: "選擇同階層所有 <p> 元素的最後一個。",
          isCSS3: true
        },
        {
          id: 32,
          isLink: false,
          href: "",
          topic: ":only-of-type",
          example: "p:only-of-type",
          note: "選擇父階層內唯一的 <p> 子元素（若同時存在複數 <p> 則無效）。",
          isCSS3: true
        },
        {
          id: 33,
          isLink: false,
          href: "",
          topic: ":only-child",
          example: "p:only-child",
          note:
            "選擇父階層內唯一的子元素且元素為 <p>（若存在其他子元素則無效）。",
          isCSS3: true
        },
        {
          id: 34,
          isLink: false,
          href: "",
          topic: ":nth-child(n)",
          example: "p:nth-child(3)",
          note: "選擇父元素內的第三個子元素且類型為 <p>。",
          isCSS3: true
        },
        {
          id: 35,
          isLink: false,
          href: "",
          topic: ":nth-last-child(n)",
          example: "p:nth-last-child(3)",
          note: "選擇父元素內的倒數第三個子元素且類型為 <p>。",
          isCSS3: true
        },
        {
          id: 36,
          isLink: false,
          href: "",
          topic: ":nth-of-type(n)",
          example: "p:nth-of-type(3)",
          note: "選擇父元素內的第三個 <p> 元素。",
          isCSS3: true
        },
        {
          id: 37,
          isLink: false,
          href: "",
          topic: ":nth-last-of-type(n)",
          example: "p:nth-last-of-type(3)",
          note: "選擇父元素內的倒數第三個 <p> 元素。",
          isCSS3: true
        },
        {
          id: 38,
          isLink: false,
          href: "",
          topic: ":last-child",
          example: "p:last-child",
          note: "選擇父元素內的最後一個子元素且類型為 <p>。",
          isCSS3: true
        },
        {
          id: 39,
          isLink: false,
          href: "",
          topic: ":root",
          example: ":root",
          note: "選擇文檔的根元素（<html>）。",
          isCSS3: true
        },
        {
          id: 40,
          isLink: false,
          href: "",
          topic: ":empty",
          example: "選擇內容為空的 <p> 元素。",
          note: "xxxxxx。",
          isCSS3: true
        },
        {
          id: 41,
          isLink: false,
          href: "",
          topic: ":target",
          example: "#item:target",
          note: "選擇跳轉目標到 #item 的元素。",
          isCSS3: true
        },
        {
          id: 42,
          isLink: false,
          href: "",
          topic: ":enabled",
          example: "input:enabled",
          note: "選擇所有啟用中 <input> 元素。",
          isCSS3: true
        },
        {
          id: 43,
          isLink: false,
          href: "",
          topic: ":disabled",
          example: "input:disabled",
          note: "選擇所有禁用中的 <input> 元素。",
          isCSS3: true
        },
        {
          id: 44,
          isLink: false,
          href: "",
          topic: ":checked",
          example: "input:checked",
          note: "選擇所有選擇中的 <input> 元素。",
          isCSS3: true
        },
        {
          id: 45,
          isLink: false,
          href: "",
          topic: ":not(selector)",
          example: ":not(p)",
          note: "選擇所有不是 <p> 元素的其他元素。",
          isCSS3: true
        },
        {
          id: 46,
          isLink: false,
          href: "",
          topic: "::selection",
          example: "::selection",
          note: "選擇被使用者選取中的部分（反白狀態）。",
          isCSS3: true
        }
      ]
    };
  },

  computed: {
    filterCSS: function() {
      var search = this;
      return this.cssSelectors.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>