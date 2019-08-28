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
                        <time>2016-11-21</time>
                        <h1>Facebook 社群套件</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><a href="https://developers.facebook.com/docs/plugins?locale=zh_TW" target="_blank">官方連結</a><br>提供分享、按讚、留言、名片貼...等外掛功能。</p>
<br>
<p>讓名片貼 RWD 化的語法：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">#fb-root { display: none; }
.fb_iframe_widget, .fb_iframe_widget span, .fb_iframe_widget span iframe[style] { width: 100% !important; }</code></pre>
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