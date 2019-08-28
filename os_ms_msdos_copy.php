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
                        <h1>MS-DOS：複製檔案（copy）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>copy</em> 指令是複製檔案的方法。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">copy 檔案名稱 複製檔案的新名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">copy demo.txt demo02.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h2>參數一覽：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex4">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/d</span>
        <span class="t-flex4">允許解密要建立的目的檔。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/v</span>
        <span class="t-flex4">驗證新檔案寫入是否正確。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/n</span>
        <span class="t-flex4">複製帶有非 8dot3 名稱的檔案。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/y</span>
        <span class="t-flex4">使用確認是否要覆蓋現有目的檔的提示。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/-y</span>
        <span class="t-flex4">同上。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/z</span>
        <span class="t-flex4">可重新啟動模式複製已聯網的檔案。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/a</span>
        <span class="t-flex4">表示 ASCII 文字檔案。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/b</span>
        <span class="t-flex4">表示二進位檔案。</span>
    </div>
</div>
<p>不能只有單單下一個複製檔案的指令，例如：</p>
<h3 class="ex"></h3>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash">copy demo.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>系統會告訴你「檔案不可以複製到檔案本身」的訊息，由此可知複製的動作必須同時給予新的名稱。</p>
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