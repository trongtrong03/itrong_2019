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
                        <time>2019-05-28</time>
                        <h1>Learn01-- 什麼是 SVG？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<figure>
    <img src="images/pic/html/svg-logo.png" style="margin: 0 auto;">
</figure>
<h2>基本介紹：</h2>
<p>Scalable Vector Graphics（以下簡稱 SVG）名為可縮放向量圖形，是一種在網頁進行視覺化向量繪圖的一項技術，它的概念最早可追溯至西元 1999 年，早期因為支援度的關係並未受到重視，但隨著瀏覽器與網頁技術日益純熟，SVG 已一躍成為網頁設計的主流技術之一。SVG 之所以這麼熱門，可歸功以下兩點：<br>
1. 補足 HTML 語法影像繪圖的不足，從簡單的幾何圖形，到複雜的任意路徑、填充樣式、座標轉換，甚至還可以做動畫，SVG 都可以像 HTML 格式一樣，透過標籤 <em>&lt;svg&gt;</em> 來實現。<br>
2. SVG 不單單只是一種影像的儲存格式，一旦影像可以透過標籤化來完成，也意味著導入程式的可能性越容易，進而達到網頁遊戲或視覺互動效果。</p>
<br>
<h2>與其它影像格式的差異：</h2>
<p>在網頁製作過程中，對於一些影像或特殊形狀的圖形處理方式，以往大多都是透過轉存成 .jpg、.png 或 .gif 之類的影像格式來呈現，雖然簡單方便，卻也無形增加瀏覽器讀取下載時的負擔，尤其是一張影像可能同時擁有預設及 Hover 狀態甚至更多，勢必也得匯出更多的影像達到效果，假設該圖形影像可以利用 SVG 來繪製，不但可以減少讀取消耗，或許更可以縮短作業時間。</p>
<p>此外，SVG 還有一個很關鍵的優勢，那就是其屬於向量格式，相較於其他點陣化格式的影像，無論如何縮放畫面，用 SVG 繪製的圖形永遠都不會失真，但點陣圖影像在瀏覽器畫面放大縮小時，往往會面臨鋸齒狀或影像模糊的問題。</p>
<p>然而，SVG 並非萬靈丹，假設影像畫面過於複雜，若執意使用 SVG 繪製，瀏覽器運算處理的時間將會大幅增加，這時候用點陣圖呈現仍舊是比較理想的作法。</p>
<br>
<h2>技術說明：</h2>
<p>SVG 主要支援以下幾種顯示物件：</p>
<ol class="decimal">
    <li>向量顯示物件，例如：矩形、圓形、多邊形、直線、曲線...等。</li>
    <li>嵌入式外部圖像，包括PNG、JPEG、SVG...等。</li>
    <li>文字物件</li>
</ol>
<p>SVG 格式是 XML 的一種，用文字編輯器開啟它，會發現內容就和一般網頁程式碼相同，都只是普通的文字檔案，所以可直接進行修改並瀏覽修改後的結果。<br>
以下是一個 SVG 檔案的內容範例：</p>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;circle cx="12" cy="10" r="5" fill="#f90"/&gt;
    &lt;circle cx="38" cy="10" r="5" fill="#f90"/&gt;
    &lt;circle cx="25" cy="26" r="10" fill="#f90"/&gt;
    &lt;rect x="15" y="15" width="20" height="10" fill="#FFF"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="rgqvNx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/rgqvNx/">
    SVG-learn1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
</code>
<br>

<h2>優缺分析：</h2>
<p>優點：</p>
<ol class="decimal">
    <li>檔案較小，除非用到影像照片。</li>
    <li>圖形為向量格式，畫面縮放不失真。</li>
    <li>圖形可讀，可直接使用文字編輯器修改。</li>
    <li>可實現多種濾淨效果。</li>
    <li>可生成動態圖形，達到互動效果。</li>
</ol>
<p>缺點：</p>
<ol class="decimal">
    <li>涉及動態效果可能會降低效能。</li>
    <li>若呈現細節過於複雜，檔案可能高於點陣圖影像。</li>
    <li>相較其他向量圖形格式，SVG 因為檔案採未壓縮方式儲存，檔案會比較大。</li>
</ol>
<br>
<h2>設計工具：</h2>
<p>常見繪製 SVG 圖形使用的工具有 Adobe Illustrator、Adobe Photoshop CC、Visio、Xmind8 及 CorelDRAW ...等。<br>
另外也有一款開源的免費、免安裝的線上工具，名稱為 <a href="https://github.com/SVG-Edit/svgedit" target="_blank">svgedit</a>，它將檔案上傳在 GitHub，方便開發者下載使用，若要直接線上工作，也可以點擊它的 <a href="https://svg-edit.github.io/svgedit/releases/latest/editor/svg-editor.html" target="_blank">Demo</a> 連結。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://zh.wikipedia.org/wiki/%E5%8F%AF%E7%B8%AE%E6%94%BE%E5%90%91%E9%87%8F%E5%9C%96%E5%BD%A2" target="_blank">可縮放向量圖形-維基百科</a></li>
    <li><a href="http://blog.infographics.tw/2015/06/introduction-to-svg-graphics-on-web/" target="_blank">網頁視覺化必備 － 可縮放向量圖 SVG 入門</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-01-intro.html" target="_blank">SVG 研究之路 (1) - 初探 SVG</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10200719" target="_blank">SVG-概述</a></li>
    <li><a href="https://www.itread01.com/content/1547265964.html" target="_blank">svg和canvas各自的優缺點</a></li>
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