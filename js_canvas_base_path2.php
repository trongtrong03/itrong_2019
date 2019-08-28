<!doctype html>
<html class="pages js view">
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
                        <time>2019-06-26</time>
                        <h1>Learn05-- 基本繪圖 ● 其三：路徑（Path）-下</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>承襲前篇，本篇要敘述的是路徑（Path）可以使用的幾個 API 繪圖指令，以下用一張表格列出本篇會學到的方法指令：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">方法</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>moveTo()</em></span>
        <span class="t-flex5">移動錨點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>lineTo()</em></span>
        <span class="t-flex5">畫直線</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>arc()</em></span>
        <span class="t-flex5">畫弧</span>
    </div>
</div>
<p>正式進入畫線介紹前，在此先重新複習繪製路徑的基本語法：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="javascript">var canvas = document.getElementById('idName');
var ctx = canvas.getContext('2d');

ctx.beginPath();

// 路徑指令

ctx.closePath();</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>一個路徑圖形必須要有始（<em>beginPath()</em>）有終（<em>closePath()</em>）。</p>
<br>

<h2><em>moveTo()</em>：</h2>
<p><em>moveTo()</em> 方法不會產生圖形，它就像繪圖軟體路徑工具中的初始錨點，用來指定繪圖路徑的起始座標，在括號內填入 x、y 值，接著就可以用 <em>lineTo()</em> 或 <em>arc()</em> 產生路徑線段。</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">moveTo(x, y);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="PrLMWB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-7">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PrLMWB/">
    canvas-learn: path-7</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>如範例演示，即便設定了兩個 <em>moveTo()</em> 移動座標，他們彼此間仍然不會相連。</p>
<br>

<h2><em>lineTo()</em>：</h2>
<p><em>lineTo()</em> 是畫直線的方法，它會依據前一個繪圖路徑（線條、曲線或 moveTo 錨點）的終點座標作為接續起點，在與自身設定的座標值產生直線。</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="javascript">lineTo(x, y);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="javascript">var canvas = document.getElementById('t1');
var ctx = canvas.getContext('2d');

ctx.beginPath();
ctx.moveTo(20, 20);
ctx.lineTo(100, 100);
ctx.closePath();
ctx.stroke();</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="ydrOBJ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-8">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ydrOBJ/">
    canvas-learn: path-8</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>設置複數的 <em>moveTo()</em> 座標並畫線就可以實現複雜多樣的圖形：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="ZdZWLy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-9">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ZdZWLy/">
    canvas-learn: path-9</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2><em>arc()</em>：</h2>
<p>畫弧其實有 <em>arc()</em> 與 <em>arcTo()</em> 兩種方法，<em>arc()</em> 主要用來繪製圓形或部分圓，<em>arcTo()</em> 則偏向建立兩切線之間的弧線，由於後者比較複雜故暫且按下不談，這裡僅先說說 <em>arc()</em> 的部分，它的參數寫法長這樣：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="javascript">arc(x, y, radius, startAngle, endAngle, anticlockwise);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>用一張簡表介紹這些參數分別是指什麼：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">參數</span>
        <span class="t-flex2">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">x / y</span>
        <span class="t-flex2">圓心座標點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">radius</span>
        <span class="t-flex2">半徑</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">startAngle</span>
        <span class="t-flex2">弧形曲線上的起點的弧度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">endAngle</span>
        <span class="t-flex2">弧形曲線上的終點的弧度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">anticlockwise（或稱 counterclockwise）</span>
        <span class="t-flex2">true 逆時針【預設值】 / false 順時針</span>
    </div>
</div>
<p>例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="javascript">var canvas = document.getElementById('t1');
var ctx = canvas.getContext('2d');

ctx.beginPath();
ctx.arc(150, 150, 50, 0, 180, true);
ctx.stroke();</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="JQVRpN" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-10">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JQVRpN/">
    canvas-learn: path-10</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
</p>
</code>

<p>關於弧度角的概念可以參考下圖：</p>
<figure>
    <img src="images/pic/html/canvas-arc.jpg">
</figure>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="NZmbpG" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-11">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/NZmbpG/">
    canvas-learn: path-11</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>（如果要畫完整圓形，建議可以直接取用實作範例中的第二種寫法。）</p>
<p>所以如果要用 <em>arc()</em> 繪製圓形，我們只要把起始角弧度設為 <em>0</em>，結束角度設為 <em>2*Math.PI</em> 即可。</p>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes" target="_blank">繪製圖形</a></li>
    <li><a href="http://caibaojian.com/html5-canvas-arc.html" target="_blank">使用HTML5 Canvas arc()绘制圆形/圆环</a></li>
    <li><a href="http://www.w3school.com.cn/tags/canvas_arc.asp" target="_blank">W3school HTML5 canvas arc() 方法</a></li>
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