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
                        <time>2019-09-26</time>
                        <h1>Lesson04-- 查看檔案狀態（status）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>前一篇已有稍微介紹 <em>git status</em>，本篇將針對其對於檔案狀態的呈現再做更進一步的介紹。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git status</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p><em>git status</em> 主要就是用來觀看目前工作目錄內所有檔案的版控情形，他有以下四種呈現狀態：</p>
<p>1. project file：<br>
指的是已經加入版控且沒有被更改的檔案，這類型的檔案不會被 <em>git status</em> 指令給呈現出來。<br>
例如：</p>
<figure>
    <img src="images/pic/git/bash-status-01.jpg">
    <figcaption>系統給予沒有任何檔案要被提交的回饋。</figcaption>
</figure>

<p>2. untracked file：<br>
指的是所有新增且尚未加入追蹤（add）的檔案，若成功加入追蹤並提交（commit），就會變成 project file。</p>
<figure>
    <img src="images/pic/git/bash-status-02.jpg">
    <figcaption>尚未加入追蹤的檔案為紅色狀態。</figcaption>
</figure>

<p>3. modified file：<br>
任何已存在的 project file 內容一經修改，其狀態就會變更為 modified，提交後會再次變為 project file。</p>
<figure>
    <img src="images/pic/git/bash-status-03.jpg">
    <figcaption>與 untracked file 類似，但檔名前方多了 modified 字樣。</figcaption>
</figure>

<p>4. new file：<br>
當未追蹤的檔案一旦加入至暫存區域後，狀態就會變更為 new file，待完成提交之後會轉成 project file。</p>
<figure>
    <img src="images/pic/git/bash-status-04.jpg">
    <figcaption>加入至暫存區域的檔案狀態顏色為綠色。</figcaption>
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