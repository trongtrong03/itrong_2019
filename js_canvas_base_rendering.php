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
                        <time>2019-06-23</time>
                        <h1>Learn02-- 渲染環境（rendering context）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>一張固定大小的 <em>&lt;canvas&gt;</em> 畫布裡，通常會有一或多個渲染環境（rendering context），我們需要透過設置渲染環境，始能開始進行畫作，不同環境（context）會提供不同的渲染模式，例如 WebGL 使用 OpenGL ES 的 3D 環境，一般教學多半都是從 2D 繪圖開始學起，所以筆者從善如流，亦從 2D 作為渲染環境的起始設定。</p>
<p>渲染環境的宣告方式為：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="javascript">var canvas = document.getElementById('idName');
var ctx = canvas.getContext('2d');</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p><em>&lt;canvas&gt;</em> 畫布一開始為空白，在程式腳本設置渲染環境後開始畫圖，畫布才會顯現影像出來，渲染環境的方法為 <em>getContext()</em>，這個方法輸入的參數只有渲染環境類型：<em>2d</em> 或是 <em>webgl</em>。</p>
<p>至於第一行宣告則是用來取得 <em>&lt;canvas&gt;</em> 標籤的 ID 值，如此一來才知道該畫布的渲染環境是什麼。</p>
<br>
<p>現在我們就可以開始在畫布上進行繪圖了，以下先來牛刀小試一番：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;canvas id="idName" width="300" height="300"&gt;&lt;/canvas&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="javascript">var canvas = document.getElementById('idName');
var ctx = canvas.getContext('2d');

ctx.fillStyle = "#000";
ctx.fillRect (10, 10, 200, 200);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>（有關下方圖形繪製的方法在之後文章會慢慢學習記錄。）</p>
<p>以上，這樣就能畫出一個簡單的黑色正方形了，可以看以下實作結果：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="dBaNLZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: rendering context">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/dBaNLZ/">
    canvas-learn: rendering context</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2>支援性檢查：</h2>
<p>在前篇基礎介紹中，有簡略提到瀏覽器不支援 <em>&lt;canvas&gt;</em> 下顯示替代內容的相關操作，而 Javascript 利用檢查 <em>getContext()</em> 方法作到這點，語法為下：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="javascript">var canvas = document.getElementById('idName');

if (canvas.getContext){
    var ctx = canvas.getContext('2d');
    // 繪製圖形的程式碼
} else {
    // 瀏覽器不支援時的替代內容
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/API/Canvas_API/Tutorial/Basic_usage" target="_blank">Canvas 基本用途</a></li>
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