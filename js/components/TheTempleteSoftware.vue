<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／應用程式</h2>
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
            <b>程式語言</b>
          </button>
          <button :class="active==2 ? 'active' : ''" @click="active=2">
            <i class="fas fa-th"></i>
            <b>開發工具</b>
          </button>
          <button :class="active==3 ? 'active' : ''" @click="active=3">
            <i class="fas fa-th"></i>
            <b>瀏覽器</b>
          </button>
          <button :class="active==4 ? 'active' : ''" @click="active=4">
            <i class="fas fa-th"></i>
            <b>影像處理</b>
          </button>
        </div>
        <!-- 程式語言 -->
        <div class="inside-box" v-if="active==1">
          <ul>
            <li v-for="item in filterPG" :key="item.id">
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
        <!-- 開發工具 -->
        <div class="inside-box" v-if="active==2">
          <ul>
            <li v-for="item in filterDP" :key="item.id">
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
        <!-- 瀏覽器 -->
        <div class="inside-box" v-if="active==3">
          <ul>
            <li v-for="item in filterBS" :key="item.id">
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
        <!-- 影像處理 -->
        <div class="inside-box" v-if="active==4">
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
      pg_webs: [
        {
          id: 7,
          isImg: true,
          img: "sublimetext",
          href: "https://www.sublimetext.com",
          topic: "Sublime Text",
          note: "一套跨平台的程式編輯器，為時下熱門的程式開發軟體之一。"
        },
        {
          id: 6,
          isImg: true,
          img: "prepros",
          href: "https://prepros.io/",
          topic: "Prepros",
          note:
            "支援多種前端程式語言（如：Less、Sass、SCSS、Jade ...等）的編譯工具，且享有永久試用的福利。"
        },
        {
          id: 5,
          isImg: true,
          img: "visualstudio",
          href: "https://code.visualstudio.com/",
          topic: "Visual Studio Code",
          note: "一套由微軟公司開發的跨平台程式編輯器。"
        },
        {
          id: 4,
          isImg: true,
          img: "nodejs",
          href: "https://nodejs.org/en/",
          topic: "Node.js",
          note:
            "NodeJS 是一套高效能、易擴充的網站應用程式開發框架（Web Application Framework）。"
        },
        {
          id: 3,
          isImg: true,
          img: "npm",
          href: "https://www.npmjs.com/",
          topic: "npm",
          note:
            "是 Node.js 的套件（package）管理工具，安裝 npm 後，使用 npm install module_name 指令即可安裝新套件，維護管理套件的工作會更加輕鬆。"
        },
        {
          id: 2,
          isImg: true,
          img: "compass",
          href: "http://compass-style.org/",
          topic: "Compass",
          note:
            "Compass 是一個 sass 的 Framework，將原來在 sass 裡要寫很多次的樣式，Compass 已內建簡化的寫法。"
        },
        {
          id: 1,
          isImg: true,
          img: "rubyinstaller",
          href: "https://rubyinstaller.org/",
          topic: "RubyInstaller",
          note: "用於安裝 Ruby 語言的開發工具與運行環境。"
        }
      ],
      dp_webs: [
        {
          id: 5,
          isImg: true,
          img: "git",
          href: "https://git-for-windows.github.io/",
          topic: "git",
          note: "分散式版本控制系統，是目前最受歡迎且必須要學會的版本控制軟體。"
        },
        {
          id: 4,
          isImg: true,
          img: "pxcook",
          href: "http://www.fancynode.com.cn/pxcook",
          topic: "PxCook",
          note: "高效的自動標註工具，同時支援 Adobe Photoshop 與 Sketch。"
        },
        {
          id: 3,
          isImg: true,
          img: "sketchcn",
          href: "http://www.sketchcn.com/",
          topic: "Sketch 中文",
          note: "一款輕量的 UI 矢量設計工具，目前僅限 MAC 使用。"
        },
        {
          id: 2,
          isImg: true,
          img: "markman",
          href: "http://www.getmarkman.com/",
          topic: "Markman",
          note: "馬克鰻，設計稿標註測量工具。"
        },
        {
          id: 1,
          isImg: true,
          img: "xampp",
          href: "https://www.apachefriends.org/zh_tw/index.html",
          topic: "XAMPP",
          note:
            "XAMPP 是完全免費且易於安裝的 Apache 發行版本，號稱時下最流行的 PHP 開發環境。"
        }
      ],
      bs_webs: [
        {
          id: 9,
          isImg: true,
          img: "uc",
          href: "http://pc.uc.cn/",
          topic: "UC浏览器",
          note: "由中國優視科技有限公司開發的網頁瀏覽器。"
        },
        {
          id: 8,
          isImg: true,
          img: "yandex",
          href: "https://browser.yandex.com/",
          topic: "Yandex",
          note: "由俄羅斯網路搜尋公司 Yandex 開發的網頁瀏覽器。"
        },
        {
          id: 7,
          isImg: true,
          img: "sogou",
          href: "https://ie.sogou.com/",
          topic: "搜狗高速浏览器",
          note: "由搜狗公司開發的網頁瀏覽器。"
        },
        {
          id: 6,
          isImg: true,
          img: "qq",
          href: "https://browser.qq.com/",
          topic: "QQ浏览器",
          note: "由騰訊公司開發的網頁瀏覽器。"
        },
        {
          id: 5,
          isImg: true,
          img: "opera",
          href: "https://www.opera.com/zh-tw",
          topic: "Opera",
          note:
            "早年由 Opera 公司團隊開發的網頁瀏覽器，如今已轉賣給中國財團經營。"
        },
        {
          id: 4,
          isImg: true,
          img: "edge",
          href: "https://www.apachefriends.org/zh_tw/index.html",
          topic: "IE Edge",
          note: "由微軟公司最新開發的網頁瀏覽器，以試圖取代舊世代的 IE 瀏覽器。"
        },
        {
          id: 3,
          isImg: true,
          img: "safari",
          href: "https://support.apple.com/zh_TW/downloads/safari",
          topic: "Safari",
          note:
            "由蘋果公司開發的網頁瀏覽器，但目前已不再支援 Windows 作業系統。"
        },
        {
          id: 2,
          isImg: true,
          img: "firefox",
          href: "https://www.mozilla.org/zh-TW/firefox/new/",
          topic: "Firefox",
          note: "由 Mozilla 公司開發的網頁瀏覽器。"
        },
        {
          id: 1,
          isImg: true,
          img: "chrome",
          href: "https://www.google.com/intl/zh-TW/chrome/",
          topic: "Google Chrome",
          note: "由 Google 公司開發的網頁瀏覽器。"
        }
      ],
      md_webs: [
        {
          id: 9,
          isImg: true,
          img: "picpick",
          href: "https://picpick.app/zh-tw/",
          topic: "PicPick",
          note:
            "一款全功能的螢幕擷取工具、直觀的圖片編輯器、色彩選擇器、調色盤、尺規、量角器、十字線和白板等等..."
        },
        {
          id: 8,
          isImg: true,
          img: "psydk",
          href: "http://psydk.org/pngoptimizer",
          topic: "PSYDK.ORG",
          note:
            "PngOptimizer 是一款免費的圖片壓縮減肥軟體，支援 PNG、BMP、GIF、TGA、APNG 等圖檔格式，但不支援 JPEG。"
        },
        {
          id: 7,
          isImg: true,
          img: "formatfactory",
          href: "http://www.pcfreetime.com/formatfactory/CN/index.html",
          topic: "格式工廠",
          note:
            "格式工廠是一款多功能的多媒體格式轉換軟體，可以實現大多數影片、音訊以及圖像不同格式之間的相互轉換。"
        },
        {
          id: 6,
          isImg: true,
          img: "copytransheic",
          href: "https://www.copytrans.net/copytransheic/",
          topic: "CopyTrans HEIC for Windows",
          note:
            "一款可以在 Windows 系統閱覽 iPhone 「HEIC」新影像儲存格式，並轉存為 jpeg 格式的解碼工具。"
        },
        {
          id: 5,
          isImg: true,
          img: "screentogif",
          href: "http://www.screentogif.com/downloads/",
          topic: "ScreenToGif",
          note:
            "ScreenToGif 可以將錄影畫面輸出成 Gif 或視頻動畫，錄影採用可移動式的方框，只要是在範圍內的畫面通通可以被錄製起來，後製階段還可以詳細察看每一幀，可以剔除不必要的部分。"
        },
        {
          id: 4,
          isImg: true,
          img: "recordit",
          href: "http://recordit.co/",
          topic: "Recordit Fast Screencasts",
          note: "擷取螢幕畫面，使其錄製成 .gif 動態影像的應用程式工具。"
        },
        {
          id: 3,
          isImg: true,
          img: "apng",
          href: "http://apngdis.sourceforge.net/",
          topic: "APNG Disassembler",
          note:
            "可以將 APNG （動態的 PNG）格式細部分解每一幀，輸出成檔的工具軟體，目前只有 Windows 系統有 GUI 介面，其他作業系統只能使用 CMD 指令來操作。"
        },
        {
          id: 2,
          isImg: true,
          img: "apng",
          href:
            "http://www.azofreeware.com/2015/03/apng-anime-maker-portable.html",
          topic: "APNG Anime Maker",
          note:
            "動態 PNG 製作工具，製作方式與 GIF 相同，將各幀 PNG 影像合成為一個檔案，也就是 APNG。"
        },
        {
          id: 1,
          isImg: true,
          img: "lightshot",
          href: "http://app.prntscr.com/zh-cn/index.html",
          topic: "LightShot",
          note:
            "好用的螢幕截圖工具，也可以在 Chrome 或 Firefox 擴充元件進行安裝。"
        }
      ]
    };
  },

  computed: {
    filterPG: function() {
      var search = this;
      return this.pg_webs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterDP: function() {
      var search = this;
      return this.dp_webs.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterBS: function() {
      var search = this;
      return this.bs_webs.filter(function(item) {
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
    }
  }
};
</script>