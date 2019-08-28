<!doctype html>
<html class="pages css view">
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
                        <time>2019-08-22</time>
                        <h1>背景斜切角（linear-gradient）與內圓角（radial-gradient）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>斜切角：</h2>
<p>單邊斜切角的基本寫法：</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    background: linear-gradient(角度, transparent 尺寸, 背景色 0%);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    background: linear-gradient(-45deg, transparent 5%, #666 0%);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>其實用法就是直接使用線性漸變效果（background-linear）的公式，設置 <em>transparent</em> 這個透明的參數並給予範圍值就能達成效果。</p>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="YbLzVd" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css3: 斜切角-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/YbLzVd/">
    css3: 斜切角-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>多邊斜角的寫法：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">div {
    background: linear-gradient(-45deg, transparent 3rem, #666 0) right, 
                linear-gradient(45deg, transparent 3rem, #999 0) left;
    background-size: 50% 100%;
    background-repeat: no-repeat;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>增加 <em>background-size: 50% 100%;</em> 屬性讓兩個漸層各佔一半範圍，並透過 <em>background-repeat: no-repeat;</em> 來解決背景重複的問題。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="xNjGXR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css3: 斜切角-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/xNjGXR/">
    css3: 斜切角-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>最後是四邊都是斜角的寫法：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">div {
    background: linear-gradient(135deg, transparent 5%, #333 0) top left, 
                linear-gradient(-135deg, transparent 5%, #666 0) top right,
                linear-gradient(45deg, transparent 5%, #999 0) bottom left,
                linear-gradient(-45deg, transparent 5%, #AAA 0) bottom right;
    background-size: 50% 50%;
    background-repeat: no-repeat;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="mYLJqx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css3: 斜切角-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/mYLJqx/">
    css3: 斜切角-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<br>

<h2>圓內角：</h2>
<p>公式和斜切角很像，只是將線性（linear）換成曲線（radial）漸變。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">div {
    background: radial-gradient(circle at top left, transparent 5%, #333 0) top left,
                radial-gradient(circle at top right, transparent 5%, #666 0) top right,
                radial-gradient(circle at bottom left, transparent 5%, #999 0) bottom left,
                radial-gradient(circle at bottom right, transparent 5%, #AAA 0) bottom right;
    background-size: 50% 50%;
    background-repeat: no-repeat;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="EzLVav" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css3: 圓內角">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/EzLVav/">
    css3: 圓內角</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.w3cplus.com/css3/css-secrets/cutout-corners.html" target="_blank">CSS秘密花园：斜切角</a></li>
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