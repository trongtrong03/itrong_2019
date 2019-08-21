<?php require_once 'include/_viewhead.php' ?>
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
                        <time>2019-08-17</time>
                        <h1>讓多個 Div 等高（table-cell）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>雖然 <em>div</em> 幾乎取代 <em>table</em> 標籤，成為 HTML 最主流的原始碼標籤，但是在模擬表格呈現上，並不若傳統 <em>table</em> 來的方便，例如要讓多個並排的 <em>div</em> 高度等高，所幸在 <em>display</em> 屬性中，有個 <em>table</em> 屬性可以模擬傳統 <em>table</em> 標籤的功用。</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">/* table 父階層 */
.table {  
    display: table; 
}  

/* tr 第二層 */
.row {
    display: table-row;
}

/* td , th 第三層 */
.cell-1,
.cell-2,
.cell-3 {
    display: table-cell; 
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="qqjONo" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="CSS-display-table-cell" class="codepen">See the Pen <a href="http://codepen.io/itrong/pen/qqjONo/">CSS-display-table-cell</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
</code>
<p>在 CSS3 已新增一種 <em>display: flex</em> 的屬性，除了更能減少標籤的使用數量，並有多樣的細部設定來達到表格的效果，在現今各家瀏覽器普遍支援 CSS3 的情況下，<em>table-cell</em> 已未必是取代表格寫法的首選。</p>
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