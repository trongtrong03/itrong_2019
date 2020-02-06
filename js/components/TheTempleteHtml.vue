<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／HTML</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      
      <div class="inside-container">
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-list"></i>
            <b>Tips</b>
          </button>
          <button :class="active==2 ? 'active' : ''" @click="active=2">
            <i class="fas fa-list-ul"></i>
            <b>屬性列表</b>
          </button>
        </div>

        <!-- Tips -->
        <div class="inside-list" v-if="active==1">
          <ul>
            <li v-for="item in filterHtips" :key="item.id">
              <a :href="item.href + format">
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>

        <!-- 屬性列表 -->
        <div class="inside-form" v-if="active==2">
          <div class="inside-tag">
            <a href="#tagBase">Flow（流動型）</a>
            <a href="#tagStyle">Sectioning（章節型）</a>
            <a href="#tagForm">Heading（標題型）</a>
            <a href="#tagFrame">Phrasing（段落型）</a>
            <a href="#tagImage">Interactive（互動型）</a>
            <a href="#tagMedia">Embedded（嵌入型）</a>
            <a href="#tagLink">Metadata（資訊元）</a>
            <a href="#tagList">未分類</a>
          </div>
          <!-- theme -->
          <h2 id="tagBase">Flow（流動型）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList1" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagStyle">Sectioning（章節型）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList2" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagForm">Heading（標題型）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList3" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagFrame">Phrasing（段落型）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList4" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagImage">Interactive（互動型）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList5" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagMedia">Embedded（嵌入型）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList6" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagLink">Metadata（資訊元）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList7" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>
          <!-- theme -->
          <h2 id="tagList">未分類</h2>
          <ul class="inside-flex">
            <li v-for="item in filterHtmlList8" :key="item.id">
              <i class="fab fa-html5" v-if="item.isHtml5"></i>
              <a :href="item.href + format" v-if="item.isLink">
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </a>
              <span v-else>
                {{ item.topic }}
                <b>{{ item.note }}</b>
              </span>
            </li>
          </ul>

          <!-- 說明 -->
          <div class="inside-info">
            <p>分類參考源自於 HTML5 定義的「Content Models」，其將元素分類為七大種類，而部分特殊元素或 HTML4 之前版本已遭棄用的元素，則歸納於未分類欄位之中。</p>
          </div>
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
      isHtml5: false,
      query: "",
      active: 1,

      // data
      // tips
      hTips: [
        {
          id: 26,
          href: "html_t_contentmodel",
          time: "2020-02-06",
          topic: "［HTML5］元素分類與內容模型（Content Model）"
        },
        {
          id: 25,
          href: "html_t_googleform",
          time: "2019-09-04",
          topic: "使用 Google 表單建立簡易的聯絡信件"
        },
        {
          id: 24,
          href: "html_t_data",
          time: "2019-09-02",
          topic: "［HTML5］淺談資料屬性（data-*）"
        },
        {
          id: 23,
          href: "html_t_symbol_list",
          time: "2019-08-31",
          topic: "HTML 常用特殊符號編碼對照表"
        },
        {
          id: 22,
          href: "html_t_div_vs",
          time: "2019-08-28",
          topic: "［HTML5］<div> V.S. <section> V.S. <article>"
        },
        {
          id: 21,
          href: "html_t_input_readonly_vs_disabled",
          time: "2019-08-26",
          topic: "輸入框（<input>、<textarea>）的 readonly 屬性與 disabled 比較"
        },
        {
          id: 20,
          href: "html_t_meta_http_equiv",
          time: "2019-08-25",
          topic: "<meta> 之 http-equiv 屬性"
        },
        {
          id: 19,
          href: "html_t_meta_charset",
          time: "2019-08-23",
          topic: "［HTML5］<meta> 之 charset 屬性"
        },
        {
          id: 18,
          href: "html_t_mq",
          time: "2019-08-23",
          topic: "［HTML5］HTML 的 Media Queries 寫法"
        },
        {
          id: 17,
          href: "html_t_h5_tag_a",
          time: "2019-08-22",
          topic: "［HTML5］超連結（<a>）的新增屬性"
        },
        {
          id: 16,
          href: "html_t_meta_viewport",
          time: "2019-08-22",
          topic: "［HTML5］<meta> 之 viewport 屬性"
        },
        {
          id: 15,
          href: "html_t_schema",
          time: "2019-08-22",
          topic: "Schema 標記（item...）"
        },
        {
          id: 14,
          href: "html_t_meta_name",
          time: "2019-08-22",
          topic: "<meta> 的 name 屬性"
        },
        {
          id: 13,
          href: "html_star_label",
          time: "2017-10-12",
          topic: "用 HTML 與 CSS 實現評分效果"
        },
        {
          id: 12,
          href: "html_t_wb_plugin",
          time: "2017-09-19",
          topic: "微博分享按鈕"
        },
        {
          id: 11,
          href: "html_t_embed_pdf",
          time: "2017-07-24",
          topic: "將 PDF 文件內嵌於網頁（<embed>）"
        },
        {
          id: 10,
          href: "html_t_marquee",
          time: "2017-07-11",
          topic: "簡易跑馬燈語法（<marquee>）"
        },
        {
          id: 9,
          href: "html_t_line_plugin",
          time: "2016-12-18",
          topic: "LINE 條碼轉為網址與傳送分享按鈕"
        },
        {
          id: 8,
          href: "html_t_meta_twitter",
          time: "2016-12-10",
          topic: "寫給 Twitter 看的 SEO 標籤"
        },
        {
          id: 7,
          href: "html_t_meta_itemprop",
          time: "2016-12-06",
          topic: "寫給 Google 看的 SEO 標籤"
        },
        {
          id: 6,
          href: "html_t_meta_property",
          time: "2016-11-30",
          topic: "寫給 Facebook 看的 SEO 標籤"
        },
        {
          id: 5,
          href: "html_t_appicon",
          time: "2016-11-23",
          topic: "App icon 的語法教學"
        },
        {
          id: 4,
          href: "html_t_href_tel",
          time: "2016-11-23",
          topic: "<a> 播打電話號碼（tel）"
        },
        {
          id: 3,
          href: "html_img_onerror",
          time: "2016-11-23",
          topic: "<img> 的預設圖（onerror）"
        },
        {
          id: 2,
          href: "html_t_sk_plugin",
          time: "2016-11-21",
          topic: "SKYPE 外掛"
        },
        {
          id: 1,
          href: "html_t_fb_plugin",
          time: "2016-11-21",
          topic: "Facebook 社群套件"
        }
      ],
      // Flow
      hLists_1: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<body>",
          note: "定義文件檔案的主體。",
          isHtml5: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<caption>",
          note: "定義表格的標題。",
          isHtml5: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<col>",
          note: "定義表格一或多個列的屬性值。",
          isHtml5: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<colgroup>",
          note: "定義表格的格式化列組。",
          isHtml5: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<dir>",
          note: "定義目錄列表，但不建議使用。",
          isHtml5: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "<dl>",
          note: "定義定義（definition）列表。",
          isHtml5: false
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "<dt>",
          note: "定義 <dl> 列表的項目名稱。",
          isHtml5: false
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "<dd>",
          note: "定義 <dl> 列表的項目描述。",
          isHtml5: false
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "<figcaption>",
          note: "定義 <figure> 的標題。",
          isHtml5: true
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "<form>",
          note: "定義 HTML 表單。",
          isHtml5: false
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "<hr>",
          note: "定義 HTML 內文的水平線。",
          isHtml5: false
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "<li>",
          note: "定義列表的條目。",
          isHtml5: false
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "<ol>",
          note: "定義有順序的列表。",
          isHtml5: false
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: "<ul>",
          note: "定義無順序的列表。",
          isHtml5: false
        },
        {
          id: 15,
          isLink: false,
          href: "",
          topic: "<table>",
          note: "定義表格。",
          isHtml5: false
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: "<thead>",
          note: "定義表格的表頭內容。",
          isHtml5: false
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: "<tbody>",
          note: "定義表格的主體內容。",
          isHtml5: false
        },
        {
          id: 18,
          isLink: false,
          href: "",
          topic: "<tfoot>",
          note: "定義表格的腳註內容。",
          isHtml5: false
        },
        {
          id: 19,
          isLink: false,
          href: "",
          topic: "<tr>",
          note: "定義表格的行。",
          isHtml5: false
        },
        {
          id: 20,
          isLink: false,
          href: "",
          topic: "<th>",
          note: "定義表格的表頭單元格。",
          isHtml5: false
        },
        {
          id: 21,
          isLink: false,
          href: "",
          topic: "<td>",
          note: "定義表格的單元格。",
          isHtml5: false
        },
      ],
      // Sectioning
      hLists_2: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<article>",
          note: "定義獨立的內容區塊。",
          isHtml5: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<aside>",
          note: "網頁側欄的內容。",
          isHtml5: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<figure>",
          note: "定義一個帶有說明（caption）的內容。",
          isHtml5: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<nav>",
          note: "定義導覽列",
          isHtml5: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<section>",
          note: "內容區塊的分段。",
          isHtml5: true
        },
      ],
      // Heading
      hLists_3: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<h1>～<h6>",
          note: "定義 HTML 內文的標題。",
          isHtml5: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<hgroup>",
          note: "用於組合標題元素。",
          isHtml5: true
        },
      ],
      // Phrasing
      hLists_4: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<acronym>",
          note: "定義只取首字母的縮寫。",
          isHtml5: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<abbr>",
          note: "定義縮寫。",
          isHtml5: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<address>",
          note: "定義聯絡訊息。",
          isHtml5: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<area>",
          note: "定義 <map> 內的映射區域。",
          isHtml5: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<b>",
          note: "使嵌套內文字定義為粗體。",
          isHtml5: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "<bdi>",
          note: "定義嵌套內文本的方向。",
          isHtml5: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "<bdo>",
          note: "定義嵌套內文字的方向。",
          isHtml5: false
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "<big>",
          note: "使嵌套內文字變大。",
          isHtml5: false
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "<br>",
          note: "定義 HTML 內文的換行。",
          isHtml5: false
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "<p>",
          note: "定義 HTML 內文的段落。",
          isHtml5: false
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "<blockquote>",
          note: "給嵌套段落前後增加換行與外距。",
          isHtml5: false
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "<center>",
          note: "讓嵌套內的文字居中，但不建議使用。",
          isHtml5: false
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "<cite>",
          note: "定義參考文獻、書籍雜誌等標題的引用。",
          isHtml5: false
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: "<code>",
          note: "定義程式碼的引用。",
          isHtml5: false
        },
        {
          id: 15,
          isLink: false,
          href: "",
          topic: "<command>",
          note: "定義使用者能夠調用的命令按鈕。",
          isHtml5: true
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: "<del>",
          note: "給嵌套內文字添加刪除線。",
          isHtml5: false
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: "<dfn>",
          note: "定義專業術語。",
          isHtml5: false
        },
        {
          id: 18,
          isLink: false,
          href: "",
          topic: "<em>",
          note: "強調嵌套內的文字，略輸於 <strong>。",
          isHtml5: false
        },
        {
          id: 19,
          isLink: false,
          href: "",
          topic: "<font>",
          note: "定義嵌套內的字體、大小、顏色，但不建議使用。",
          isHtml5: false
        },
        {
          id: 20,
          isLink: false,
          href: "",
          topic: "<i>",
          note: "使嵌套內文字為斜體。",
          isHtml5: false
        },
        {
          id: 21,
          isLink: false,
          href: "",
          topic: "<ins>",
          note: "給嵌套內文字加上底線。",
          isHtml5: false
        },
        {
          id: 22,
          isLink: false,
          href: "",
          topic: "<kbd>",
          note: "用來表示嵌套內的文字是由鍵盤按鍵輸入。",
          isHtml5: false
        },
        {
          id: 23,
          isLink: false,
          href: "",
          topic: "<map>",
          note: "定義嵌套內的影像映射範圍。",
          isHtml5: false
        },
        {
          id: 24,
          isLink: false,
          href: "",
          topic: "<mark>",
          note: "將嵌套內文字上色高亮起來。",
          isHtml5: true
        },
        {
          id: 25,
          isLink: false,
          href: "",
          topic: "<meter>",
          note: "定義度量數據範圍。",
          isHtml5: true
        },
        {
          id: 26,
          isLink: false,
          href: "",
          topic: "<pre>",
          note: "定義格式化內容。",
          isHtml5: false
        },
        {
          id: 27,
          isLink: false,
          href: "",
          topic: "<progress>",
          note: "定義進度條。",
          isHtml5: false
        },
        {
          id: 28,
          isLink: false,
          href: "",
          topic: "<q>",
          note: "給嵌套內的文字用引號概括起來。",
          isHtml5: false
        },
        {
          id: 29,
          isLink: false,
          href: "",
          topic: "<rp>",
          note: "定義不支援 <ruby> 元素的瀏覽器之替代內容。",
          isHtml5: true
        },
        {
          id: 30,
          isLink: false,
          href: "",
          topic: "<rt>",
          note: "定義 <ruby> 註釋的解釋。",
          isHtml5: true
        },
        {
          id: 31,
          isLink: false,
          href: "",
          topic: "<ruby>",
          note: "定義中文注音或字符的註釋。",
          isHtml5: true
        },
        {
          id: 32,
          isLink: false,
          href: "",
          topic: "<s>",
          note: "給嵌套內文字增加刪除線，H5 已不支援，以 <del> 取代。",
          isHtml5: false
        },
        {
          id: 33,
          isLink: false,
          href: "",
          topic: "<samp>",
          note: "定義計算機代碼樣本。",
          isHtml5: false
        },
        {
          id: 34,
          isLink: false,
          href: "",
          topic: "<small>",
          note: "使嵌套內文字變小。",
          isHtml5: false
        },
        {
          id: 35,
          isLink: false,
          href: "",
          topic: "<strike>",
          note: "給嵌套內文字增加刪除線，H5 已不支援，以 <del> 取代。",
          isHtml5: false
        },
        {
          id: 36,
          isLink: false,
          href: "",
          topic: "<strong>",
          note: "強調嵌套內的文字，比 <em> 更強烈。",
          isHtml5: false
        },
        {
          id: 37,
          isLink: false,
          href: "",
          topic: "<sup>",
          note: "使嵌套內文字轉為上標。",
          isHtml5: false
        },
        {
          id: 38,
          isLink: false,
          href: "",
          topic: "<sub>",
          note: "使嵌套內文字轉為下標。。",
          isHtml5: false
        },
        {
          id: 39,
          isLink: false,
          href: "",
          topic: "<time>",
          note: "定義日期或時間。",
          isHtml5: true
        },
        {
          id: 40,
          isLink: false,
          href: "",
          topic: "<tt>",
          note: "使嵌套內文字呈現類似打字機的效果。",
          isHtml5: false
        },
        {
          id: 41,
          isLink: false,
          href: "",
          topic: "<u>",
          note: "給嵌套內文字畫底線，不建議使用。",
          isHtml5: false
        },
        {
          id: 42,
          isLink: false,
          href: "",
          topic: "<var>",
          note: "用來表示變數的名稱，常與 <code> 和 <pre> 一同使用。",
          isHtml5: false
        },
        {
          id: 43,
          isLink: false,
          href: "",
          topic: "<wbr>",
          note: "定義可能的換行符號。",
          isHtml5: true
        },
        {
          id: 44,
          isLink: false,
          href: "",
          topic: "<output>",
          note: "執行計算並輸出結果。",
          isHtml5: true
        }
      ],
      // Interactive
      hLists_5: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<a>",
          note: "定義超連結。",
          isHtml5: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<button>",
          note: "定義按鈕。",
          isHtml5: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<datalist>",
          note: "配合 <input> 製作輔助下拉式選項清單。",
          isHtml5: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<fieldset>",
          note: "將表單內容分組並給予邊框。",
          isHtml5: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<input>",
          note: "定義輸入控件。",
          isHtml5: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "<keygen>",
          note: "定義表單的密鑰。",
          isHtml5: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "<label>",
          note: "定義 <input> 的標註書籤。",
          isHtml5: false
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "<legend>",
          note: "定義 <fieldset> 的標題。",
          isHtml5: false
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "<optgroup>",
          note: "定義下拉式選單選項的相關組合。",
          isHtml5: false
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "<option>",
          note: "定義下拉式選單的選項。",
          isHtml5: false
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "<select>",
          note: "定義下拉式選單。",
          isHtml5: false
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "<textarea>",
          note: "定義文字輸入控件。",
          isHtml5: false
        },
      ],
      // Embedded
      hLists_6: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<audio>",
          note: "定義聲音內容。",
          isHtml5: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<canvas>",
          note: "定義畫布。",
          isHtml5: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<embed>",
          note: "定義文檔嵌入非 HTML 的應用程式容器。",
          isHtml5: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<img>",
          note: "定義影像。",
          isHtml5: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<iframe>",
          note: "定義內嵌框架。",
          isHtml5: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "<menu>",
          note: "定義菜單列表。",
          isHtml5: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "<menuitem>",
          note: "定義 <menu> 中的項目。",
          isHtml5: true
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "<object>",
          note: "定義文檔嵌入多媒體內容。",
          isHtml5: false
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "<param>",
          note: "為 <object> 添加對象。",
          isHtml5: false
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "<source>",
          note: "定義 <audio>、<video> 內的文件來源。",
          isHtml5: true
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "<svg>",
          note: "定義網頁繪圖圖形。",
          isHtml5: true
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "<track>",
          note: "定義 <video> 的字幕來源。",
          isHtml5: true
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "<video>",
          note: "定義影片內容。",
          isHtml5: true
        },
      ],
      // Metadata
      hLists_7: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<base>",
          note: "定義文檔的預設連結或目標。",
          isHtml5: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<basefont>",
          note: "定義文檔的預設字型、大小、顏色，但不建議使用。",
          isHtml5: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<link>",
          note: "定義 CSS 樣式表檔案的連結。",
          isHtml5: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<meta>",
          note: "定義 HTML 文件的訊息。",
          isHtml5: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<noscript>",
          note: "定義不支援腳本的瀏覽器顯示之替代內容。",
          isHtml5: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "<script>",
          note: "定義程式碼腳本。",
          isHtml5: false
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "<title>",
          note: "定義文件檔案的標題。",
          isHtml5: false
        },
      ],
      // 未分類
      hLists_8: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "<!DOCTYPE>",
          note: "定義文件檔案類型。",
          isHtml5: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "<html>",
          note: "定義文件檔案為 HTML。",
          isHtml5: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "<head>",
          note: "定義文件檔案的訊息。",
          isHtml5: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "<!--...-->",
          note: "將 HTML 程式碼進行註解化。",
          isHtml5: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "<applet>",
          note: "定義嵌入的 applet，但不建議使用。",
          isHtml5: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "<frame>",
          note: "定義框架。",
          isHtml5: false
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "<frameset>",
          note: "定義框架集。",
          isHtml5: false
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "<noframes>",
          note: "定義不支援框架的瀏覽器替代內容。",
          isHtml5: false
        },
      ],
    };
  },

  computed: {
    filterHtips: function() {
      var search = this;
      return this.hTips.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList1: function() {
      var search = this;
      return this.hLists_1.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList2: function() {
      var search = this;
      return this.hLists_2.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList3: function() {
      var search = this;
      return this.hLists_3.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList4: function() {
      var search = this;
      return this.hLists_4.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList5: function() {
      var search = this;
      return this.hLists_5.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList6: function() {
      var search = this;
      return this.hLists_6.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList7: function() {
      var search = this;
      return this.hLists_7.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterHtmlList8: function() {
      var search = this;
      return this.hLists_8.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>