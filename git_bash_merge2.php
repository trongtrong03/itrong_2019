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
                        <time>2019-10-01</time>
                        <h1>Notes11-- 合併（merge）：還原合併</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>假設我們原本是要將分支 <em>newbranch2</em> 合併給主分支 <em>master</em>，卻因為一時犯傻或種種因素，導致反過來將 <em>master</em> 合併到 <em>newbranch2</em>，萬一不小心遇到這種情況，其實是有方法可以補救的。</p>
<p class="step">
    <span>Step01. 將所在分支切換回主分支。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git checkout master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 呼叫 <em>log</em> 日誌。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="shell">$ git log --oneline</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>這步驟目的是查看合併前的 <em>newbranch2</em> 分支最後一筆提交的 SHA-1 值我們假設其值為 <em>44e797c</em>。</p>

<p class="step">
    <span>Step03. 還原分支。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git reset --hard 最後一筆（不包含合併新增的）提交的 SHA-1 值</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="shell">$ git reset --hard 44e797c</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>如此便完成還原的工作。</p>

<br>
<p>其實還有更簡單、快速的還原方法，那就是使用 <em>ORIG_HEAD</em> 指令。</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="shell">$ git reset --hard ORIG_HEAD</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>這個指令將回直接還原前一個版本。</p>
<p><em>--hard</em> 在 <em>reset</em> 指令中表示強制將工作目錄的檔案回復到前一版本。</p>
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