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
                        <time>2019-09-30</time>
                        <h1>Notes09-- 分支（branch）：刪除</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p class="mb-0">承襲前兩篇關於分支（branch）的介紹，本篇將要談談如何刪除分支，若要刪除分支，有幾個需要注意的事項：</p>
<ol class="decimal">
    <li>跳出欲刪除的分支。</li>
    <li>分支尚未合併則無法刪除。</li>
    <li>刪除分支並不會刪除提交記錄。</li>
</ol>

<p class="mb-0">以下將會一一解析這些注意事項的緣由，而刪除分支的指令為：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git branch -d 分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git branch -d newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p class="mb-0">如果沒有先切換到其他分支，直接下達刪除目前所在之分支， Git 會噴出錯誤且不給予刪除，如下圖：</p>
<figure>
    <img src="images/pic/git/bash-branch-10.jpg">
</figure>

<p class="mb-0">所以我們必須先使用 <em>checkout</em> 指令，切換至其他分支，例如 <em>master</em>。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git checkout master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="mb-0">接著再執行一次刪除，卻發現...</p>
<figure>
    <img src="images/pic/git/bash-branch-11.jpg">
</figure>


<p class="mb-0">即便切換了其他分支，Git 依舊不放行，原因是 Git 認定被刪除的分支如果尚未與其他分支合併（有關合併的教學將在日後介紹），就不同意直接刪除該分支，不過系統也告訴你，如果確認要執行刪除的話，請執行 <em>-D</em>（大寫）的指令。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git branch -D newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-branch-12.jpg">
</figure>

<p>刪除分支指令下達完後，可以透過 <em>git branch</em> 檢視目前存在的分支，如今 <em>newbranch</em> 已經不存在了。</p>
<p>然而，雖然刪除了分支，且該分支的提交記錄也確確實實消失在日誌上，但其實這些提交記錄並沒有真的被刪除，它們被隱藏了起來，若要尋找它們，可以使用 <em>reflog</em> 指令。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="shell">$ git reflog</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-branch-13.jpg">
</figure>

<p class="mb-0">如果礙於種種因素，希望恢復被刪除的分支，則可以這樣做：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="shell">$ git checkout 分支最後一次提交的 SHA-1 值
git checkout -b 分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<figure>
    <img src="images/pic/git/bash-branch-14.jpg">
    <figcaption><em>newbranch</em> 最後一次 commit 的 SHA-1 值。</figcaption>
</figure>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="shell">$ git checkout 7a44b8e
git checkout -b newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<figure class="mb-0">
    <img src="images/pic/git/bash-branch-15.jpg">
</figure>
<p>用 <em>git branch</em> 確認看看，果不其然，分支 <em>newbranch</em> 又復活啦？這倒也不完全是，與其說它是復活，不如說分支刪除的動作事實上只有刪除分支本身的表皮，已經建立的各筆提交記錄並不會跟著被刪除，我們只是找到最後一筆 SHA-1 值，將其重新賦予分支名稱而已，因此可以用新的分支名字取代原本的 <em>newbranch</em>。</p>
<p>不過既然提到了名字，最後就補充一下更改分支名稱的指令：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="shell">$ git branch -m 原名稱 新名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="shell">$ git branch -m newbranch newbranch2</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-branch-16.jpg">
</figure>
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