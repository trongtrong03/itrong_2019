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
                        <time>2016-12-18</time>
                        <h1>Sass：把背景圖片寫在 Sass 檔案裡（inline-image）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>透過 sass 的 <em>inline-image</em> 語法，可使 css 自動將圖片轉寫成程式碼（data64 編碼），即便日後失去圖片來源，網頁依舊能顯示已被編碼的圖片。</p>
<h3 class="sass"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">background: inline-image('影像路徑')</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
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