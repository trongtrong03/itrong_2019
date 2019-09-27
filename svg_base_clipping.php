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
                        <time>2019-06-09</time>
                        <h1>Learn13-- 剪裁（Clipping）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>本篇「剪裁」（Clipping）與下一篇要介紹的功能「遮色片」（Masking）都是繪圖軟體中很實用的功能，它們的操作方法與填色漸層相似，都是先透過宣告定義檔 <em>&lt;defs&gt;</em>，把要實現的內容建立起來後，再將目標圖形去指向它就大功告成了。</p>
<p>在定義檔（<em>&lt;defs&gt;</em>）中，剪裁功能的元素標籤為 <em>&lt;clipPath&gt;</em>，將剪裁用的圖形編寫進去，假設你設定該圖形為三角形，那麼指向這個三角形定義檔的目標圖形就會被剪裁為三角形。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;clipPath id="idName"&gt;
            &lt;!-- 剪裁圖形 --&gt;
        &lt;/clipPath&gt;
    &lt;/defs&gt;
    &lt;rect clip-path="url(#idName)" fill="#F00"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>看完了用法，接著來實地練習一下，下方的練習中我們將採對照的方式會更容易理解。</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="PrqoNZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: clipping-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PrqoNZ/">
    SVG-learn: clipping-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>首先看左邊，我們先將 &lt;defs&gt; 裡 &lt;clipPath&gt; 定義的圖形拉出來，並設置在第一層，這樣就比較好理解它與剪裁目標的重疊位置。<br>
右側則是剪裁目標（正方形）指向定義檔指定 ID，得到正方形僅保留重疊部分，其他未重疊區域通通被剪裁的結果。</p>
<p>有趣的是，<em>&lt;clipPath&gt;</em> 內部還可以使用其他剪裁語法，這時可以用 <em>&lt;use&gt;</em> 元素，顧名思義，就是在 <em>&lt;clipPath&gt;</em> 裡頭去使用指定的 ID 物件，語法長這樣：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;clipPath&gt;
             &lt;path id="shapeIdName" /&gt;
        &lt;/clipPath&gt;
        &lt;clipPath id="idName"&gt;
            &lt;use xlink:href="#shapeIdName" /&gt;
        &lt;/clipPath&gt;
    &lt;/defs&gt;
    &lt;rect clip-path="url(#idName)" fill="#F00"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="VJLvZN" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: clipping-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/VJLvZN/">
    SVG-learn: clipping-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>By the way，如果 <em>&lt;use&gt;</em> 指向的圖形物件本體做了修改，那麼被剪裁的目標圖形也會同步跟著修改。</p>
<p>當然，<em>&lt;use&gt;</em> 元素不僅僅用在剪裁上而已，它算是個獨立存在，在一般 SVG 圖形場合中也可以使用，例如：</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="OeVygR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: clipping-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/OeVygR/">
    SVG-learn: clipping-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>這邊需要補充一點，若在 <em>&lt;use&gt;</em> 裡設定的屬性是原本物件就已經存在的屬性，那麼 <em>&lt;use&gt;</em> 的屬性參數是「不會」覆蓋過去的，呈現的圖形效果仍然會以原本指向物件的參數為主。</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="GbJpEo" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: clipping-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/GbJpEo/">
    SVG-learn: clipping-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>得証。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-09-clipping-masking.html" target="_blank">SVG 研究之路 (9) - Clipping and Masking</a></li>
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Element/use" target="_blank">MDN &lt;use&gt;</a></li>
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