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
                        <h1>Learn03-- 基本繪圖 ● 其一：矩形（Rect）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>&lt;canvas&gt;</em> 畫布網格的概念與 SVG 相同，每一格網格都代表一個像素單位（px），基本上所有元素的定位皆以其左上角的 x、y 座標作原點。知道網格與元素之間的關係後，就可以開始進入 Canvas 繪製圖形的教程了。</p>
<p>首先從最基本的矩形開始，與之相關的繪圖方法有三個，分別是：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="javascript">// 畫出一個填滿的矩形
fillRect(x, y, width, height);

// 畫出一個矩形的邊框
strokeRect(x, y, width, height);

// 清除指定矩形區域內的內容，使其變為全透明
clearRect(x, y, width, height);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>雖然這三個方法產生的結果類型不同，但都接受一樣的參數，設置 <em>x</em>、<em>y</em> 值作為矩形左上角的原點座標，<em>width</em>、<em>height</em> 則代表該矩形的寬度與高度。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="LKaPbq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: rect">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/LKaPbq/">
    canvas-learn: rect</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>幾個要注意的地方是：<br>
1. 繪圖方法採駝峰式命名法，需認明方法名稱大小寫的區別。<br>
2. 程式腳本越後面（下方）的圖形在畫布裡的圖層順序會越靠前。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes" target="_blank">繪製圖形 </a></li>
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