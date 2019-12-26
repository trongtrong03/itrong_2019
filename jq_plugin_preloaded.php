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
                        <time>2019-03-29</time>
                        <h1>預先載入影像（Preload Image）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://dreamerslab.com/demos/preload-images-with-jquery-preload-plugin" target="_blank">jQuery Preload Plugin</a></p>
<p>jQuery Preload 是一款極輕易使用的預先載入影像套件，預先載入影像可避免滑鼠滑過時才開始讀取背景圖，或是頁面需要讀取影像時才開始載入，暫時性的空白造成使用者瀏覽體驗不佳的情況。</p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="js/jquery.preload.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $.preload( '/影像路徑1',
        '/影像路徑2',
        '影像路徑...'
    );
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<ul class="refer">
    <li><a href="http://dreamerslab.com/demos/preload-images-with-jquery-preload-plugin" target="_blank">jQuery Preload Plugin Demo</a></li>
    <li><a href="http://dreamerslab.com/blog/tw/preload-images-with-jquery-preload-plugin/" target="_blank">用 jQuery Preload 預先載入圖片</a></li>
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