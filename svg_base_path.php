<!doctype html>
<html class="pages html view">
<?php require_once 'include/_head.php' ?>
<body>
    <article id="wrap">
        <!-- Header -->
        <v-header></v-header>
        <v-ihead></v-ihead>
        <main class="inside-wrap">
            <section class="inside-main">
                <!-- 文章標題 -->
                <div class="inside-view">
                    <hgroup>
                        <time>2019-06-02</time>
                        <h1>Learn05-- 路徑（Path） ● 其一：指令列表</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>由於 SVG 是向量，所有物件和元素都是由路徑（Path）組成，因此 <em>&lt;path&gt;</em> 在 SVG 是很重要的元素標籤，它的屬性非常多樣，本篇將做一些基本介紹。</p>
<p>常見的 <em>&lt;path&gt;</em> 基本語法是這樣：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="參數" /&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>屬性 <em>d</em> 是 data 的意思，用來定義路徑向量的形狀，它有很多指令，以下用一張簡表記錄。</p>
<br>
<h2>指令列表：</h2>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex2">全名</span>
        <span class="t-flex2">參數</span>
        <span class="t-flex6">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>M</em></span>
        <span class="t-flex2">move to</span>
        <span class="t-flex2">x y</span>
        <span class="t-flex6">起始點的 x , y 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>L</em></span>
        <span class="t-flex2">line to</span>
        <span class="t-flex2">x y</span>
        <span class="t-flex6">從目前點的座標畫直線到指定點的 x , y 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>H</em></span>
        <span class="t-flex2">horizontal line to</span>
        <span class="t-flex2">x</span>
        <span class="t-flex6">從目前點的座標畫水平直線到指定的 x 軸座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>V</em></span>
        <span class="t-flex2">vertical line to</span>
        <span class="t-flex2">y</span>
        <span class="t-flex6">從目前點的座標畫垂直線到指定的 y 軸座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>C</em></span>
        <span class="t-flex2">curve</span>
        <span class="t-flex2">x1 y1 x2 y2 x y</span>
        <span class="t-flex6">從目前點的座標畫條貝茲曲線到指定點的 x, y 座標：其中 x1, y1 及 x2, y2 為控制點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>S</em></span>
        <span class="t-flex2">smooth curve</span>
        <span class="t-flex2">x2 y2 x y</span>
        <span class="t-flex6">從目前點的座標畫條反射的貝茲曲線到指定點的 x, y 座標：其中 x2, y2 為反射的控制點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>Q</em></span>
        <span class="t-flex2">quadratic Bézier curve</span>
        <span class="t-flex2">x1 y1 x y</span>
        <span class="t-flex6">從目前點的座標畫條二次貝茲曲線到指定點的 x, y 座標：其中 x1, y1 為控制點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>T</em></span>
        <span class="t-flex2">smooth quadratic Bézier curve</span>
        <span class="t-flex2">x y</span>
        <span class="t-flex6">從目前點的座標畫條反射二次貝茲曲線到指定點的 x, y 座標：以前一個座標為反射控制點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>A</em></span>
        <span class="t-flex2">Arc</span>
        <span class="t-flex2">rx ry x-axis-rotation large-arc-flag sweep-flag x y</span>
        <span class="t-flex6">從目前點的座標畫個橢圓形到指定點的 x, y 座標：其中 rx, ry 為橢圓形的 x 軸及 y 軸的半徑，x-axis-rotation 是弧線與 x 軸的旋轉角度，large-arc-flag 則設定 1 最大角度的弧線或是 0 最小角度的弧線，sweep-flag 設定方向為 1 順時針方向或 0 逆時針方向</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>Z</em></span>
        <span class="t-flex2">closepath</span>
        <span class="t-flex2"></span>
        <span class="t-flex6">關閉路徑，將目前點的座標與第一個點的座標連接起來</span>
    </div>
</div>
<p>這裡必須知道很重要的一點，參數是有大小寫區分的，使用大寫代表「絕對座標」，小寫則是「與前一個座標的『相對座標』」。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/SVG/Tutorial/%E8%B7%AF%E5%BE%84" target="_blank">MDN - 路徑</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-03-basic-shapes.html" target="_blank">SVG 研究之路 (3) - 基本形狀</a></li>
    <li><a href="https://www.yinchengli.com/2018/06/17/svg-path/" target="_blank">SVG Path路径在网页开发的作用</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10156809" target="_blank">Day4 - SVG Path 基礎篇</a></li>
</ul>
<!-- end -->
                </div>
            </section>
        </main>
        <!-- Footer -->
        <v-footer></v-footer>
    </article>
    <?php require_once 'include/_viewjs.php' ?>
</body>

</html>