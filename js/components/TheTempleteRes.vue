<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／推薦資源</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-tag">
        <a href="#tagWeb">網頁前端</a>
        <a href="#tagColor">色彩</a>
        <a href="#tagMT">素材模板</a>
        <a href="#tagTA">技術教學</a>
        <a href="#tagOthers">未分類</a>
      </div>
      <div class="inside-container">
        <div id="tagWeb" class="inside-box">
          <h2>網頁前端</h2>
          <ul>
            <li v-for="item in filterWeb" :key="item.id">
              <a :href="item.href" target="_blank">
                <figure>
                  <span v-if="item.isImg">
                    <img :src="'images/pic/resources/' + item.img + '.jpg'" />
                  </span>
                  <span v-else>
                    <img :src="'images/pic/resources/default.png'" />
                  </span>
                  <h2>{{ item.topic }}</h2>
                  <figcaption>{{ item.note }}</figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
        <div id="tagColor" class="inside-box">
          <h2>色彩</h2>
          <ul>
            <li v-for="item in filterColor" :key="item.id">
              <a :href="item.href" target="_blank">
                <figure>
                  <span v-if="item.isImg">
                    <img :src="'images/pic/resources/' + item.img + '.jpg'" />
                  </span>
                  <span v-else>
                    <img :src="'images/pic/resources/default.png'" />
                  </span>
                  <h2>{{ item.topic }}</h2>
                  <figcaption>{{ item.note }}</figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
        <div id="tagMT" class="inside-box">
          <h2>素材模板</h2>
          <ul>
            <li v-for="item in filterMT" :key="item.id">
              <a :href="item.href" target="_blank">
                <figure>
                  <span v-if="item.isImg">
                    <img :src="'images/pic/resources/' + item.img + '.jpg'" />
                  </span>
                  <span v-else>
                    <img :src="'images/pic/resources/default.png'" />
                  </span>
                  <h2>{{ item.topic }}</h2>
                  <figcaption>{{ item.note }}</figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
        <div id="tagTA" class="inside-box">
          <h2>技術教學</h2>
          <ul>
            <li v-for="item in filterTA" :key="item.id">
              <a :href="item.href" target="_blank">
                <figure>
                  <span v-if="item.isImg">
                    <img :src="'images/pic/resources/' + item.img + '.jpg'" />
                  </span>
                  <span v-else>
                    <img :src="'images/pic/resources/default.png'" />
                  </span>
                  <h2>{{ item.topic }}</h2>
                  <figcaption>{{ item.note }}</figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
        <div id="tagOthers" class="inside-box">
          <h2>未分類</h2>
          <ul>
            <li v-for="item in filterOthers" :key="item.id">
              <a :href="item.href" target="_blank">
                <figure>
                  <span v-if="item.isImg">
                    <img :src="'images/pic/resources/' + item.img + '.jpg'" />
                  </span>
                  <span v-else>
                    <img :src="'images/pic/resources/default.png'" />
                  </span>
                  <h2>{{ item.topic }}</h2>
                  <figcaption>{{ item.note }}</figcaption>
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
      isImg: true,
      query: "",

      // data
      res_webs: [
        {
          id: 14,
          isImg: true,
          img: "statcounter",
          href: "http://gs.statcounter.com/",
          topic: "StatCounter",
          note: "可查詢目前使用者主流瀏覽器的種類、排名、比例。"
        },
        {
          id: 13,
          isImg: true,
          img: "shejidaren",
          href: "http://hao.shejidaren.com/",
          topic: "設計導航",
          note:
            "集結許多設計人常造訪或推薦的實用網站，有事沒事可以來造訪看看，或許會發現一些未知的寶典。"
        },
        {
          id: 12,
          isImg: true,
          img: "adobefonts",
          href: "https://fonts.adobe.com/",
          topic: "Adobe Fonts",
          note: "由 Adobe 提供的文字庫，可以將其提供的字型用於網頁之中。"
        },
        {
          id: 11,
          isImg: true,
          img: "freefrontend",
          href: "http://freefrontend.com/",
          topic: "FREE FRONTEND",
          note: "提供多種 CSS 的實用效果範例，可打包下載應用於自己的專案上。"
        },
        {
          id: 9,
          isImg: true,
          img: "htmlarrows",
          href: "https://www.toptal.com/designers/htmlarrows/",
          topic: "HTML Symbols",
          note:
            "提供多種特殊符號的網頁編碼，是除了 Font icon 之外替代使用圖片的不錯方法。"
        },
        {
          id: 8,
          isImg: true,
          img: "normalize",
          href: "http://necolas.github.io/normalize.css/",
          topic: "Normalize.css",
          note:
            "目前最流行的 CSS 重製樣式表之一，較另一款「Reset」多些彈性，並保留有價值的屬性默認值。"
        },
        {
          id: 7,
          isImg: true,
          img: "fontawesome",
          href: "http://fontawesome.io/",
          topic: "Font Awesome",
          note: "目前市面上最流行的文字 Icon 工具。"
        },
        {
          id: 6,
          isImg: true,
          img: "animate",
          href: "https://daneden.github.io/animate.css/",
          topic: "Animate.css",
          note:
            "頗為流行的現成 CSS 動畫效果套件，可直接下載 CSS 檔至自己網頁資料夾中使用、編輯。"
        },
        {
          id: 5,
          isImg: true,
          img: "prefixfree",
          href: "http://leaverou.github.io/prefixfree/",
          topic: "-prefix-free",
          note:
            "-prefix-free 是一套 JavaScript 工具，可以自動檢查網頁中的 CSS 程式碼，將必要的供應商前綴自動加上去。"
        },
        {
          id: 4,
          isImg: false,
          img: "",
          href: "http://amazeui.org/",
          topic: "Amaze UI",
          note:
            "號稱「中国首个开源 HTML5 跨屏前端框架」，和 Bootstrap 有異曲同工之妙。"
        },
        {
          id: 3,
          isImg: true,
          img: "bootstrap",
          href: "http://getbootstrap.com/",
          topic: "Bootstrap",
          note:
            "目前受歡迎的前端框架之一，包含 Html、CSS（Less）、Javascript 等模組化架構。"
        },
        {
          id: 2,
          isImg: true,
          img: "highlightjs",
          href: "https://highlightjs.org/",
          topic: "highlight.js",
          note:
            "highlight.js 是一款用 JavaScript 寫成的 library，用途為給程式碼片段高亮化（highlight），如果想給自己展示的程式碼加上色彩，就可以使用這個套件來實現。"
        },
        {
          id: 1,
          isImg: true,
          img: "iviewui",
          href: "https://www.iviewui.com/",
          topic: "iView",
          note: "一套基於 Vue.js 的高質量 UI 组件庫。"
        }
      ],
      res_colors: [
        {
          id: 7,
          isImg: true,
          img: "webgradients",
          href: "https://webgradients.com/",
          topic: "WebGradients",
          note:
            "擁有 180 款利用 CSS3 background linear gradients 調配而成的漸層色彩庫。"
        },
        {
          id: 6,
          isImg: true,
          img: "colourco",
          href: "http://www.colourco.de/",
          topic: "Colourco",
          note:
            "移動滑鼠可即時取得所需之色彩代碼。"
        },
        {
          id: 5,
          isImg: true,
          img: "colormind",
          href: "http://colormind.io/bootstrap/",
          topic: "Colormind",
          note: "隨機產生配色的網站，此網站較重視略為中性的調和色，產生出來的色調搭配於視覺上較為柔和。"
        },
        {
          id: 4,
          isImg: true,
          img: "color-hex",
          href: "http://www.color-hex.com/color-palettes/",
          topic: "color-hex",
          note: "一個數量高達四萬多款的色彩搭配網站。"
        },
        {
          id: 3,
          isImg: true,
          img: "lolcolors",
          href: "http://www.lolcolors.com/",
          topic: "LOLCOLORS",
          note:
            "水滴型的顏色搭配，提供多樣的顏色組合，讓視覺設計更加流暢。"
        },
        {
          id: 2,
          isImg: true,
          img: "colorhunt",
          href: "http://colorhunt.co/",
          topic: "Color Hunt",
          note: "每天都會釋出一組新的顏色搭配，若在設計配色運用上滯礙難行可多加利用。"
        },
        {
          id: 1,
          isImg: true,
          img: "nipponcolors",
          href: "http://nipponcolors.com/",
          topic: "日本傳統色系參考",
          note: "展示日本傳統風格的各種色彩。"
        }
        // {
        //   id: 3,
        //   isImg: true,
        //   img: "",
        //   href: "xxxxx",
        //   topic: "xxxxx",
        //   note: "xxxx"
        // },
      ],
      res_mts: [
        {
          id: 18,
          isImg: false,
          img: "",
          href: "http://iosfonts.com/",
          topic: "iOS Fonts",
          note: "可查詢目前 iOS 系統有支援哪些字型。"
        },
        {
          id: 17,
          isImg: true,
          img: "mobile-patterns",
          href: "http://www.mobile-patterns.com/",
          topic: "MOBILE PATTERNS",
          note:
            "一個致力於手機裝置介面設計的資源網站，分別提供 Android 及 iOS 的設計範例，同時也提供幾種常見功能的分類選項，得以迅速查閱想要參考的設計方式。"
        },
        {
          id: 16,
          isImg: true,
          img: "csswinner",
          href: "http://www.csswinner.com/",
          topic: "CSSWINNER",
          note:
            "顧名思義，CSSWINNER 是評分各式網頁作品的線上平台，可以看到諸多網站的各項評分，設計師可以此為借鏡，推敲現今受歡迎的網站設計風格。"
        },
        {
          id: 15,
          isImg: true,
          img: "material",
          href: "https://material.io/devices/",
          topic: "Device Metrics",
          note:
            "從 Google 的 Material Design 網站提供的 Device Metrics 工具，收錄近年較知名、常見的行動裝置資訊，提供其畫面尺寸、長寬比、PPI、作業系統類型...等訊息。"
        },
        {
          id: 14,
          isImg: true,
          img: "screensiz",
          href: "http://screensiz.es/",
          topic: "SCREEN SIZ.ES",
          note:
            "與 Device Metrics 工具相同，是查詢各種常見行動裝置各項軟硬體數據的方便網站。"
        },
        {
          id: 13,
          isImg: true,
          img: "pexels",
          href: "https://www.pexels.com/",
          topic: "Pexels",
          note:
            "在 Pexels 圖庫裡收錄的相片素材皆採用 CC0（Creative Commons Zero）授權，可使用於個人或商業用途，亦可編輯、修改、複製，不用標註來源或鏈結。"
        },
        {
          id: 12,
          isImg: true,
          img: "brandeps",
          href: "https://www.brandeps.com/",
          topic: "BrandEPS",
          note: "擁有大量品牌 LOGO 或 icon 圖示矢量圖的素材網站。"
        },
        {
          id: 11,
          isImg: true,
          img: "huaban",
          href: "http://huaban.com/",
          topic: "花瓣网",
          note: "提供很多類型的創作靈感。"
        },
        {
          id: 10,
          isImg: true,
          img: "ene-design",
          href: "http://www.ene-design.com/?p_order=view",
          topic: "ホームページデザイン制作の参考に",
          note: "一個蒐集很多網站設計的日本網站。"
        },
        {
          id: 9,
          isImg: true,
          img: "freepik",
          href: "https://www.freepik.com/",
          topic: "Freepik",
          note: "免費向量、影像、PSD 檔案下載的素材網站。"
        },
        {
          id: 8,
          isImg: true,
          img: "sketchsheets",
          href: "http://sketchsheets.com/",
          topic: "sketchsheets",
          note:
            "可下載瀏覽器、常見行動裝置，甚至是 Apple Watch 的設備模板圖檔。"
        },
        {
          id: 7,
          isImg: true,
          img: "materialpalette",
          href: "https://www.materialpalette.com/",
          topic: "material design palette",
          note:
            "秉持「在大面積色塊使用大膽的配色，利用動畫讓介面更生動活潑」的特色，Google 提供了為網頁進行版型配色的線上工具網站，同時也釋出免費 icon 供設計師下載使用。"
        },
        {
          id: 6,
          isImg: true,
          img: "behance",
          href: "https://www.behance.net/",
          topic: "Behance",
          note:
            "Behance 比較像是設計師的部落格，同樣也是設計人必知的作品集網站，它背後有 Adobe 作支持，可與 Adobe 軟體相連結。"
        },
        {
          id: 5,
          isImg: true,
          img: "dribbble",
          href: "https://dribbble.com/",
          topic: "Dribbble",
          note:
            "國外非常有名，同時也是偌大設計人必須認識的知名設計網站之一，dribble 一詞來自籃球裡「運球」之意，就連網站許多功能都和籃球術語有關。"
        },
        {
          id: 3,
          isImg: true,
          img: "responsive-jp",
          href: "http://responsive-jp.com/",
          topic: "Responsive Web Design JP",
          note: "分享日本諸多 RWD 網頁的平台，可提供視覺設計靈感。"
        },
        {
          id: 2,
          isImg: true,
          img: "mobile-patterns",
          href: "https://material.io/icons/",
          topic: "Material icons",
          note:
            "由 Google 提供的免費向量圖集，包含 SVG、PNGs、Icon Font 等檔案類型，可用於個人或企業專案。"
        },
        {
          id: 1,
          isImg: true,
          img: "flaticon",
          href: "http://www.flaticon.com/",
          topic: "FLATICON",
          note: "提供免費的圖示搜尋下載服務。"
        }
        // {
        //   id: 3,
        //   isImg: true,
        //   img: "xxxx",
        //   href: "xxxxx",
        //   topic: "xxxxx",
        //   note: "xxxx"
        // },
      ],
      res_teachs: [
        {
          id: 22,
          isImg: true,
          img: "juejin",
          href: "https://juejin.im/",
          topic: "掘金",
          note:
            "掘金是一個來自中國的高質量社區，提供網頁工作者分享技術、汲取新知的管道。"
        },
        {
          id: 21,
          isImg: true,
          img: "uiiiuiii",
          href: "https://uiiiuiii.com/",
          topic: "UiiiUiii 优优教程网",
          note: "適合所有設計師學習繪圖軟體或分享個人創意的設計平台。"
        },
        {
          id: 20,
          isImg: true,
          img: "xueui",
          href: "http://www.xueui.cn/",
          topic: "学ui网—ui设计师学习教程平台",
          note: "中國最大、最熱門的 UI 分享設計平台之一。"
        },
        {
          id: 19,
          isImg: true,
          img: "cssreference",
          href: "http://cssreference.io/",
          topic: "cssreference.io",
          note: "收錄所有 CSS 屬性的教學網站。"
        },
        {
          id: 18,
          isImg: true,
          img: "htmlreference",
          href: "http://htmlreference.io/",
          topic: "htmlreference.io",
          note: "收錄所有 HTML 元素及屬性說明的教學網站。"
        },
        {
          id: 17,
          isImg: true,
          img: "vuejs",
          href: "https://cn.vuejs.org/",
          topic: "Vue.js",
          note:
            "Vue 的中文官方文件，有提供完整的教程可供初學者學習如何撰寫 Vue。"
        },
        {
          id: 16,
          isImg: true,
          img: "codecademy",
          href: "https://www.codecademy.com/",
          topic: "codecademy",
          note: "實用的網頁前端語言教學網站。"
        },
        {
          id: 14,
          isImg: true,
          img: "oscarotero",
          href: "https://oscarotero.com/jquery/",
          topic: "jQuery Quick API Reference",
          note: "學習 jQuery 的實用教學網站。"
        },
        {
          id: 13,
          isImg: true,
          img: "w3school",
          href: "http://www.w3school.com.cn/",
          topic: "W3school",
          note: "在 w3school，你可以找到你所需要的所有網站建設教程。"
        },
        {
          id: 12,
          isImg: true,
          img: "w3cplus",
          href: "http://www.w3cplus.com/",
          topic: "W3cplus",
          note: "W3cplus 是一個致力於推廣國內前端行業的技術博客。"
        },
        {
          id: 11,
          isImg: true,
          img: "runoob",
          href: "http://www.runoob.com/",
          topic: "RUNOOB",
          note:
            "包括了 HTML、CSS、Javascript、PHP、C、Python 等各種基礎編程教程。"
        },
        {
          id: 10,
          isImg: true,
          img: "mdn",
          href: "https://developer.mozilla.org/zh-TW/",
          topic: "MDN",
          note:
            "MDN 的所有部分（包含文件及網站本身）都是由開發者所組成的開放社群所提供。"
        },
        {
          id: 9,
          isImg: true,
          img: "wibibi",
          href: "http://www.wibibi.com/",
          topic: "Wibibi 網頁設計教學百科",
          note: "網頁設計教學百科：基礎的網頁設計規劃、資料庫與程式設計。"
        },
        {
          id: 8,
          isImg: true,
          img: "ithome",
          href: "http://ithelp.ithome.com.tw/",
          topic: "iT邦幫忙",
          note:
            "提供邦友更即時的溝通管道，更友善的發文、發文平臺，更容易找到問題、文章及邦友。"
        },
        {
          id: 7,
          isImg: true,
          img: "oxxostudio",
          href: "http://www.oxxostudio.tw/",
          topic: "OXXO.STUDIO",
          note: "oxxo 的個人部落格，分享許多網頁設計相關的知識。"
        },
        {
          id: 6,
          isImg: true,
          img: "shihshih",
          href: "http://blog.shihshih.com/",
          topic: "簡單究好",
          note: "網頁前端開發資訊。"
        },
        {
          id: 5,
          isImg: true,
          img: "rgbchallenge",
          href: "http://www.rgbchallenge.com/",
          topic: "RGB Challenge",
          note: "簡易的 RGB 色彩小遊戲，考驗使用者對 RGB 色彩的熟悉度。"
        },
        {
          id: 4,
          isImg: true,
          img: "codecombat",
          href: "https://codecombat.com/",
          topic: "CodeCombat",
          note: "標榜一邊玩遊戲，一邊學程式語言的教學網站，有中文版版本。"
        },
        {
          id: 3,
          isImg: true,
          img: "hexschool",
          href: "http://www.hexschool.com/",
          topic: "六角學院",
          note:
            "六角學院是由高雄前端社群創辦人以及相關核心團員所創立，目的是透過線上教育的方式，開設符合使用者需求的課程。"
        },
        {
          id: 2,
          isImg: true,
          img: "hahow",
          href: "https://hahow.in/",
          topic: "Hahow 好學校",
          note: "線上開班授課的課程募資平台，可以學習各種不同領域的新知。"
        },
        {
          id: 1,
          isImg: true,
          img: "udemy",
          href: "https://www.udemy.com/courses/design/web-design/",
          topic: "Udemy",
          note:
            "Udemy 是線上學習與教學的全球市場，提供非常多元的專業課程，讓學生掌握新的技能並達成他們的目標。"
        }
        // {
        //   id: 3,
        //   isImg: true,
        //   img: "xxxx",
        //   href: "xxxxx",
        //   topic: "xxxxx",
        //   note: "xxxx"
        // },
      ],
      res_others: [
        {
          id: 2,
          isImg: false,
          img: "",
          href: "https://www.jiumodiary.com/",
          topic: "Jiumo E-Book Search",
          note: "鸠摩电子书搜索引擎。"
        },
        {
          id: 1,
          isImg: true,
          img: "shejidaren",
          href:
            "http://www.shejidaren.com/examples/tools/golden-ratio/index.html",
          topic: "黃金比計算工具",
          note:
            "可查看黃金比例、白銀比例、鉑金比例、青銅比例的網站，讓矩形看起來更加順眼美觀。"
        }
        // {
        //   id: 3,
        //   isImg: true,
        //   img: "xxxx",
        //   href: "xxxxx",
        //   topic: "xxxxx",
        //   note: "xxxx"
        // },
      ]
    };
  },

  computed: {
    filterWeb: function() {
      var search = this;
      return this.res_webs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterColor: function() {
      var search = this;
      return this.res_colors.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterMT: function() {
      var search = this;
      return this.res_mts.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterTA: function() {
      var search = this;
      return this.res_teachs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterOthers: function() {
      var search = this;
      return this.res_others.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>