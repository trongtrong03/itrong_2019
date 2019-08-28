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
                        <time>2019-06-25</time>
                        <h1>Learn04-- 基本繪圖 ● 其二：路徑（Path）-上</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Canvas 繪製圖形只有矩形（Rect）一種，不像 SVG 除矩形外，還有圓形（Circle）、橢圓形（Ellipse）、多邊形（Polygon）...等元素可以使用，若要在 Canvas 畫布裡繪製其他圖形，就需要借助路徑（Path）的力量，畫出我們理想的形狀。</p>
<p>開始要繪製路徑的時候，我們需要先呼叫 <em>beginPath()</em> 這個方法，來產生一個新的路徑，接著下達路徑指令，結束時添上 <em>closePath()</em> 方法來閉合圖形，例如：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="javascript">var canvas = document.getElementById('idName');
var ctx = canvas.getContext('2d');

ctx.beginPath();

// 路徑指令

ctx.fill();</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>眼尖的你會注意到上例結尾用的是 <em>fill()</em> 而非 <em>closePath()</em>，根據官方文件的解釋，當程式腳本呼叫 <em>fill()</em>，任何開放的圖形都會自動閉合，所以就不需要再呼叫 <em>closePath()</em> 了．．．更詳細地說，<em>fill()</em> 方法會在路徑最後一個點與開始的點之間建立一條連線，以關閉該路徑，並且填充該路徑。<br>
既然提到可以用 <em>fill()</em> 取代 <em>closePath()</em>，那麼 <em>stroke()</em> 是不是也可以？<br>
以下我們就針對這三個結束路徑的方法來作實例練習，便能更進一步看出差異：</p>

<h2><em>closePath()</em>：</h2>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="vqPNdm" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/vqPNdm/">
    canvas-learn: path-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>雖然路徑繪製確實結束了，但因為沒有填色也沒有邊框，所以它單純就只是個錨點路徑，概念近似於 Adobe Illustrator 的路徑工具。所以通常 <em>closePath()</em> 指令下方至少還會再加上 <em>stroke()</em> 結尾。</p>
<br>

<h2><em>stroke()</em>：</h2>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="OeqMyB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/OeqMyB/">
    canvas-learn: path-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>很明顯可以看出，若單純只用 <em>stroke()</em> 指令，是不會產生閉合路徑的，需要搭配 <em>closePath()</em> 才能做到路徑閉合的效果，如下：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="orVxWV" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/orVxWV/">
    canvas-learn: path-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2><em>fill()</em>：</h2>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="gNEPaj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/gNEPaj/">
    canvas-learn: path-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>因為 <em>fill()</em> 會自動將路徑閉合填色的緣故，所以可以不需要下 <em>closePath()</em>，但實際上它也不是真的在路徑終點和起點之間建立連線，如果我們給這個填色路徑加上邊框...</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="XLGdVB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/XLGdVB/">
    canvas-learn: path-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>加上邊框就會發現路徑起點終點之間的錨點並沒有真正連接彼此，所以今天繪製的路徑若需要設置邊框（<em>stroke()</em>），那麼 <em>closePath()</em> 就必須存在，並且要在 <em>stroke()</em> 之前先宣告閉合。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="xoBVWm" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: path-6">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/xoBVWm/">
    canvas-learn: path-6</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>下一篇將會繼續聚焦 Path，學習繪製路徑的 API 指令。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes" target="_blank">繪製圖形</a></li>
    <li><a href="http://www.runoob.com/tags/canvas-stroke.html" target="_blank">HTML canvas stroke() 方法</a></li>
    <li><a href="http://www.runoob.com/jsref/met-canvas-fill.html" target="_blank">HTML canvas fill() 方法</a></li>
    <li><a href="https://www.youtube.com/watch?v=_isKwzD4xm8" target="_blank">網頁前端工程進階：Canvas 繪圖 - 基本教學 By 彭彭</a></li>
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