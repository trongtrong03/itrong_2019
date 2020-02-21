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
        <div class="inside-btn">
          <button :class="active==1 ? 'active' : ''" @click="active=1">
            <i class="fas fa-th"></i>
            <b>Effects</b>
          </button>
          <button :class="active==2 ? 'active' : ''" @click="active=2">
            <i class="fas fa-list-ul"></i>
            <b>API List</b>
          </button>
          <button :class="active==3 ? 'active' : ''" @click="active=3">
            <i class="fas fa-list"></i>
            <b>TEC List</b>
          </button>
        </div>
        <!-- Effects -->
        <div class="inside-grid" v-if="active==1">
          <ul>
            <li v-for="item in jqPlugin" :key="item.id">
              <a :href="'jq_plugin_' + item.href + format">
                <figure>
                    <img :src="'images/pic/jq/plugin/' + item.href + '.jpg'">
                </figure>
                <time>{{ item.time }}</time>
                <h2>{{ item.topic }}</h2>
              </a>
            </li>
          </ul>
        </div>
        <!-- API 列表 -->
        <div class="inside-form" v-if="active==2">
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
          <ul class="inside-flex">
            <li v-for="item in apiSelector_6" :key="item.id">
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
            <li v-for="item in apiSelector_7" :key="item.id">
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
          <h2>事件</h2>
          <ul class="inside-flex">
            <li v-for="item in apiEvents" :key="item.id">
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
          <h2>效果</h2>
          <ul class="inside-flex">
            <li v-for="item in apiEffects" :key="item.id">
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
        <!-- TEC 列表 -->
        <div class="inside-list" v-if="active==3">
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
      isLink: true,
      query: "",
      active: 1,

      // plug
      jqPlugs: [
        {
          id: 22,
          href: 'datepicker',
          time: '2019-07-03',
          topic: '日曆選擇工具（Calendar Picker）',
        },
        {
          id: 21,
          href: 'masonry',
          time: '2019-07-01',
          topic: '瀑布流（Masonry Grid）',
        },
        {
          id: 20,
          href: 'pagination',
          time: '2019-06-29',
          topic: '分頁效果（Pagination）',
        },
        {
          id: 19,
          href: 'contentFlipper',
          time: '2019-06-24',
          topic: '文字翻轉特效（Content Flipper）',
        },
        {
          id: 18,
          href: 'textdots',
          time: '2019-06-23',
          topic: '文字溢出省略符號（Text Dots）',
        },
        {
          id: 17,
          href: 'v_tabs',
          time: '2019-06-21',
          topic: '垂直切換頁籤（Vertical Tabs）',
        },
        {
          id: 16,
          href: 'swiper_vslider',
          time: '2019-06-18',
          topic: '垂直影像輪播（Vertical Slider）',
        },
        {
          id: 15,
          href: 'thumbslider',
          time: '2019-06-01',
          topic: '縮圖型影像輪播（Thumb Slider）',
        },
        {
          id: 14,
          href: 'copy',
          time: '2019-05-13',
          topic: '複製區域文字（Copy）',
        },
        {
          id: 13,
          href: 'h_newsticker',
          time: '2019-05-10',
          topic: '水平鍵字效果跑馬燈（News Ticker）',
        },
        {
          id: 12,
          href: 'preloaded',
          time: '2019-03-29',
          topic: '預先載入影像（Preload Image）',
        },
        {
          id: 11,
          href: 'mixitup',
          time: '2019-03-26',
          topic: '項目篩選（MixItUp）',
        },
        {
          id: 10,
          href: 'v_newsticker',
          time: '2019-01-24',
          topic: '垂直切換跑馬燈（News Ticker）',
        },
        {
          id: 9,
          href: 'h_tabs',
          time: '2019-01-21',
          topic: '水平切換頁籤（Horizontal Tabs）',
        },
        {
          id: 8,
          href: 'particleground',
          time: '2018-09-07',
          topic: '粒子特效（Particleground）',
        },
        {
          id: 7,
          href: 'image_comparison',
          time: '2018-01-10',
          topic: '兩張影像的拖曳比較（Image Comparison）',
        },
        {
          id: 6,
          href: 'iosslider_multislide',
          time: '2017-10-30',
          topic: '多項目輪播（iosslider）',
        },
        {
          id: 5,
          href: 'fancyBox',
          time: '2017-08-23',
          topic: '燈箱（FancyBox 2.1.7）',
        },
        {
          id: 4,
          href: 'tabs_slider',
          time: '2017-07-25',
          topic: '頁籤型影像輪播（Tabs Slider）',
        },
        {
          id: 3,
          href: 'bxslider',
          time: '2017-07-24',
          topic: '水平影像輪播（Horizontal Slider）',
        },
        {
          id: 2,
          href: 'elevatezoom',
          time: '2017-07-15',
          topic: '影像放大鏡（Image Zoom）',
        },
        {
          id: 1,
          href: 'accordion',
          time: '2017-07-09',
          topic: '兩層式摺疊列表（Accordion）',
        }
      ],

      // tec
      jqLists: [
        {
          id: 10,
          href: 'jq_tec_escape',
          time: '2019-07-22',
          topic: '程式碼跳脫字元（escape character）',
        },
        {
          id: 9,
          href: 'jq_tec_prevent_ctrl_cv',
          time: '2019-04-16',
          topic: '使複製（Ctrl + C）與貼上（Ctrl + V）操作失效',
        },
        {
          id: 8,
          href: 'jq_tec_inputgroup',
          time: '2018-12-16',
          topic: '單選的核選方塊（checkbox）',
        },
        {
          id: 7,
          href: 'jq_tec_get_filename',
          time: '2018-09-22',
          topic: '取得上傳項目的名稱',
        },
        {
          id: 6,
          href: 'jq_tec_remove_allclass',
          time: '2018-05-01',
          topic: '移除指定元素所有 class 的幾種方法',
        },
        {
          id: 5,
          href: 'jq_tec_active',
          time: '2017-11-23',
          topic: '實現項目間的 class 轉移效果',
        },
        {
          id: 4,
          href: 'jq_tec_input_txtConfirm',
          time: '2017-07-24',
          topic: '判定兩個輸入框的值是否一致',
        },
        {
          id: 3,
          href: "jq_tec_gotop",
          time: "2017-07-14",
          topic: "常見的返回頂部按鈕"
        },
        {
          id: 2,
          href: 'jq_tec_placeholder',
          time: '2017-04-10',
          topic: '實現 input 的提示文字（placeholder）變色效果',
        },
        {
          id: 1,
          href: "jq_tec_callback",
          time: "2016-12-05",
          topic: "完成載入後執行（callback）"
        }
      ],

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

      apiSelectorList_6: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$(':input')",
          note: "選取所有 <input> 元素。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$(':text')",
          note: "選取所有 type 屬性為 text 的 <input> 元素。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$(':password')",
          note: "選取所有 type 屬性為 password 的 <input> 元素。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$(':radio')",
          note: "選取所有 type 屬性為 radio 的 <input> 元素。"
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: "$(':checkbox')",
          note: "選取所有 type 屬性為 checkbox 的 <input> 元素。"
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: "$(':submit')",
          note: "選取所有 type 屬性為 submit 的 <input> 元素。"
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: "$(':reset')",
          note: "選取所有 type 屬性為 reset 的 <input> 元素。"
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: "$(':button')",
          note: "選取所有 type 屬性為 button 的 <input> 元素。"
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "$(':image')",
          note: "選取所有 type 屬性為 image 的 <input> 元素。"
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "$(':file')",
          note: "選取所有 type 屬性為 file 的 <input> 元素。"
        },
      ],

      apiSelectorList_7: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: "$(':enabled')",
          note: "選取所有啟用中的 <input> 元素。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: "$(':disabled')",
          note: "選取所有禁止啟用的 <input> 元素。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: "$(':checked')",
          note: "選取所有核選中的 <input> 元素。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: "$(':selected')",
          note: "選取所有選擇中的 <option> 元素項目。"
        },
      ],

      apiEvent: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: ".bind()",
          note: "為指定元素添加一或多個事件處理程序及函數。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: ".blur()",
          note: "為指定元素添加失焦事件。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: ".change()",
          note: "當指定元素的值發生改變時觸發事件。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: ".click()",
          note: "當點擊指定元素時觸發事件。"
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: ".dblclick()",
          note: "當雙擊指定元素時觸發事件。"
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: ".delegate()",
          note: "為指定的當前或未來元素添加一或多個事件處理程序及函數。"
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: ".die()",
          note: "移除所有透過 .live() 方法向指定元素添加的一或多個事件處理程序。"
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: ".error()",
          note: "當指定元素發生錯誤時觸發事件處理程序。"
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: "event.preventDefault()",
          note: "阻止指定元素發生其預設行為，例如 <a> 點擊開啟超連結。"
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: "event.isDefaultPrevented()",
          note: "聲明 event 對象元素是否調用了 preventDefault() 方法的結果。"
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: "event.pageX",
          note: "顯示滑鼠鼠標距離相對於螢幕左側邊緣的位置。"
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: "event.pageY",
          note: "顯示滑鼠鼠標距離相對於螢幕上部邊緣的位置。"
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: "event.result",
          note: "返回由指定事件觸發的事件處理器之最後一個值。"
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: "event.target",
          note: "規定事件由哪一個 DOM 元素去觸發。"
        },
        {
          id: 15,
          isLink: false,
          href: "",
          topic: "event.timeStamp",
          note: "計算事件觸發時，從 1970 年 1 月 1 日至觸發當下的總毫秒數。"
        },
        {
          id: 16,
          isLink: false,
          href: "",
          topic: "event.timeStamp",
          note: "描述事件觸發的類型。"
        },
        {
          id: 17,
          isLink: false,
          href: "",
          topic: "event.which",
          note: "指示指定元素按下什麼鍵或按鈕。"
        },
        {
          id: 18,
          isLink: false,
          href: "",
          topic: ".focus()",
          note: "為指定元素添加焦點事件。"
        },
        {
          id: 19,
          isLink: false,
          href: "",
          topic: ".keydown()",
          note: "當指定元素按下按鍵時觸發事件。"
        },
        {
          id: 20,
          isLink: false,
          href: "",
          topic: ".keypress()",
          note: "當指定元素每插入一個字符就會觸發事件。"
        },
        {
          id: 21,
          isLink: false,
          href: "",
          topic: ".keyup()",
          note: "當指定元素按下按鍵然後鬆開時觸發事件。"
        },
        {
          id: 22,
          isLink: false,
          href: "",
          topic: ".live()",
          note: "為指定的當前或未來元素添加一或多個事件處理程序及函數。"
        },
        {
          id: 23,
          isLink: false,
          href: "",
          topic: ".load()",
          note: "當指定元素已載入時觸發事件。"
        },
        {
          id: 24,
          isLink: false,
          href: "",
          topic: ".mousedown()",
          note: "當從指定元素按下滑鼠按鍵時觸發事件。"
        },
        {
          id: 25,
          isLink: false,
          href: "",
          topic: ".mouseenter()",
          note: "當滑鼠移入指定元素時觸發事件，通常與 .mouseleave() 一同使用。"
        },
        {
          id: 26,
          isLink: false,
          href: "",
          topic: ".mouseleave()",
          note: "當滑鼠移出指定元素時觸發事件，通常與 .mouseenter() 一同使用。"
        },
        {
          id: 27,
          isLink: false,
          href: "",
          topic: ".mousemove()",
          note: "當滑鼠在指定元素範圍內移動時觸發事件。"
        },
        {
          id: 28,
          isLink: false,
          href: "",
          topic: ".mouseover()",
          note: "當滑鼠移入指定元素時觸發事件，通常與 .mouseout() 一同使用。"
        },
        {
          id: 29,
          isLink: false,
          href: "",
          topic: ".mouseout()",
          note: "當滑鼠移出指定元素時觸發事件，通常與 .mouseover() 一同使用。"
        },
        {
          id: 30,
          isLink: false,
          href: "",
          topic: ".mouseup()",
          note: "當鬆開滑鼠按鈕時觸發事件。"
        },
        {
          id: 31,
          isLink: false,
          href: "",
          topic: ".one()",
          note: "指定元素僅能觸發事件一次。"
        },
        {
          id: 32,
          isLink: false,
          href: "",
          topic: ".ready()",
          note: "當 DOM 完成加載時觸差 ready 事件裡的函數。"
        },
        {
          id: 33,
          isLink: false,
          href: "",
          topic: ".resize()",
          note: "當瀏覽器畫面大小有所調整時觸發事件。"
        },
        {
          id: 34,
          isLink: false,
          href: "",
          topic: ".scroll()",
          note: "當滑鼠滾輪在指定元素滾動時觸發事件。"
        },
        {
          id: 35,
          isLink: false,
          href: "",
          topic: ".select()",
          note: "當指定 <textarea> 或 <input> type 類型為 text 之元素內容被選取時觸發事件。"
        },
        {
          id: 36,
          isLink: false,
          href: "",
          topic: ".submit()",
          note: "當指定表單提交時觸發事件。"
        },
        {
          id: 37,
          isLink: false,
          href: "",
          topic: ".toggle()",
          note: "當點擊指定元素時，會輪流觸發二或多個函數事件。"
        },
        {
          id: 38,
          isLink: false,
          href: "",
          topic: ".trigger()",
          note: "規定指定元素要觸發的事件。"
        },
        {
          id: 39,
          isLink: false,
          href: "",
          topic: ".triggerHandler()",
          note: "與 .trigger() 類似，但不會執行瀏覽器預設操作，例如 select 選取效果。"
        },
        {
          id: 40,
          isLink: false,
          href: "",
          topic: ".unbind()",
          note: "移除指定元素的事件處理器。"
        },
        {
          id: 41,
          isLink: false,
          href: "",
          topic: ".undelegate()",
          note: "移除由 .delegate() 添加的事件處理器。"
        },
        {
          id: 42,
          isLink: false,
          href: "",
          topic: ".unload()",
          note: "當離開頁面時觸發事件。"
        },
      ],

      apiEffect: [
        {
          id: 1,
          isLink: false,
          href: "",
          topic: ".animate()",
          note: "給指定元素添加 CSS 屬性的變動效果。"
        },
        {
          id: 2,
          isLink: false,
          href: "",
          topic: ".clearQueue()",
          note: "停止指定元素中尚未執行的函數。"
        },
        {
          id: 3,
          isLink: false,
          href: "",
          topic: ".delay()",
          note: "延遲指定元素中尚未執行的函數。"
        },
        {
          id: 4,
          isLink: false,
          href: "",
          topic: ".dequeue()",
          note: "運行指定元素中下一個尚未執行的函數。"
        },
        {
          id: 5,
          isLink: false,
          href: "",
          topic: ".fadeIn()",
          note: "使指定元素從透明漸變為不透明（淡入效果）。"
        },
        {
          id: 6,
          isLink: false,
          href: "",
          topic: ".fadeOut()",
          note: "使指定元素從不透明漸變為透明（淡出效果）。"
        },
        {
          id: 7,
          isLink: false,
          href: "",
          topic: ".fadeTo()",
          note: "使指定元素從不透明漸變為指定透明度。"
        },
        {
          id: 8,
          isLink: false,
          href: "",
          topic: ".hide()",
          note: "隱藏指定元素。"
        },
        {
          id: 9,
          isLink: false,
          href: "",
          topic: ".show()",
          note: "顯示指定元素。"
        },
        {
          id: 10,
          isLink: false,
          href: "",
          topic: ".slideDown()",
          note: "使指定元素以向下滑動的方式展開隱藏的內容。"
        },
        {
          id: 11,
          isLink: false,
          href: "",
          topic: ".slideUp()",
          note: "使指定元素以向上滑動的方式隱藏展開的內容。"
        },
        {
          id: 12,
          isLink: false,
          href: "",
          topic: ".slideToggle()",
          note: "使指定元素在向下與向上輪流滑動間顯示或隱藏內容。"
        },
        {
          id: 13,
          isLink: false,
          href: "",
          topic: ".stop()",
          note: "停止指定元素的動畫運行狀態。"
        },
        {
          id: 14,
          isLink: false,
          href: "",
          topic: ".toggle()",
          note: "使指定元素輪流切換顯示或隱藏的狀態。"
        },
      ],
      
    };
  },

  methods: {
  },

  computed: {
    jqPlugin: function() {
      var search = this;
      return this.jqPlugs.filter(function(item) {
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
    apiSelector_6: function() {
      var search = this;
      return this.apiSelectorList_6.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiSelector_7: function() {
      var search = this;
      return this.apiSelectorList_7.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiEvents: function() {
      var search = this;
      return this.apiEvent.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
    apiEffects: function() {
      var search = this;
      return this.apiEffect.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    },
  }
};
</script>