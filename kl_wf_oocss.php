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
                        <time>2016-11-25</time>
                        <h1>什麼是 OOCSS？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>OO = Object Oriented</p>
<p>OOCSS 不是任何一個新的程式語言或 CSS 框架，僅僅不過是一種新的書寫方法。</p>
<p>兩個原則：<br>Separate structure and skin.<br>結構與樣式分離。</p>
<p>核心價值：<br>提升 CSS 的靈活性和可重用性。</p>
<p>優點：</p>
<ol class="decimal">
    <li>減少 CSS 代碼。</li>
    <li>具有清潔的 HTML 標記、有語意的類名、邏輯性強的層次關係。</li>
    <li>語意標記有助於 SEO。</li>
    <li>優化速度提升，因為許多 CSS 模組被重複使用，會加快載入速度。</li>
    <li>HTML 的 CLASS 標籤更彈性化，可大量使用模組，且不影響其他模組。</li>
    <li>在大型網站上效能尤為明顯。</li>
</ol>
<p>缺點：</p>
<ol class="decimal">
    <li>需要強大的規劃能力，否則維護上將會有難以想像的麻煩。</li>
    <li>多人共用體系下，最好有說明文件註記模組的功用。</li>
    <li>在小型網站開發上效能可能不彰。</li>
</ol>
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