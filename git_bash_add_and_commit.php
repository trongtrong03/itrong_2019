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
                        <h1>Notes02-- 建立 Git 版本庫（init）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>本篇將介紹如何新增檔案（做提交的示範用），以及如何將檔案加入至暫存區域（Staging area），並提交至版本儲存庫（Repository）內。</p>
<br>
<p class="step">
    <span>Step01. 新增檔案（示範用，也可以直接拉進已經完成且準備提交的檔案到資料夾內）。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="dos">echo 文字內容 > 文件檔案</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="dos">echo Hello World > test.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-add-and-commit-01.jpg">
</figure>
<p>可以使用 <em>type</em> 指令取得文件的內容：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="dos">type test.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>得到的回應會是「Hello World」。</p>

<p class="step">
    <span>Step02. 將檔案加入（add）至暫存區域（Staging Area）。</span>
</p>
<p class="mb-0">如果有安裝 TortoiseGit 這類方便不熟悉指令使用者直覺操作 Git 的 GUI，在檔案控管過程中，通常會賦予檔案可識別狀態的輔助圖示，如下圖：</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-add-and-commit-02.jpg">
</figure>
<p class="mb-0">這種直觀的圖示大大地減少使用者搞不清楚狀態的可能性，假如沒有安裝相關 GUI 程式來輔助控管，我們可以勤用 <em>git status</em> 指令，查看目前檔案版控的狀態。</p>
<figure>
    <img src="images/pic/git/bash-add-and-commit-03.jpg">
    <figcaption>尚未追蹤（加入暫存區域）的檔案狀態為紅色。</figcaption>
</figure>

<p class="mb-0">將檔案加入暫存區域內追蹤的指令為：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git add .</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>此時再透過 <em>git status</em> 觀察，檔案狀態顏色已變更為綠色。</p>
<figure>
    <img src="images/pic/git/bash-add-and-commit-04.jpg">
    <figcaption>已追蹤的檔案狀態為綠色。</figcaption>
</figure>

<p class="step mb-0">
    <span>Step03. 提交（commit）檔案至版本儲存庫（Repository）。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="shell">$ git commit -m "日誌標題"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="shell">$ git commit -m "C1"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>確認已無尚未追蹤的檔案，則 <em>git status</em> 會告知已經沒有檔案需要提交的英文訊息。</p>
<figure>
    <img src="images/pic/git/bash-add-and-commit-05.jpg">
</figure>
<br>
<p>補充，若是只想加入某個檔案至暫存區域，則在 <em>git add</em> 後方輸入檔案的名稱與類型。</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area07" class="code-text"><code class="shell">$ git add demo.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
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