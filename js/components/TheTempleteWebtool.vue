<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／線上工具</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-container">
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-th"></i>
            <b>網頁前端</b>
          </button>
          <button :class="active==2 ? 'active' : ''" @click="active=2">
            <i class="fas fa-th"></i>
            <b>影音剪輯</b>
          </button>
          <button :class="active==3 ? 'active' : ''" @click="active=3">
            <i class="fas fa-th"></i>
            <b>未分類</b>
          </button>
        </div>
        <!-- 網頁前端 -->
        <div class="inside-box" v-if="active==1">
          <ul>
            <li v-for="item in filterWT" :key="item.id">
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
        <!-- 影音剪輯 -->
        <div class="inside-box" v-if="active==2">
          <ul>
            <li v-for="item in filterMD" :key="item.id">
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
        <!-- 未分類 -->
        <div class="inside-box" v-if="active==3">
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
      active: 1,

      // data
      wt_webs: [
        {
          id: 29,
          isImg: true,
          img: "aconvert",
          href: "https://www.aconvert.com/tw/image/webp-to-png/",
          topic: "ACONVERT",
          note: "提供各種線上轉檔的服務，包含 .webp 影像格式的轉換，或是電子書文件的轉換等。"
        },
        {
          id: 28,
          isImg: false,
          img: "",
          href: "http://apps.eky.hk/css-triangle-generator/zh-hant",
          topic: "CSS 三角形產生器",
          note: "可即時設定任何三角形的 CSS 樣式，並輸出原始碼提供複製取用。"
        },
        {
          id: 27,
          isImg: true,
          img: "colorZilla",
          href: "http://www.colorzilla.com/gradient-editor/",
          topic: "Ultimate CSS Gradient Generator",
          note: "方便好用的線上漸層調製工具，可向下支援至 ie8。"
        },
        {
          id: 26,
          isImg: false,
          img: "",
          href: "https://beautifier.io/",
          topic: "Online JavaScript Beautifier",
          note:
            "提供線上美化 JavaScript 程式碼，使用者可透過相關參數設置輸出適合自己專案的美化格式。"
        },
        {
          id: 25,
          isImg: true,
          img: "codepen",
          href: "http://codepen.io/",
          topic: "CodePen",
          note: "線上網頁編寫工具，是非常熱門的前端開發平台。"
        },
        {
          id: 24,
          isImg: true,
          img: "stackedit",
          href: "https://stackedit.io/",
          topic: "StackEdit",
          note:
            "一款可線上撰寫 Markdown 程式語言的線上工具，有提供輸出轉檔的功能。"
        },
        {
          id: 23,
          isImg: true,
          img: "maxiang",
          href: "https://maxiang.io/",
          topic: "马克飞象",
          note:
            "一款為印象筆記（Evernote）打造的線上編輯器，使用語言為 Markdown 格式，並提供桌面 及 Google Chrome APP 兩種使用模式。"
        },
        {
          id: 22,
          isImg: true,
          img: "persona",
          href: "https://persona.co/",
          topic: "Persona",
          note:
            "人物誌（Persona）是一種在行銷規劃或商業設計上描繪目標用戶的方法。"
        },
        {
          id: 21,
          isImg: true,
          img: "cacoo",
          href: "https://cacoo.com/lang/zh_tw/",
          topic: "Cacoo",
          note: "提供圖表與 Flowchart 製作、圖表分享與張貼圖表的線上服務。"
        },
        {
          id: 20,
          isImg: true,
          img: "cssgrid",
          href: "https://cssgrid-generator.netlify.com/",
          topic: "CSS Grid Generator",
          note: "透過 CSS 格線產生器，讓網頁排版更加整齊美觀。"
        },
        {
          id: 19,
          isImg: true,
          img: "cubic-bezier",
          href: "http://cubic-bezier.com/#.17,.67,.83,.67",
          topic: "cubic-bezier",
          note:
            "CSS animation 的貝茲曲線線上編輯器，如果不喜歡原本屬性設置的 timing-function，可嘗試利用此工具網站來編輯想要呈現的曲線。"
        },
        {
          id: 18,
          isImg: false,
          img: "",
          href: "http://expressprefixr.herokuapp.com/",
          topic: "Express Prefixr",
          note:
            "CSS3 跨瀏覽器前綴轉換工具，將要轉換的 CSS3 屬性輸入左欄後點擊轉換鈕，網站便立即提供主要瀏覽器供應商的屬性前綴。"
        },
        {
          id: 17,
          isImg: true,
          img: "cssanimate",
          href: "http://cssanimate.com/",
          topic: "CSS Animate",
          note:
            "可在此網站直接製作動畫並觀看演示效果，可立即輸出原始碼，方便設計師直接複製使用。"
        },
        {
          id: 16,
          isImg: false,
          img: "",
          href: "http://www.css3maker.com/",
          topic: "CSS 3.0 MAKER",
          note: "若不熟 CSS3 或想先預覽設定的視覺呈現，可使用此網站來編寫測試。"
        },
        {
          id: 15,
          isImg: true,
          img: "jscompress",
          href: "https://jscompress.com/",
          topic: "JSCompress",
          note: "將 Javascript 原始碼壓縮減少容量空間的線上工具。"
        },
        {
          id: 13,
          isImg: false,
          img: "",
          href: "http://www.css3maker.com/",
          topic: "CSS Menu Generator",
          note:
            "線上純 CSS 選單製作工具，可自行製作，也可下載他人分享的 NAV 選單。"
        },
        {
          id: 12,
          isImg: false,
          img: "",
          href: "http://css2sass.herokuapp.com/",
          topic: "CSS 2 SASS/SCSS CONVERTER",
          note: "快速轉換 CSS、SASS / SCSS 的線上工具。"
        },
        {
          id: 11,
          isImg: true,
          img: "colorfavs",
          href: "http://www.colorfavs.com/",
          topic: "Colorfavs",
          note:
            "上傳你想要分析影像色彩的圖檔，它可自動幫你解析顏色代碼，也可以查看其他配色方案，收藏喜歡的配色。"
        },
        {
          id: 10,
          isImg: false,
          img: "",
          href: "http://bennettfeely.com/clippy/",
          topic: "CSS clip-path maker",
          note:
            "可線上繪製 clip-path 圖形，並即時產生 CSS 碼提供複製使用，此外也有預設幾種多邊型。"
        },
        {
          id: 9,
          isImg: false,
          img: "",
          href: "http://placekitten.com/",
          topic: "placekitten",
          note:
            "與 Placehold.it 雷同，藉由一串網址來產生圖片，比較特別的是，placekitten 產生的圖片是貓的影像，相較其他相同類型的圖片產生網站來說更加生動活潑。"
        },
        {
          id: 8,
          isImg: true,
          img: "placeholder",
          href: "http://placehold.it/",
          topic: "Placehold.it",
          note: "範例圖片產生器，同時可變更圖片顏色、尺寸，甚至加入文字。"
        },
        {
          id: 7,
          isImg: false,
          img: "",
          href: "http://vectorpaint.yaks.co.nz/",
          topic: "SVG Editor",
          note: "提供線上繪製 SVG 的服務。"
        },
        {
          id: 6,
          isImg: true,
          img: "mixpanel",
          href: "https://mixpanel.com/",
          topic: "mixpanel",
          note: "分析網站的操作模式。"
        },
        {
          id: 5,
          isImg: true,
          img: "pagespeed",
          href: "https://developers.google.com/speed/pagespeed/insights/",
          topic: "PageSpeed Insights",
          note:
            "由 Google developers 推出的網頁載入速度評測工具，可分析網頁是否符合通用規範，總結效能分數並提供改善建議。"
        },
        {
          id: 4,
          isImg: false,
          img: "",
          href: "https://c.runoob.com/",
          topic: "菜鸟工具",
          note: "定義文件檔案類型。"
        },
        {
          id: 3,
          isImg: true,
          img: "chinaz",
          href: "http://tool.chinaz.com/tools/urlencode.aspx",
          topic: "Chinaz.com",
          note: "您可以使用本工具對中文進行 UrlEncode 編碼。"
        },
        {
          id: 2,
          isImg: false,
          img: "",
          href: "http://tw.faviconico.org/",
          topic: "Favicon 線上製作轉換工具",
          note:
            "favicon.ico 一般用於作為縮略的網站標誌，它顯示在流覽器的位址欄、流覽器標籤上或者在我的最愛上，是展示網站個性的縮略 logo 標誌。"
        },
        {
          id: 1,
          isImg: false,
          img: "",
          href: "http://www.peise.net/tools/web/",
          topic: "Color Scheme Designer",
          note:
            "線上配色工具，提供單或多種配色方案選擇，可即時預覽汲取色票之呈現畫面。"
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

      md_webs: [
        {
          id: 6,
          isImg: true,
          img: "squoosh",
          href: "https://squoosh.app/",
          topic: "Squoosh",
          note: "由 Google 團隊發佈的線上圖片壓縮工具。"
        },
        {
          id: 5,
          isImg: true,
          img: "apowersoft",
          href: "https://www.apowersoft.tw/free-online-audio-editor",
          topic: "Apowersoft免費線上音訊編輯",
          note: "線上免費剪輯音樂網站，讓音訊剪輯更輕鬆。"
        },
        {
          id: 4,
          isImg: true,
          img: "apowersoft",
          href: "https://www.apowersoft.tw/heic-to-jpg",
          topic: "免費 HEIC 圖片轉換",
          note:
            "HEIF 是一個嶄新的圖檔格式，於 iOS11 被預設為相機拍照的儲存格式，聲稱可以減少佔據空間，然而目前並非所有裝置都能開啟 .heic 與 .heif 檔案。"
        },
        {
          id: 3,
          isImg: true,
          img: "tinypng",
          href: "https://tinypng.com/",
          topic: "TinyPNG",
          note: "提供圖片壓縮的線上服務，可顯著減少圖片的容量。"
        },
        {
          id: 2,
          isImg: true,
          img: "onlinevideoconverter",
          href: "https://www.onlinevideoconverter.com/zh",
          topic: "OnlineVideoConverter",
          note:
            "YouTube 影片轉檔下載的工具，支援多種格式，諸如 .mp3、.ogg、.wma ...等。"
        },
        {
          id: 1,
          isImg: false,
          img: "",
          href: "http://www.youtubeto.com/zh/",
          topic: "Youtube 在線下載器",
          note:
            "線上下載 YouTube 音頻，支援 mp3、mp4 以及 mp4HD 畫質的檔案格式，只需要貼上欲收藏的影片連結即可。"
        }
        // {
        //   id: 3,
        //   isImg: false,
        //   img: "xxxx",
        //   href: "xxxxx",
        //   topic: "xxxxx",
        //   note: "xxxx"
        // },
      ],

      other_webs: [
        {
          id: 4,
          isImg: true,
          img: "whiteboardfox",
          href: "https://whiteboardfox.com/",
          topic: "Whiteboard Fox",
          note: "雲端白板繪畫工具，類似小畫家的功能，可單人也可多人共同創作。"
        },
        {
          id: 3,
          isImg: false,
          img: "",
          href: "http://www.zhenhaotv.com/",
          topic: "毛筆字在線生成器",
          note: "可於線上輸入中文字，產生多種毛筆字型的線上工具。"
        },
        {
          id: 2,
          isImg: false,
          img: "",
          href: "http://qr.calm9.com/tw/",
          topic: "QR Code 條碼產生器",
          note: "快速生成 QR CODE 二維條碼的線上工具網站。"
        },
        {
          id: 1,
          isImg: false,
          img: "",
          href: "https://10minutemail.net/",
          topic: "10 分鐘信箱",
          note:
            "10 分鐘壽命的電子信箱，超時就失效，避免收到垃圾郵件最好的選擇。"
        }
        // {
        //   id: 3,
        //   isImg: false,
        //   img: "",
        //   href: "xxxxx",
        //   topic: "xxxxx",
        //   note: "xxxx"
        // },
      ]
    };
  },

  computed: {
    filterWT: function() {
      var search = this;
      return this.wt_webs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterMD: function() {
      var search = this;
      return this.md_webs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterOthers: function() {
      var search = this;
      return this.other_webs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>