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
                        <time>2020-02-07</time>
                        <h1>消除 iPhone 瀏覽器 input、textarea 內的陰影</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>如果用 iPhone 看網頁表單的輸入框（<em>&lt;input&gt;</em>、<em>&lt;textarea&gt;</em>），會發現輸入框有一層內陰影，如下圖：</p>
<figure>
    <img src="images/pic/css/ios-input-appearance-1.jpg">
    <figcaption>iPhone 瀏覽器。</figcaption>
</figure>
<p>實際上這層內陰影是可以通過 CSS3 消除的，語法也非常簡單：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">input,
textarea {
    -webkit-appearance: none;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>如此一來就能成功消除了內陰影。</p>
<figure>
    <img src="images/pic/css/ios-input-appearance-2.jpg">
    <figcaption>iPhone 瀏覽器。</figcaption>
</figure>
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