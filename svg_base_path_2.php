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
                        <h1>Learn06-- 路徑（Path） ● 其二：指令介紹-點與直線</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>承襲上篇 <em>&lt;path&gt;</em> 的指令列表介紹，本篇將對這些指令做實例語法的記錄。</p>
<br>
<h2><em>M</em> / <em>m</em>（move to）：</h2>
<p>本指令用來設定起始點的座標，不管你的路徑要怎麼畫，都一定會從起始點開始，因此一個使用 <em>&lt;path&gt;</em> 繪製的圖形肯定會有 <em>M</em> 這個指令，它的參數也只有 <em>x</em>、<em>y</em> 兩個值。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M0 0" stroke="#F00"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="MdxrzR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MdxrzR/">
    SVG-learn: path-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>起始點只是一個「點」，所以上例實作中看不到任何形狀是正常的。如果有使用過 Illustrator 或 Photoshop 之類繪圖軟體經驗的人應該就會知道，使用路徑工具點擊的第一個錨點是沒有形狀畫面可以看的，SVG 路徑的概念便與其相同。</p>
<br>

<h2><em>L</em> / <em>l</em>（line to）：</h2>
<p><em>L</em> 可以從當前的點畫直線到下一個指定的座標，它的參數同樣只有 <em>x、y</em> 兩個值。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M0 0 L100 100" stroke="#F00"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>如果要連接多一點的線段，只要持續增加 <em>L</em> 參數並設置座標就可以了。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="byZLEQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/byZLEQ/">
    SVG-learn: path-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2><em>H</em> / <em>h</em>（horizontal line to）：</h2>
<p><em>H</em> 可將目前的點水平畫直線到另一個 x 座標，因為是水平直線，所以參數只有一個 <em>x</em> 值。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M50 50 H200" stroke="#F00"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="MdxQXK" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MdxQXK/">
    SVG-learn: path-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2><em>V</em> / <em>v</em>（vertical line to）：</h2>
<p><em>V</em> 指的是縱向的垂直線，雖然和 <em>H</em> 相反，但概念是一樣的，<em>V</em> 只有 <em>y</em> 值。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M50 50 V200" stroke="#F00"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="QRomzg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/QRomzg/">
    SVG-learn: path-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2><em>Z</em> / <em>z</em>（closepath）：</h2>
<p><em>Z</em> 代表的是路徑的終點，它沒有任何參數，並且放置在 <em>d</em>（data）屬性的最末端，一旦設置 <em>Z</em>，路徑目前線段將會直接以直線連回起點。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M10 10 H100 V100 Z" stroke="#F00" fill="transparent"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="JqzBya" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JqzBya/">
    SVG-learn: path-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Paths" target="_blank">MDN - Paths</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-04-path-1.html" target="_blank">SVG 研究之路 (4) - Path 基礎篇</a></li>
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