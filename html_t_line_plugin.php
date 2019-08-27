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
                        <h1>LINE 條碼轉為網址與傳送分享按鈕</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>行動條碼轉網址：</h2>
<p>用網頁超連結的方式，透過行動條碼加入 LINE 好友，請參照以下流程：</p>
<p class="step">
    <span>Step01. 點選個人資料->行動條碼。</span>
</p>
<p class="step">
    <span>Step02. 更新行動條碼。</span>
</p>
<p class="step">
    <span>Step03. 儲存->公開。</span>
</p>
<p class="step">
    <span>Step04. 取得連結網址。</span>
</p>
<br>
<h2>傳送分享按鈕：</h2>
<p>分享功能僅限行動裝置才有作用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;a href="http://line.naver.jp/R/msg/text/?要分享的文字或網址"&gt;&lt;img src="按鈕圖檔的網址"&gt;&lt;/a&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>另外補充官方提供的圖示網址：</p>
<p>
    <span><a href="http://media.line.me/img/button/ja/82x20.png" target="_blank">http://media.line.me/img/button/ja/82x20.png</a></span>
    <span><a href="http://media.line.me/img/button/ja/20x20.png" target="_blank">http://media.line.me/img/button/ja/20x20.png</a></span>
    <span><a href="http://media.line.me/img/button/ja/30x30.png" target="_blank">http://media.line.me/img/button/ja/30x30.png</a></span>
    <span><a href="http://media.line.me/img/button/ja/40x40.png" target="_blank">http://media.line.me/img/button/ja/40x40.png</a></span>
    <span><a href="http://media.line.me/img/button/ja/36x60.png" target="_blank">http://media.line.me/img/button/ja/36x60.png</a></span>
</p>
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