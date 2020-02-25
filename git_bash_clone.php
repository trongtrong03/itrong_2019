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
                        <h1>Notes18-- 複製（clone）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在上一篇有提到要將遠端儲存庫的 Git 專案下載到自己工作電腦的方式有兩種：<em>pull</em> 與 <em>clone</em>，其中本篇要介紹的 <em>clone</em> 指令，被用於要下載工作電腦指定路徑沒有該 Git 專案目錄的時候，假設本機端工作電腦已經存在該專案目錄，而我們只是要更新它，那我們要使用的則是 <em>pull</em> 而非 <em>clone</em>。</p>
<p><em>clone</em> 的指令非常簡單且單純，只要在目標路徑下達該指令並添加遠端專案連結即可。</p>

<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git clone 遠端儲存庫網址.git</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git clone https://github.com/trongtrong03/demo.git</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
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