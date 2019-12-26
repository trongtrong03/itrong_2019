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
                        <time>2018-09-07</time>
                        <h1>粒子特效（Particleground）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://jnicol.github.io/particleground/" target="_blank">Particleground</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://jnicol.github.io/particleground/js/jquery.particleground.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div id="particles"&gt;&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
$(document).ready(function() {
    $('#particles').particleground({
        dotColor: '#FFF',
        lineColor: '#FFF',
    });
});
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h2>參數一覽：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">dotColor: '#FFF',     // 網點的顏色。
lineColor: '#FFF',      // 網線的顏色。
minSpeedX: 0.1,     // X軸的動畫最小速度。
maxSpeedX: 0.7,     // X軸的動畫最大速度。
minSpeedY: 0.1,     // Y軸的動畫最小速度。
maxSpeedY: 0.7,     // Y軸的動畫最大速度。
directionX: 'center',   // 可以是 'center'，'left' 或者 'right' 之一。 'center' 表示點將從畫布的邊緣反彈。
directionY: 'center',   // 可以是 'center'，'up' 或者 'down' 之一。 'center' 表示點將從畫布的邊緣反彈。
density: 10000,         // 渲染密度，數值越小越密。
particleRadius: 7,      // 網點大小。
lineWidth: 1,       // 線寬。
curvedLines: false,     // 曲線，true 為使用，false 為不使用。
proximity: 100,     // 使網點之間連線的距離，數值越小則要越相近才會連線。
parallax: true,     // 是否啟用視差跟隨效果。
parallaxMultiplier: 5,      // 數值越小，視差跟隨的效果就越極端。</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="ywdxdZ" style="height: 480px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="jq: plugin-particleground">
          <span>See the Pen <a href="https://codepen.io/itrong/pen/ywdxdZ/">
          jq: plugin-particleground</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
          on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
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