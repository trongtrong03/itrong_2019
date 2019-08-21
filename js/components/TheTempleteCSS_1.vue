<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／屬性列表（Properties）</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-tag">
        <a href="#tagUI">使用者介面（UI）</a>
        <a href="#tagText">文本（Text）</a>
        <a href="#tagFont">文字（Font）</a>
        <a href="#tagDim">尺寸（Dimension）</a>
        <a href="#tagBG">背景（Background）</a>
        <a href="#tagBD">邊框（Border / Outline）</a>
        <a href="#tagList">列表（List）</a>
        <a href="#tagColumn">多欄列布局（Multi-column）</a>
        <a href="#tagPM">內外邊距（Padding / Margin）</a>
        <a href="#tagPos">定位（Position）</a>
        <a href="#tagAni">動畫（Animation）</a>
        <a href="#tagTs">過渡（Transition）</a>
        <a href="#tagTf">轉換（Transform）</a>
        <a href="#tagColor">色彩（Color）</a>
        <a href="#tagGC">内容生成（Generated Content）</a>
        <a href="#tagDbox">可伸縮元素</a>
        <a href="#tagBox">Box</a>
        <a href="#tagGrid">網格（Grid）</a>
        <a href="#tagTable">表格（Table）</a>
        <a href="#tagPM">內容分頁媒體</a>
        <a href="#tagHL">超連結（Hyperlink）</a>
        <a href="#tagMarquee">跑馬燈（Marquee）</a>
        <a href="#tagPrint">打印（Print）</a>
      </div>
      <div class="inside-container">
        <div id="tagUI" class="inside-form">
          <h2>使用者介面（UI）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_ui" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagText" class="inside-form">
          <h2>文本（Text）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_tt" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagFont" class="inside-form">
          <h2>文字（Font）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_ft" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagDim" class="inside-form">
          <h2>尺寸（Dimension）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_ds" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagBG" class="inside-form">
          <h2>背景（Background）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_bg" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagBD" class="inside-form">
          <h2>邊框（Border / Outline）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_bd" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagList" class="inside-form">
          <h2>列表（List）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_li" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagColumn" class="inside-form">
          <h2>多欄列布局（Multi-column）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_cl" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagPM" class="inside-form">
          <h2>內外邊距（Padding / Margin）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_mp" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagPos" class="inside-form">
          <h2>定位（Position）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_po" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagAni" class="inside-form">
          <h2>動畫（Animation）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_an" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagTs" class="inside-form">
          <h2>過渡（Transition）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_ts" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagTf" class="inside-form">
          <h2>轉換（Transform）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_tf" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagColor" class="inside-form">
          <h2>色彩（Color）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_co" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagGC" class="inside-form">
          <h2>内容生成（Generated Content）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_gc" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagDbox" class="inside-form">
          <h2>可伸縮元素</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_fb" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagBox" class="inside-form">
          <h2>Box</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_bx" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagGrid" class="inside-form">
          <h2>網格（Grid）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_gd" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagTable" class="inside-form">
          <h2>表格（Table）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_tb" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagPM" class="inside-form">
          <h2>內容分頁媒體（Content for Paged Media）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_pm" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagHL" class="inside-form">
          <h2>超連結（Hyperlink）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_hl" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagMarquee" class="inside-form">
          <h2>跑馬燈（Marquee）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_mq" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
        </div>
        <div id="tagPrint" class="inside-form">
          <h2>打印（Print）</h2>
          <ul class="inside-flex">
            <li v-for="item in filterCL_pr" :key="item.id">
              <i class="fab fa-css3-alt" v-if="item.isCSS3"></i>
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
      isLink: true,
      query: "",

      // data
      cssLists_ui: [
        {
          id: 1,
          isLink: true,
          href: "css_p_appearance",
          topic: "appearance",
          note: "設定網頁元素的外觀。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_box_sizing",
          topic: "box-sizing",
          note: "設定部分區域元素的外觀。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "icon",
          note: "給 <img> 設置圖標化圖形。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "nav-index",
          note: "設定元素的連續導航次數。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "nav-down",
          note: "設定按下方向鍵的「↓」時向下導航。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "nav-left",
          note: "設定按下方向鍵的「←」時向左導航。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "nav-right",
          note: "設定按下方向鍵的「→」時向右導航。",
          isCSS3: true
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "nav-up",
          note: "設定按下方向鍵的「↑」時向上導航。",
          isCSS3: true
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_resize",
          topic: "resize",
          note: "規定是否針對元素進行大小調整。",
          isCSS3: true
        }
      ],
      cssLists_tt: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "color",
          note: "設定文本顏色。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_direction",
          topic: "direction",
          note: "設定文本的方向。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_letter_spacing",
          topic: "letter-spacing",
          note: "設定字元的間距。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_line_height",
          topic: "line-height",
          note: "設定行高。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_text_align",
          topic: "text-align",
          note: "設定文本的水平對齊方式。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_text_decoration",
          topic: "text-decoration",
          note: "設定文本的裝飾效果。",
          isCSS3: false
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_text_indent",
          topic: "text-indent",
          note: "設定文本段落首行的縮排。",
          isCSS3: false
        },
        {
          id: 8,
          isLink: true,
          href: "css_p_text_shadow",
          topic: "text-shadow",
          note: "設定文本的陰影。",
          isCSS3: true
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_text_transform",
          topic: "text-transform",
          note: "設定文本的大小寫。",
          isCSS3: false
        },
        {
          id: 10,
          isLink: true,
          href: "css_p_text_align_last",
          topic: "text-align-last",
          note: "設定如何對齊最後一行或緊接著強制換行符之前的行。",
          isCSS3: true
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "text-emphasis",
          note: "設定文本的重點標記與前景色。",
          isCSS3: true
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "text-justify",
          note: "設定當 text-align 為 justify 時所使用的對齊方法。",
          isCSS3: true
        },
        {
          id: 13,
          isLink: true,
          href: "css_p_text_stroke",
          topic: "text-stroke",
          note: "設定文本的描邊效果。",
          isCSS3: true
        },
        {
          id: 14,
          isLink: true,
          href: "css_p_text_overflow",
          topic: "text-overflow",
          note: "設定當文本溢出元素時的狀態。",
          isCSS3: true
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: "text-wrap",
          note: "設定文本的換行規則。",
          isCSS3: true
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: "unicode-bidi",
          note: "設定文本的方向。",
          isCSS3: false
        },
        {
          id: 18,
          isLink: true,
          href: "css_p_white_space",
          topic: "white-space",
          note: "規定如何處理元素中的空白。",
          isCSS3: false
        },
        {
          id: 19,
          isLink: true,
          href: "css_p_word_spacing",
          topic: "word-spacing",
          note: "設定字元間距。",
          isCSS3: false
        },
        {
          id: 20,
          isLink: true,
          href: "css_p_word_break",
          topic: "word-break",
          note: "設定文本換行規則（除了中日韓文）。",
          isCSS3: true
        },
        {
          id: 21,
          isLink: true,
          href: "css_p_word_wrap",
          topic: "word-wrap",
          note: "允許單字分割到下一行。",
          isCSS3: true
        },
        {
          id: 22,
          isLink: false,
          href: "",
          topic: "hanging-punctuation",
          note: "規定標點字符是否位於線框之外。",
          isCSS3: true
        },
        {
          id: 23,
          isLink: false,
          href: "",
          topic: "punctuation-trim",
          note: "規定是否對標點字符進行修剪。",
          isCSS3: true
        }
      ],
      cssLists_ft: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "font",
          note: "一行設定字體的所有屬性。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_font_family",
          topic: "font-family",
          note: "設定文字的字體系列。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "font-size",
          note: "設定文字的尺寸。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "font-size-adjust",
          note: "設定文字的 aspect 值。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "font-stretch",
          note: "設定文字的拉伸變形。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "font-style",
          note: "設定文字的風格樣式。",
          isCSS3: false
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_font_variant",
          topic: "font-variant",
          note: "設定文字寫是否以小型大寫顯示。",
          isCSS3: false
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "font-weight",
          note: "設定文字的粗細。",
          isCSS3: false
        }
      ],
      cssLists_ds: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "width",
          note: "設定元素的寬度。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_min_width",
          topic: "min-width",
          note: "設定元素的最小寬度。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_max_width",
          topic: "max-width",
          note: "設定元素的最大寬度。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "height",
          note: "設定元素的高度。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_min_height",
          topic: "min-height",
          note: "設定元素的最小高度。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_max_height",
          topic: "max-height",
          note: "設定元素的最大高度。",
          isCSS3: false
        }
      ],
      cssLists_bg: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "background",
          note: "設定元素的背景屬性。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_background_attachment",
          topic: "background-attachment",
          note: "設定背景影像是否依隨元素滾動。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "background-color",
          note: "設定背景的顏色。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "background-image",
          note: "設定背景的影像。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_background_position",
          topic: "background-position",
          note: "設定背景影像的位置。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_background_position",
          topic: "background-position-x",
          note: "設定背景影像的水平位置。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_background_position",
          topic: "background-position-y",
          note: "設定背景影像的垂直位置。",
          isCSS3: true
        },
        {
          id: 8,
          isLink: true,
          href: "css_p_background_repeat",
          topic: "background-repeat",
          note: "設定背景影像的重複方式。",
          isCSS3: false
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_background_clip",
          topic: "background-clip",
          note: "設定背景的繪製區域。",
          isCSS3: true
        },
        {
          id: 10,
          isLink: true,
          href: "css_p_background_origin",
          topic: "background-origin",
          note: "設定 background-position 的定位對齊位置。",
          isCSS3: true
        },
        {
          id: 11,
          isLink: true,
          href: "css_p_background_size",
          topic: "background-size",
          note: "設定背景影像的尺寸。",
          isCSS3: true
        }
      ],
      cssLists_bd: [
        {
          id: 1,
          isLink: true,
          href: "css_p_border",
          topic: "border",
          note: "一行設定邊框的所有屬性。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_border",
          topic: "border-color",
          note: "設定邊框的顏色。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_border",
          topic: "border-style",
          note: "設定邊框的樣式。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_border",
          topic: "border-width",
          note: "設定邊框的寬度。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_border_bottom",
          topic: "border-bottom",
          note: "一行設定下邊框的所有屬性。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_border_bottom",
          topic: "border-bottom-color",
          note: "設定下邊框的顏色。",
          isCSS3: false
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_border_bottom",
          topic: "border-bottom-style",
          note: "設定下邊框的樣式。",
          isCSS3: false
        },
        {
          id: 8,
          isLink: true,
          href: "css_p_border_bottom",
          topic: "border-bottom-width",
          note: "設定下邊框的寬度。",
          isCSS3: false
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_border_left",
          topic: "border-left",
          note: "一行設定左邊框的所有屬性。",
          isCSS3: false
        },
        {
          id: 10,
          isLink: true,
          href: "css_p_border_left",
          topic: "border-left-color",
          note: "設定左邊框的顏色。",
          isCSS3: false
        },
        {
          id: 11,
          isLink: true,
          href: "css_p_border_left",
          topic: "border-left-style",
          note: "設定左邊框的樣式。",
          isCSS3: false
        },
        {
          id: 12,
          isLink: true,
          href: "css_p_border_left",
          topic: "border-left-width",
          note: "設定左邊框的寬度。",
          isCSS3: false
        },
        {
          id: 13,
          isLink: true,
          href: "css_p_border_right",
          topic: "border-right",
          note: "一行設定右邊框的所有屬性。",
          isCSS3: false
        },
        {
          id: 14,
          isLink: true,
          href: "css_p_border_right",
          topic: "border-right-color",
          note: "設定右邊框的顏色。",
          isCSS3: false
        },
        {
          id: 15,
          isLink: true,
          href: "css_p_border_right",
          topic: "border-right-style",
          note: "設定右邊框的樣式。",
          isCSS3: false
        },
        {
          id: 16,
          isLink: true,
          href: "css_p_border_right",
          topic: "border-right-width",
          note: "設定右邊框的寬度。",
          isCSS3: false
        },
        {
          id: 17,
          isLink: true,
          href: "css_p_border_top",
          topic: "border-top",
          note: "一行設定上邊框的所有屬性。",
          isCSS3: false
        },
        {
          id: 18,
          isLink: true,
          href: "css_p_border_top",
          topic: "border-top-color",
          note: "設定上邊框的顏色。",
          isCSS3: false
        },
        {
          id: 19,
          isLink: true,
          href: "css_p_border_top",
          topic: "border-top-style",
          note: "設定上邊框的樣式。",
          isCSS3: false
        },
        {
          id: 20,
          isLink: true,
          href: "css_p_border_top",
          topic: "border-top-width",
          note: "設定上邊框的寬度。",
          isCSS3: false
        },
        {
          id: 21,
          isLink: true,
          href: "css_p_border_radius",
          topic: "border-radius",
          note: "設定邊框四個角的導圓角形狀。",
          isCSS3: true
        },
        {
          id: 22,
          isLink: true,
          href: "css_p_border_radius",
          topic: "border-bottom-left-radius",
          note: "設定邊框左下角的導圓角形狀。",
          isCSS3: true
        },
        {
          id: 23,
          isLink: true,
          href: "css_p_border_radius",
          topic: "border-bottom-right-radius",
          note: "設定邊框右下角的導圓角形狀。",
          isCSS3: true
        },
        {
          id: 24,
          isLink: true,
          href: "css_p_border_radius",
          topic: "border-top-left-radius",
          note: "設定邊框左上角的導圓角形狀。",
          isCSS3: true
        },
        {
          id: 25,
          isLink: true,
          href: "css_p_border_radius",
          topic: "border-top-right-radius",
          note: "設定邊框右上角的導圓角形狀。",
          isCSS3: true
        },
        {
          id: 26,
          isLink: false,
          href: "",
          topic: "border-image",
          note: "一行設定邊框影像的所有術性。",
          isCSS3: true
        },
        {
          id: 27,
          isLink: false,
          href: "",
          topic: "border-image-outset",
          note: "設定邊框影像超過所在元素的量。",
          isCSS3: true
        },
        {
          id: 28,
          isLink: false,
          href: "",
          topic: "border-image-repeat",
          note: "設定邊框影像的覆蓋程度。",
          isCSS3: true
        },
        {
          id: 29,
          isLink: false,
          href: "",
          topic: "border-image-slice",
          note: "設定邊框影像的向內偏移。",
          isCSS3: true
        },
        {
          id: 30,
          isLink: false,
          href: "",
          topic: "border-image-source",
          note: "設定邊框影像的來源。",
          isCSS3: true
        },
        {
          id: 31,
          isLink: false,
          href: "",
          topic: "border-image-width",
          note: "設定邊框影像的寬度。",
          isCSS3: true
        },
        {
          id: 32,
          isLink: false,
          href: "",
          topic: "box-decoration-break",
          note: "未知。",
          isCSS3: true
        },
        {
          id: 33,
          isLink: true,
          href: "css_p_box_shadow",
          topic: "box-shadow",
          note: "設定元素一或多個陰影。",
          isCSS3: true
        },
        {
          id: 34,
          isLink: true,
          href: "css_p_outline",
          topic: "outline",
          note: "一行設定元素輪廓的所有屬性。",
          isCSS3: false
        },
        {
          id: 35,
          isLink: true,
          href: "css_p_outline",
          topic: "outline-color",
          note: "設定輪廓的顏色。",
          isCSS3: false
        },
        {
          id: 36,
          isLink: true,
          href: "css_p_outline",
          topic: "outline-style",
          note: "設定輪廓的樣式。",
          isCSS3: false
        },
        {
          id: 37,
          isLink: true,
          href: "css_p_outline",
          topic: "outline-width",
          note: "設定輪廓的寬度。",
          isCSS3: false
        },
        {
          id: 38,
          isLink: true,
          href: "css_p_outline_offset",
          topic: "outline-offset",
          note: "設定元素邊框之外的外輪廓。",
          isCSS3: true
        }
      ],
      cssLists_li: [
        {
          id: 1,
          isLink: true,
          href: "css_p_list_style",
          topic: "list-style",
          note: "一行設定列表所有屬性參數。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_list_style",
          topic: "list-style-image",
          note: "設定列表項目的影像標記。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_list_style",
          topic: "list-style-position",
          note: "設定列表項目標記的位置。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_list_style",
          topic: "list-style-type",
          note: "設定列表項目標記的樣式。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "marker-offset",
          note: "未知。",
          isCSS3: false
        }
      ],
      cssLists_cl: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "columns",
          note: "設定 column-width 和 column-count 的簡寫屬性。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "column-width",
          note: "設定列的寬度。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "column-span",
          note: "設定該元素橫跨的列數。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "column-count",
          note: "設定該元素被分割的列數。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "column-fill",
          note: "設定列的填充方式。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "column-gap",
          note: "設定列與列之間的間隔。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "column-rule",
          note: "一行設定 column-rule-* 的所有屬性。",
          isCSS3: true
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "column-rule-color",
          note: "設定列與列之間間隔的顏色。",
          isCSS3: true
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "column-rule-style",
          note: "設定列與列之間間隔的樣式。",
          isCSS3: true
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "column-rule-width",
          note: "設定列與列之間間隔的寬度。",
          isCSS3: true
        }
      ],
      cssLists_mp: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "margin",
          note: "一行設定外邊距的所有屬性參數。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "margin-bottom",
          note: "設定下側外邊距。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "margin-left",
          note: "設定左側外邊距。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "margin-right",
          note: "設定右側外邊距。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "margin-top",
          note: "設定上側外邊距。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_padding",
          topic: "padding",
          note: "一行設定內邊距的所有屬性參數。",
          isCSS3: false
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_padding",
          topic: "padding-bottom",
          note: "設定下側內邊距。",
          isCSS3: false
        },
        {
          id: 8,
          isLink: true,
          href: "css_p_padding",
          topic: "padding-left",
          note: "設定左側內邊距。",
          isCSS3: false
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_padding",
          topic: "padding-right",
          note: "設定右側內邊距。",
          isCSS3: false
        },
        {
          id: 10,
          isLink: true,
          href: "css_p_padding",
          topic: "padding-top",
          note: "設定上側內邊距。",
          isCSS3: false
        }
      ],
      cssLists_po: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "display",
          note: "設定元素框的類型。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_vertical_align",
          topic: "vertical-align",
          note: "設定元素垂直對齊方式。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_position",
          topic: "position",
          note: "設定元素的定位類型。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_bottom",
          topic: "bottom",
          note: "設定元素定位距離父元素下方偏移的量。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_left",
          topic: "left",
          note: "設定元素定位距離父元素左側偏移的量。",
          isCSS3: false
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_right",
          topic: "right",
          note: "設定元素定位距離父元素右側偏移的量。",
          isCSS3: false
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_top",
          topic: "top",
          note: "設定元素定位距離父元素上方偏移的量。",
          isCSS3: false
        },
        {
          id: 8,
          isLink: true,
          href: "css_p_z_index",
          topic: "z-index",
          note: "設定元素的堆疊順序。",
          isCSS3: false
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_clip",
          topic: "clip",
          note: "剪裁絕對元素。",
          isCSS3: false
        },
        {
          id: 10,
          isLink: true,
          href: "css_p_float",
          topic: "float",
          note: "設定元素浮動方式。",
          isCSS3: false
        },
        {
          id: 11,
          isLink: true,
          href: "css_p_clear",
          topic: "clear",
          note: "清除 float 浮動的方式。",
          isCSS3: false
        },
        {
          id: 12,
          isLink: true,
          href: "css_p_visibility",
          topic: "visibility",
          note: "設定元素是否可見。",
          isCSS3: false
        },
        {
          id: 13,
          isLink: true,
          href: "css_p_cursor",
          topic: "cursor",
          note: "設定滑鼠游標的形狀。",
          isCSS3: false
        }
      ],
      cssLists_an: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "@keyframes",
          note: "設定動畫內容。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "animation",
          note: "一行設定動畫的全部屬性，除了 animation-play-state。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "animation-name",
          note: "設定 @keyframes 的動畫名稱",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "animation-duration",
          note: "設定動畫單次運行周期的時間。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "animation-timing-function",
          note: "設定動畫的速度曲線x。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "animation-delay",
          note: "設定延遲多少時間才開始播放動畫。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "animation-iteration-count",
          note: "設定動畫的播放次數。",
          isCSS3: true
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "animation-direction",
          note: "設定動畫播放結束後是否反向播放。",
          isCSS3: true
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "animation-play-state",
          note: "設定動畫否正在運行或暫停。",
          isCSS3: true
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "animation-fill-mode",
          note: "設定動畫結束後的狀態。",
          isCSS3: true
        }
      ],
      cssLists_ts: [
        {
          id: 1,
          isLink: true,
          href: "css_p_transition",
          topic: "transition",
          note: "一行設定過渡的所有屬性。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_transition",
          topic: "transition-property",
          note: "設定要套用過渡效果的屬性名稱。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_transition",
          topic: "transition-duration",
          note: "設定過渡效果的執行週期。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_transition",
          topic: "transition-timing-function",
          note: "設定過渡效果的時間曲線。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_transition",
          topic: "transition-delay",
          note: "設定過渡效果的延遲觸發時間。",
          isCSS3: true
        }
      ],
      cssLists_tf: [
        {
          id: 1,
          isLink: true,
          href: "css_p_transform",
          topic: "transform",
          note: "設定元素的 2D/3D 轉換。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_transform_origin",
          topic: "transform-origin",
          note: "設定轉換元素的位置。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "transform-style",
          note: "設定套用 transform 元素在 3D 空間顯示。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_perspective",
          topic: "perspective",
          note: "設定 3D 元素的透視效果。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "perspective-origin",
          note: "設定 3D 元素的底部位置。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "backface-visibility",
          note: "設定元素在螢幕畫面的背面是否可見。",
          isCSS3: true
        }
      ],
      cssLists_gc: [
        {
          id: 1,
          isLink: true,
          href: "css_p_counter",
          topic: "content",
          note: "搭配偽元素（:after、:before）使用，來插入生成內容。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_counter_increment",
          topic: "counter-increment",
          note: "遞增或遞減一到多個計數器。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_counter_increment",
          topic: "counter-reset",
          note: "創建或重置一到多個計數器。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "quotes",
          note: "設置 <q> 嵌套引用的符號類型。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "crop",
          note: "未知。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "move-to",
          note: "未知。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "page-policy",
          note: "未知。",
          isCSS3: true
        }
      ],
      cssLists_fb: [
        {
          id: 1,
          isLink: true,
          href: "css_p_align_content",
          topic: "align-content",
          note: "Flexbox 內多元素垂直方向的排列對齊方式。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_align_items",
          topic: "align-items",
          note: "Flexbox 內單行整體元素的垂直對齊方式。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_align_self",
          topic: "align-self",
          note: "Flexbox 內單行單一元素的垂直對齊方式。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_flex",
          topic: "flex",
          note: "控制 Flexbox 子元素的分配空間。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_flex_basis",
          topic: "flex-basis",
          note: "控制 Flexbox 子元素的基準寬度值。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: true,
          href: "css_p_flex_grow",
          topic: "flex-grow",
          note: "控制 Flexbox 子元素的寬度擴張倍率。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: true,
          href: "css_p_flex_shrink",
          topic: "flex-shrink",
          note: "控制 Flexbox 子元素的寬度收縮倍率。",
          isCSS3: true
        },
        {
          id: 8,
          isLink: true,
          href: "css_p_flex_flow",
          topic: "flex-flow",
          note: "控制 Flexbox 的排序方向與是否換行。",
          isCSS3: true
        },
        {
          id: 9,
          isLink: true,
          href: "css_p_flex_flow",
          topic: "flex-direction",
          note: "控制 Flexbox 子元素的方向。",
          isCSS3: true
        },
        {
          id: 10,
          isLink: true,
          href: "css_p_flex_flow",
          topic: "flex-wrap",
          note: "控制 Flexbox 是單行或多行。",
          isCSS3: true
        },
        {
          id: 11,
          isLink: true,
          href: "css_p_justify_content",
          topic: "justify-content",
          note: "Flexbox 內單行整體元素的水平排列方式。",
          isCSS3: true
        },
        {
          id: 12,
          isLink: true,
          href: "css_p_order",
          topic: "order",
          note: "用來處理 Flexbox 子元素的排列順序。",
          isCSS3: true
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "box-align",
          note: "設定如何對齊伸縮元素的子元素。",
          isCSS3: true
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: "box-direction",
          note: "設定伸縮元素的子元素顯示方向。",
          isCSS3: true
        },
        {
          id: 15,
          isLink: false,
          href: "",
          topic: "box-flex",
          note: "設定元素是否可以伸縮。",
          isCSS3: true
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: "box-flex-group",
          note: "將可伸縮元素分配到柔性分組。",
          isCSS3: true
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: "box-lines",
          note: "當子元素超過可伸縮父元素的寬度，是否換行顯示。",
          isCSS3: true
        },
        {
          id: 18,
          isLink: false,
          href: "",
          topic: "box-ordinal-group",
          note: "設定可伸縮元素之子元素的顯示次數。",
          isCSS3: true
        },
        {
          id: 19,
          isLink: false,
          href: "",
          topic: "box-orient",
          note: "設定伸縮框的子元素以水平或垂直方式排列。",
          isCSS3: true
        },
        {
          id: 20,
          isLink: false,
          href: "",
          topic: "box-pack",
          note: "設定伸縮框的子元素在水平或垂直排列中的排列方式。",
          isCSS3: true
        }
      ],
      cssLists_bx: [
        {
          id: 1,
          isLink: true,
          href: "css_p_overflow",
          topic: "overflow",
          note: "設定內容溢出元素外時的顯示狀態。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_overflow_x",
          topic: "overflow-x",
          note: "設定內容溢出元素外時的水平方向顯示狀態。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_overflow_y",
          topic: "overflow-y",
          note: "設定內容溢出元素外時的垂直方向顯示狀態。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "overflow-style",
          note: "設定內容溢出的首選滾動樣式。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "overflow-scrolling",
          note: "控制元素在行動裝置上是否具備捲動回彈的效果。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "rotation",
          note: "設定元素左上角的偏移點以提供旋轉依據。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "rotation-point",
          note: "設定以元素左上角的 rotation 位置旋轉角度。",
          isCSS3: true
        }
      ],
      cssLists_gd: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "grid-columns",
          note: "設定網格中每個列的寬度。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "grid-rows",
          note: "設定網格中每個列的高度。",
          isCSS3: true
        }
      ],
      cssLists_tb: [
        {
          id: 1,
          isLink: true,
          href: "css_p_border_collapse",
          topic: "border-collapse",
          note: "設定表格邊框的開合。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: true,
          href: "css_p_border_spacing",
          topic: "border-spacing",
          note: "設定單元格彼此邊框之間的距離。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: true,
          href: "css_p_caption_side",
          topic: "caption-side",
          note: "設定表格標題的位置。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: true,
          href: "css_p_empty_cells",
          topic: "empty-cells",
          note: "設定是否顯示表格中的空單元格上之邊框與背景。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: true,
          href: "css_p_table_layout",
          topic: "table-layout",
          note: "設定用於表格的布局算法。",
          isCSS3: false
        }
      ],
      cssLists_co: [
        {
          id: 1,
          isLink: true,
          href: "css_p_opacity",
          topic: "opacity",
          note: "設定元素的透明度。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "color-profile",
          note: "未知。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "rendering-intent",
          note: "未知。",
          isCSS3: true
        }
      ],
      cssLists_pm: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "bookmark-label",
          note: "規定書籤的標記。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "bookmark-level",
          note: "規定書籤的級別。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "bookmark-target",
          note: "規定書籤連結的目標。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "float-offset",
          note: "將元素放在 float 屬性通常放置的位置的相反方向。",
          isCSS3: true
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "hyphenate-after",
          note: "規定連字單詞中連字符之後的最小字符數。",
          isCSS3: true
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "hyphenate-before",
          note: "規定連字單詞中連字符之前的最小字符數。",
          isCSS3: true
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "hyphenate-character",
          note: "規定當發生斷字時顯示的字符串。",
          isCSS3: true
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "hyphenate-lines",
          note: "指示元素中連續斷字連線的的最大數。",
          isCSS3: true
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "hyphenate-resource",
          note: "規定幫助瀏覽器確定斷字點的外部資源（逗號分隔的列表）。",
          isCSS3: true
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "hyphens",
          note: "設置如何對單詞進行拆分，以改善段落的佈局。",
          isCSS3: true
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "image-resolution",
          note: "規定圖像的正確分辨率。。",
          isCSS3: true
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "marks",
          note: "向文檔添加裁切標記或十字標記。",
          isCSS3: true
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "string-set",
          note: "未知。",
          isCSS3: true
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: "fit",
          note: "示意如何對 width 和 height 均非 auto 的替換元素進行縮放。",
          isCSS3: true
        },
        {
          id: 15,
          isLink: false,
          href: "",
          topic: "fit-position",
          note: "設定盒內對象的對齊方式。",
          isCSS3: true
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: "image-orientation",
          note: "規定用戶代理應用於影像的順時針方向旋轉。",
          isCSS3: true
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: "page",
          note: "規定元素應該被顯示的頁面特定類型。",
          isCSS3: true
        },
        {
          id: 18,
          isLink: false,
          href: "",
          topic: "size",
          note: "規定頁面內容包含框的尺寸和方向。",
          isCSS3: true
        }
      ],
      cssLists_hl: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "target",
          note: "一行設定超連結目標的所有屬性。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "target-name",
          note: "設定連結開啟的目標。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "target-new",
          note: "設定連結開啟的方式。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "target-position",
          note: "設定在何處開啟目標連結。",
          isCSS3: true
        }
      ],
      cssLists_mq: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "marquee-direction",
          note: "設定移動內容的方向。",
          isCSS3: true
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "marquee-play-count",
          note: "設定移動內容移動的次數。",
          isCSS3: true
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "marquee-speed",
          note: "設定移動內容移動的速度。",
          isCSS3: true
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "marquee-style",
          note: "設定移動內容的樣式。",
          isCSS3: true
        }
      ],
      cssLists_pr: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "page-break-after",
          note: "設定元素後的分頁行為。",
          isCSS3: false
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "page-break-before",
          note: "設定元素前的分頁行為。",
          isCSS3: false
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "page-break-inside",
          note: "設定元素內的分頁行為。",
          isCSS3: false
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "orphans",
          note: "設置當元素產生分頁時，必須在頁面底部保留的最少行數。",
          isCSS3: false
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "widows",
          note: "設置當元素產生分頁時，必須在頁面頂部保留的最少行數。",
          isCSS3: false
        }
      ]
    };
  },

  computed: {
    filterCL_ui: function() {
      var search = this;
      return this.cssLists_ui.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_tt: function() {
      var search = this;
      return this.cssLists_tt.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_ft: function() {
      var search = this;
      return this.cssLists_ft.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_ds: function() {
      var search = this;
      return this.cssLists_ds.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_bg: function() {
      var search = this;
      return this.cssLists_bg.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_bd: function() {
      var search = this;
      return this.cssLists_bd.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_li: function() {
      var search = this;
      return this.cssLists_li.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_cl: function() {
      var search = this;
      return this.cssLists_cl.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_mp: function() {
      var search = this;
      return this.cssLists_mp.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_po: function() {
      var search = this;
      return this.cssLists_po.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_an: function() {
      var search = this;
      return this.cssLists_an.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_ts: function() {
      var search = this;
      return this.cssLists_ts.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_tf: function() {
      var search = this;
      return this.cssLists_tf.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_gc: function() {
      var search = this;
      return this.cssLists_gc.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_fb: function() {
      var search = this;
      return this.cssLists_fb.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_bx: function() {
      var search = this;
      return this.cssLists_bx.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_gd: function() {
      var search = this;
      return this.cssLists_gd.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_tb: function() {
      var search = this;
      return this.cssLists_tb.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_co: function() {
      var search = this;
      return this.cssLists_co.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_pm: function() {
      var search = this;
      return this.cssLists_pm.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_hl: function() {
      var search = this;
      return this.cssLists_hl.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_mq: function() {
      var search = this;
      return this.cssLists_mq.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    filterCL_pr: function() {
      var search = this;
      return this.cssLists_pr.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>