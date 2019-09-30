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
                        <time>2017-05-05</time>
                        <h1>Lesson06-- 將檔案從暫存區返回工作目錄（reset）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>假設現在有已加入至暫存區域（Staging Area）的檔案，想要返回至工作目錄（Working Directory），可以使用 <em>reset</em> 指令。</p>

<p class="step">
    <span>Step01. 下圖是一個尚未加入至暫存區域的檔案。</span>
</p>
<figure>
    <img src="images/pic/git/bash-reset-01.jpg">
</figure>

<p class="step">
    <span>Step02. 將該檔案加入至暫存區域。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git add demo.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step03. 接著進行返回。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git reset</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>此時等待提交的檔案，又會變回未追蹤的狀態，這個步驟僅僅是將檔案自暫存區域中返回，並不會將檔案移除。</p>
<br>
<p>再來談談一些其他的...<br>既然有將檔案自暫存區域返回工作目錄的指令，我們可能會衍生出「檔案從版本儲存庫（Repository）返回至暫存區域」、「檔案從版本儲存庫返回至工作目錄」的想法，以下一一進行說明：</p>
<p>1. 檔案從版本儲存庫（Repository）返回至暫存區域（Staging Area）<br>很抱歉！沒有這個功能。</p>
<p>2. 檔案從版本儲存庫（Repository）返回至工作目錄（Working Directory）<br>由於檔案上傳到版本儲存庫後已經是提交的版本了，記得先前曾說過嗎？提交的檔案會被永久儲存在 .git 目錄裡，所以將版本儲存庫返回至工作目錄的說法，實際上就等同下載某一版本的資料至工作目錄內，而會這麼做通常是進行分支（<em>branch</em>）切換的時候，使用的指令則是 <em>checkout</em>，這部分日後再行介紹。</p>

<p><em>reset</em> 指令還有以下參數可以使用：<br>
放棄所有修改，回到上個 <em>commit</em> 完成後的狀態：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git reset --hard</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>回到最新一個 <em>commit</em> 版本：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git reset --hard HEAD</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>回到前一個 <em>commit</em> 版本：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="shell">$ git reset --hard HEAD^</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<p>回到前前一個 <em>commit</em> 版本：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="shell">$ git reset --hard HEAD^^</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<p>回到前前前一個 <em>commit</em> 版本：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="shell">$ git reset --hard HEAD~2</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<p>回復到 <em>commit</em> 提交前的狀態（<em>HEAD^</em> 代表前 1 次）：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="shell">$ git reset --soft HEAD^</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
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