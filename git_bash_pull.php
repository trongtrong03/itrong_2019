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
                        <time>2019-10-14</time>
                        <h1>Notes17-- 拉取（pull）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>自遠端儲存庫更新檔案至本機「既有」目錄的行為，在 Git 稱為拉取，之所以會特別強調「既有」兩字，是因為本機端是否已存在該遠端儲存庫的 Git 專案，所需要下達的指令也不一樣，如果工作電腦沒有該 Git 專案資料，我們需要使用的指令為 <em>clone</em>（這留待以後再提）。假如是已經擁有該 Git 專案，且遠端已由他人推送新的版本，而這方需要同步更新以接續著執行該專案的工作，那麼我們會用到的指令為 <em>pull</em>。事實上，從遠端更新檔案至本機工作電腦的方式有兩種，一種是 <em>fetch</em>，另一種是 <em>pull</em>，兩者的差異在有沒有包含「合併」（<em>merge</em>）的動作（<em>fetch</em> 無，而 <em>pull</em> 有）。</p>
<br>

<h2>Fetch：</h2>
<p class="step">
    <span>Step01. 從遠程的 <em>origin</em> 的 <em>master</em> 主分支更新最新版本到 <em>origin/master</em> 分支上。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git fetch origin master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 比較本地的 <em>master</em> 分支和 <em>origin/master</em> 分支的差別。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git log -p master..origin/master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step03. 合併內容到本地 <em>master</em> 分支。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git merge origin/master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>Pull：</h2>
<p>由於 <em>pull</em> 指令已經包含 <em>merge</em> 的動作，所以不需要像 <em>fetch</em> 有些許繁瑣的步驟要操作，在已經確保本機專案目錄的遠端（remote）與遠端儲存庫成功連接的情況下，我們只需要一次指令便可成功將遠端資料更新下來。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git pull origin master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
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