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
                        <time>2019-10-02</time>
                        <h1>Lesson13-- 補遺：新增檔案（add）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在 <a href="git_bash_add_and_commit.php" target="_blank">Lesson03-- 新增檔案（add）並提交（commit）</a> 一文中，有介紹到如何把檔案添加到暫存區域裡，使用的指令是 <em>git add .</em>，現在來多談談有關 <em>add</em> 的其他操作方式。</p>
<br>

<h2>將新創、更動的檔案一併添加至暫存區域：</h2>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="shell">$ git add .</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>（一般認為這個方式並不妥，雖說方便，卻可能會不小心把非必要的檔案也一起加入進去。）</p>
<br>

<h2>將全部檔案添加至暫存區域：</h2>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="shell">$ git add --all</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>或</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git add -A</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>添加修改的檔案至暫存區域：</h2>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="shell">$ git add -u</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>（不包含未追蹤的檔案。）</p>
<br>

<h2>添加個別檔案至暫存區域：</h2>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="shell">$ git add 檔名 + 副檔名</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="shell">$ git add demo.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>使用互動模式來進行添加作業：</h2>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area07" class="code-text"><code class="shell">$ git add --interactive</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<p>或</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="shell">$ git add -i</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-add-01.jpg">
</figure>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex4">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">1: status</span>
        <span class="t-flex4">顯示資訊</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">2: update</span>
        <span class="t-flex4">將檔案加入暫存區域</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">3: revert</span>
        <span class="t-flex4">撤銷添加，意即恢復的意思</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">4: add untracked</span>
        <span class="t-flex4">添加未追蹤的檔案</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">5: patch</span>
        <span class="t-flex4">暫存補丁</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">6: diff</span>
        <span class="t-flex4">比較差異</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">7: quit</span>
        <span class="t-flex4">離開</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">8: help</span>
        <span class="t-flex4">幫助</span>
    </div>
</div>

<p>如何操作？假設我們現在要把以下這些未追蹤的檔案加入至暫存區域...</p>
<figure>
    <img src="images/pic/git/bash-add-02.jpg">
</figure>

<p>輸入 <em>git add -i</em> 開啟互動模式，並選擇第四個選項。</p>
<figure>
    <img src="images/pic/git/bash-add-03.jpg">
</figure>

<p>選擇要添加的檔案編號，若要同時添加多個，用「,」隔開即可，也可以使用「n-n」（例如 1-5）的方式，代表從某編號到某編號之間的所有檔案都將加入追蹤。</p>
<figure>
    <img src="images/pic/git/bash-add-04.jpg">
</figure>

<p>按下 enter 鍵，會看見列表有被輸入的檔案，左方皆打上「*」的標示，意味著這些檔案被預定要加入至暫存區域，此時再按一次 enter，檔案便成功添加至暫存區域內。</p>
<figure>
    <img src="images/pic/git/bash-add-05.jpg">
</figure>

<p>倘若要取消添加至暫存區域的檔案，可以使用第三個選項（revert），操作方法與上述相同。</p>
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