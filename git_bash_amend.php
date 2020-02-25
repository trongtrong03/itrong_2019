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
                        <time>2019-10-20</time>
                        <h1>Notes20-- 修改 Commit 記錄（--amend）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>如果要修改已提交（commit）的版本記錄名稱，可以使用 <em>--amend</em> 指令，然而要注意的是，<em>--amend</em> 僅能編輯最後（近）一次的提交紀錄而已，如果要修改過去某一個版本的記錄，得使用 <em>rebase</em> 指令。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git commit --amend -m "名稱"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>那麼具體來說要如何操作呢？我們拿以下的例子作說明。</p>
<figure>
    <img src="images/pic/git/bash-amend-01.jpg">
</figure>
<p>假設提交記錄 <em>C44444</em> 是我們輸入錯誤的版控名稱，正確應為 <em>C4</em> 才對，此時我們只要在 <em>git commit --amend -m</em> 後方填入欲修改的名稱即可。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git commit --amend -m "C4"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>讓我們用 <em>log</em> 指令再次檢視 <em>commit</em> 日誌，會發現最新一筆提交記錄的名稱確實更改為 <em>C4</em> 了...</p>
<figure>
    <img src="images/pic/git/bash-amend-02.jpg">
</figure>
<p>然而，眼尖的你或許已經發現有些端倪──</p>
<figure>
    <img src="images/pic/git/bash-amend-03.jpg">
</figure>
<p>象徵該筆提交 Git 版控記錄的 SHA-1 值竟然不一樣了，我們都知道，SHA-1 值相當於該提交記錄的身分證，是為唯一值，所以與其說是改名，不如說 <em>amend</em> 這個指令是給目前的檔案重新進行一次新的提交，至於原本最後一筆記錄則隱藏於歷史的洪流當中。</p>
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