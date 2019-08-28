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
                        <time>2019-08-22</time>
                        <h1>超連結（&lt;a&gt;）HTML5 的新增屬性</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>將連結文字轉為下載型態，並將檔名更改為自行命名的 filename。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;a href="路徑" download="自定義名稱"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>舉例：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;a href="img_1.jpg" download="可愛阿比"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<code>
    <a href="images/pic/img_1.jpg" download="可愛阿比">Download</a>
</code>
<br>
<p>另外還有一種是針對媒體檔案的用法：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;a media="value"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="http://www.w3school.com.cn/tags/att_a_media.asp" target="_blank">w3school</a></li>
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