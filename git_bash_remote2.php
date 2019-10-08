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
                        <time>2019-10-05</time>
                        <h1>Lesson15-- 遠端（remote）的相關指令</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>上一篇講到如何建立遠端儲存庫（repository），並使其與本機端目標專案建立連接的方法，除了文章後段提到的 <em>remote add</em> 與 <em>remote -v</em> 兩種指令外，本篇將繼續介紹其他與 <em>remote</em> 息息相關的指令，以應對管理遠端儲存庫時所需的各種需求。</p>

<h2>顯示所有的遠端儲存庫：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git remote</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-remote-04.jpg">
</figure>

<h2>顯示包含網址路徑的遠端儲存庫：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git remote -v</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-remote-05.jpg">
</figure>

<h2>顯示更詳細的遠端儲存庫資訊：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git remote show origin</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<figure class="mb-0">
    <img src="images/pic/git/bash-remote-06.jpg">
</figure>
<p>它將同時列出遠端儲存庫的 URL 位置和追蹤分支資訊。特別是告訴你如果你在 <em>master</em> 分支時用 <em>git pull</em> 時，會去自動抓取數據合併到本地的 <em>master</em> 分支。它也列出所有曾經被抓取過的遠端分支。</p>

<h2>新增遠端儲存庫：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git remote add origin 遠端儲存庫網址</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="shell">$ git remote add origin https://github.com/trongtrong03/demo.git</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>新增完後可以搭配 <em>remote -v</em> 指令來確認。</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-remote-07.jpg">
</figure>

<p>一個本地端儲存庫可以同時新增許多遠端連結，只要給予其不同的簡稱即可，例如下圖。</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-remote-08.jpg">
</figure>
<p>執行 <em>push</em> 或 <em>pull</em> 指令時，只要指定要接取的遠端簡稱即可。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="shell">$ git push origin3 master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<h2>移除遠端儲存庫：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="shell">$ git remote rm origin</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<figure class="mb-0">
    <img src="images/pic/git/bash-remote-09.jpg">
</figure>
<p>從範例圖中可以看到，我們移除了 <em>origin2</em> 與 <em>origin3</em>，最後用 <em>-v</em> 檢查只餘下 <em>origin</em> 這個遠端儲存庫的連接記錄。</p>

<h2>更改遠端儲存庫自定義簡稱：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="shell">$ git remote rename 原名 新名</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="shell">$ git remote rename origin itrong</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<figure class="mb-0">
    <img src="images/pic/git/bash-remote-10.jpg">
</figure>
<p>改完後用單純的 <em>git remote</em> 指令查看遠端連結代稱，確認原先「origin」已變更為「itrong」。</p>
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