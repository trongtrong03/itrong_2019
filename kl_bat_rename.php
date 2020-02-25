<!doctype html>
<html class="pages res view">
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
                        <h1>作業系統：做一個簡易的批次更改副檔名功能執行程式</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p class="step">
    <span>Step01. 開啟記事本</span>
    <span>輸入「rename *.html *.php」（假設今天要將所有副檔名是 .html 的檔案更改為 .php）。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">rename *.html *.php</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>
<p class="step">
    <span>Step02. 儲存檔案為 .bat 格式</span>
    <span>自行命名檔案名稱，並將副檔名定義為 .bat 格式。</span>
</p>
<figure>
    <img src="images/pic/knowledge/bat-rename-1.jpg">
    <figcaption>更改副檔名時系統會跳出警告視窗，請按下「是」。</figcaption>
</figure>
<br>
<p class="step">
    <span>Step03. 將本 bat 檔置入要批次處理檔案的資料夾內。</span>
    <span>bat 檔與要更改副檔名的檔案們必須都放在同一個資料夾裡。</span>
</p>
<figure>
    <img src="images/pic/knowledge/bat-rename-2.jpg">
</figure>
<br>
<p class="step">
    <span>Step04. 點擊 bat 檔執行指令。</span>
    <span>執行 bat 檔案，資料夾內所有 .html 檔案便會自行更改為 .php 格式。</span>
</p>
<figure>
    <img src="images/pic/knowledge/bat-rename-3.jpg">
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