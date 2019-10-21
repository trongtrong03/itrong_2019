<template>
  <main class="inside-wrap">
    <section class="inside-main">
      <h2>／SVG</h2>
      <div class="inside-search">
        <input type="text" placeholder="請輸入關鍵字" v-model="query" />
        <label>
          <i class="fas fa-search"></i>
        </label>
      </div>
      <div class="inside-tag">
        <a href="#tagLearn">學習誌</a>
      </div>
      <div class="inside-container">
        <div id="tagLearn" class="inside-list">
          <h2>學習誌</h2>
          <ul>
            <li v-for="item in filterSVG" :key="item.id">
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

      // data
      svgLists: [
        {
          id: 14,
          href: 'svg_base_masking',
          time: '2019-06-12',
          topic: 'Learn14-- 遮色片（Masking）',
        },
        {
          id: 13,
          href: 'svg_base_clipping',
          time: '2019-06-09',
          topic: 'Learn13-- 剪裁（Clipping）',
        },
        {
          id: 12,
          href: 'svg_base_text_2',
          time: '2019-06-08',
          topic: 'Learn12-- 文字（Text） ● 其二：tspan 與 textPath',
        },
        {
          id: 11,
          href: 'svg_base_text',
          time: '2019-06-08',
          topic: 'Learn11-- 文字（Text） ● 其一：基本語法',
        },
        {
          id: 10,
          href: "svg_base_fill",
          time: "2019-06-06",
          topic: "Learn10-- 填色（Fill）"
        },
        {
          id: 9,
          href: "svg_base_stroke",
          time: "2019-06-05",
          topic: "Learn09-- 邊框（Stroke）"
        },
        {
          id: 8,
          href: "svg_base_path_4",
          time: "2019-06-04",
          topic: "Learn08-- 路徑（Path） ● 其四：指令介紹-弧形"
        },
        {
          id: 7,
          href: "svg_base_path_3",
          time: "2019-06-03",
          topic: "Learn07-- 路徑（Path） ● 其三：指令介紹-曲線"
        },
        {
          id: 6,
          href: "svg_base_path_2",
          time: "2019-06-02",
          topic: "Learn06-- 路徑（Path） ● 其二：指令介紹-點與直線"
        },
        {
          id: 5,
          href: "svg_base_path",
          time: "2019-06-02",
          topic: "Learn05-- 路徑（Path） ● 其一：指令列表"
        },
        {
          id: 4,
          href: "svg_base_shape_2",
          time: "2019-05-30",
          topic: "Learn04-- SVG 的基本圖形 ● 其二：圓形、橢圓形、多邊形"
        },
        {
          id: 3,
          href: "svg_base_shape",
          time: "2019-05-29",
          topic: "Learn03-- SVG 的基本圖形 ● 其一：矩形、圓角矩形"
        },
        {
          id: 2,
          href: "svg_vs_canvas",
          time: "2019-05-29",
          topic: "Learn02-- SVG V.S. Canvas"
        },
        {
          id: 1,
          href: "svg_intro",
          time: "2019-05-28",
          topic: "Learn01-- 什麼是 SVG？"
        }
      ]
    };
  },

  computed: {
    filterSVG: function() {
      var search = this;
      return this.svgLists.filter(function(item) {
        return (
          item.topic.toLowerCase().indexOf(search.query.toLowerCase()) !== -1
        );
      });
    }
  }
};
</script>