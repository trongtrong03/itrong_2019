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
                        <time>2019-06-11</time>
                        <h1>Learn12-- 文字（Text） ● 其二：tspan 與 textPath</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在上一篇學習筆記裡，已經粗略演練過 SVG <em>&lt;text&gt;</em>的一些基本屬性的語法，可是除了陣列操作外，其餘屬性都是針對包覆在 <em>&lt;text&gt;</em> 的整行文字做調整，假設今天只有其中一部分的文字要呈現不同的樣式，那麼我們就會需要 <em>&lt;tspan&gt;</em> 這個元素標籤了，而本篇將對其及 <em>&lt;text&gt;</em> 另一個子元素 <em>&lt;textPath&gt;</em> 一塊兒列入記錄目標。</p>
<h2><em>&lt;tspan&gt;</em>：</h2>
<p><em>&lt;tspan&gt;</em> 看起來就像是「text span」的縮寫，事實上，它在 <em>&lt;text&gt;</em> 裡扮演的角色，與 HTML 的 <em>&lt;span&gt;</em> 元素還真有幾分類似，我們可以在 <em>&lt;text&gt;</em> 裡面增加多個 <em>&lt;tspan&gt;</em> 元素，利用其與 <em>&lt;text&gt;</em> 具有相同屬性值的特性，達到字串裡部分文字呈現獨自樣式細節的目標。<br>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;text&gt;
        &lt;tspan&gt;字串1&lt;/tspan&gt;
        &lt;tspan&gt;字串2&lt;/tspan&gt;
        &lt;tspan&gt;...&lt;/tspan&gt;
    &lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="ZdExbM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-9">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ZdExbM/">
    SVG-learn: text-9</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>每一個 <em>&lt;tspan&gt;</em> 都是獨立的元素，彼此不會受到對方屬性的影響，假設和父階層 <em>&lt;text&gt;</em> 用到相同屬性，則會以 <em>&lt;tspan&gt;</em> 本身的參數為優先值，可見下例：</p>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="xoxWXK" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-10">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/xoxWXK/">
    SVG-learn: text-10</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>會發現第一個 <em>&lt;tspan&gt;</em> 的填色（<em>fill="#F00"</em>）會覆蓋掉 <em>&lt;text&gt;</em> 的 <em>fill="#CCC"</em> 設定值。</p>
<br>

<h2><em>&lt;textPath&gt;</em>：</h2>
<p><em>&lt;textPath&gt;</em> 可以畫出一條路徑，讓文字隨著路徑的軌跡羅列呈現，它的概念與學 <em>fill</em> 漸層很像，必須先通過宣告一個定義檔（<em>&lt;defs&gt;</em>），定義好路徑形狀後，再讓要跟隨的文字去指向該定義檔即可，語法為下：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;path id="demo" d="M0 50 C150 150 100 -50 300 50" stroke="#000" /&gt;
    &lt;/defs&gt;
    &lt;text x="20" y="20"&gt;
        &lt;textPath xlink:href="#demo"&gt;iTrong work studio&lt;/textPath&gt;
    &lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>比較需要注意的是，<em>fill</em> 的漸層檔指向是直接在其參數值導入連結（<em>fill="url(ID)"</em>），畢竟 <em>fill</em> 本身是屬性，而 <em>&lt;textPath&gt;</em> 是元素，它要利用 <em>xlink:href</em> 這個屬性來指名要套用的定義檔 ID 名稱。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="LKYdoR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-11">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/LKYdoR/">
    SVG-learn: text-11</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>既然都提到填色的漸層，那就順便再複習指令，並結合這次所學的文字路徑，實作一個填滿漸層色的路徑文字吧：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="zVYjKq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-12">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/zVYjKq/">
    SVG-learn: text-12</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>另外，<em>&lt;textPath&gt;</em> 還有一個 <em>startOffset</em> 屬性，透過百分比來設置文字在路徑軌跡上的起始位置：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="wLvjdR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-13">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/wLvjdR/">
    SVG-learn: text-13</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>以上就是 SVG 文字的部分基本學習記錄，之後若接觸到更多進階技巧，會再陸續分篇來介紹。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-08-text.html" target="_blank">SVG 研究之路 (8) - text 文字</a></li>
    <li><a href="https://medium.com/@yurenju/svg-text-%E7%B0%A1%E4%BB%8B%E8%88%87%E7%AF%84%E4%BE%8B-665a011b5a48" target="_blank">SVG Text 簡介與範例</a></li>
    <li><a href="https://www.w3cplus.com/svg/svg-text-tspan-element.html" target="_blank">如何使用tspan元素给SVG文本添加样式、定位</a></li>
    <li><a href="https://segmentfault.com/a/1190000009293590" target="_blank">SVG之text</a></li>
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