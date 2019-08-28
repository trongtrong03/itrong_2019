<!doctype html>
<html class="pages app view">
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
                        <time>2017-05-06</time>
                        <h1>MS-DOS：刪除檔案（del）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>前一篇的刪除方法僅限於資料夾目錄，若要刪除檔案，則必須使用 <em>del</em> 指令，或是 <em>erase</em>。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">del 資料夾名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">del demo01.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h2>參數一覽：</h2>
<section class="t-form">
    <article class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex4">說明</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/f</span>
        <span class="t-flex4">強制刪除唯讀檔案。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/s</span>
        <span class="t-flex4">從所有子目錄刪除指定檔案。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/q</span>
        <span class="t-flex4">刪除時，不要求確認。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/a</span>
        <span class="t-flex4">根據屬性選擇要刪除的檔案。</span>
    </article>
</section>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="bash">del /a *.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>刪除當前目錄內所有副檔名是 .txt 的檔案。</p>
<p><em>del</em> 也可以使用 <em>erase</em> 來操作。</p>
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