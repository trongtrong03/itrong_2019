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
                        <time>2019-09-27</time>
                        <h1>Notes05-- 查閱提交的歷史記錄（log）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>一個專案經過多次版控會產生許多筆提交（commit）記錄，或多或少會需要檢視過往的提交歷史記錄，以進行其他操作，查看歷史記錄最基本的指令就是 <em>git log</em> 了。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git log</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-log-01.jpg">
    <figcaption>git log 呈現的訊息。</figcaption>
</figure>
<p>單純的 <em>git log</em> 指令除了顯示 commit 的名稱外，還會揭露單筆提交記錄的三項資訊，分別是「SHA-1 碼」、「作者」和「日期」。後兩者想必不需要特別解釋，「SHA-1 碼」指的是 commit 單字後方那一段由 Git 隨機產生的字串，SHA 全名叫「security hash algorithm」，翻譯成中文意思是「安全雜湊演算法」（SHA-1 是其中一種），經過計算後的結果是由 40 個十六進位的數字組成，用來作為 Git 裡所有物件的編號。</p>

<p>當提交記錄越多，<em>git log</em> 要顯示的資訊也就越長，很容易產生閱讀困難，倘若只是要單純看一下專案目前大略的提交記錄，則可以使用以下這個指令：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git log --oneline</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-log-02.jpg">
    <figcaption>git log --oneline 呈現的訊息。</figcaption>
</figure>
<p><em>--oneline</em> 就是用一行呈現的意思，從輸出結果可以看出每一筆 log 記錄只顯示 commit 名稱與 SHA-1 的前七碼（通常如果要用到 SHA-1 進行 Git 進階操作，七碼也夠用了），整體閱讀也輕鬆容易許多。</p>
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