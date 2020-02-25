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
                        <time>2019-10-09</time>
                        <h1>Notes16-- 推送（push）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>除了本機端的版控外，遠端儲存庫的同步也是 Git 非常重要的一項備份環節，於 <a href="git_bash_remote.php" target="_blank">〈Learn14-- 設定遠端（remote）〉</a> 一文裡我們已經學會如何在 Github 建立專屬的遠端儲存庫，並與本機的目標專案進行連接，接下來我們只需下達 <em>push</em> 指令，就能將專案目錄裡的 Git 版控數據，同步備份至遠端上。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git push origin master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>從 Github 該遠端儲存庫的初始頁面中也能看到推送的指令提示：</p>
<figure>
    <img src="images/pic/git/bash-remote-02.jpg">
    <figcaption>最後一行。</figcaption>
</figure>

<p>此外，Push 指令還有一些操作方式：</p>
<h2>直接推送：</h2>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="shell">$ git push</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>雖然省略掉 <em>origin</em> + 分支名稱，但假如要推送的是新分支，命令提示字元會告訴你無法推送，要求你加上 <em>origin</em> + 分支名稱。</p>

<h2>推送全部分支（<em>branch</em>）：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git push --all</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h2>推送全部標籤（<em>tag</em>）：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git push --tags</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h2>沿用 <em>push</em> 分支，下次 <em>pull</em> 直接參照：</h2>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="shell">$ git push -u origin 分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>輸入後，下次 <em>pull</em> 可以直接不指定分支，而是直接參照 <em>push</em> 的分支。</p>
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