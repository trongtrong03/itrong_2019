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
                        <h1>Notes08-- 分支（branch）：進行作業</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>上一篇已初步了解分支的建立與切換方式，本篇接著實際演練，嘗試如何在分支上進行作業。此外，本篇將搭配 TortoiseGit GUI 畫面的輔助，這可以幫助我們更容易理解分支操作的過程。</p>
<p>在開始分支練習之前，先假定主分支 <em>master</em> 已有數筆提交記錄，當然這非必要程序，要直接建立新分支開始練習也可以。</p>
<figure>
    <img src="images/pic/git/bash-branch-04.jpg">
    <figcaption>主分支「master」的提交記錄。</figcaption>
</figure>
<figure>
    <img src="images/pic/git/bash-branch-05.jpg">
    <figcaption>用 TortoiseGit GUI 面板觀看主分支「master」。</figcaption>
</figure>

<p class="step mb-0">
    <span>Step01. 建立 newbranch 分支，並切換到該分支上。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git checkout -b newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 反覆進行多筆提交動作。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="shell">git add .
git commit -m "b1"
...</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>以上稍微複習一下將檔案添加（add）至暫存區及提交（commit）的用法。</p>
<p class="mb-0">一面添加、一面提交反覆進行的同時，我們可以配合 TortoiseGit 觀察分支 <em>newbranch</em> 的進展狀況：</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-branch-06.jpg">
    <figcaption>旁邊的黑圈表示節點，在接下來於不同分支進行作業階段，可看出分支明顯的進程。</figcaption>
</figure>
<p>在陸續提交幾次檔案之後，<em>newbranch</em> 分支逐漸與 <em>master</em> 分支分離了，這意味著一旦切換到指定的分支，爾後對檔案的任何操作進行的版控，都會記錄在指定分支上。</p>

<p class="step">
    <span>Step03. 切換回主分支（<em>master</em>）。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="shell">$ git checkout master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="step mb-0">
    <span>Step04. 再次進行檔案提交的動作。</span>
</p>
<p>此步操作和第二步一樣所以就不再贅述過程了，差別只在我們已經在前一個步驟將分支切回主分支 <em>master</em>，接下來的檔案記錄將記錄在 <em>master</em> 而非 <em>newbranch</em>，同樣地，利用 TortoiseGit 的 GUI 來觀察分支變化...</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-branch-07.jpg">
    <figcaption>切回主分支「master」之後的版控進程狀況。</figcaption>
</figure>
<p>明顯可以看到 <em>newbranch</em> 分支在版本圖（也就是左側的節點）已經從主線抽離出來了，而主分支 <em>master</em> 則繼續延續後來追加的版本提交資訊，此刻我們真正看到「分支」的形貌。<br>
不僅如此，若前往資料夾目錄底下看，會發現此時資料夾內只有提交於 <em>master</em> 分支底下的檔案，即 a.txt、b.txt、c.txt、f.txt、g.txt。</p>
<figure>
    <img src="images/pic/git/bash-branch-08.jpg">
</figure>

<p class="mb-0">若我們再切換至 <em>newbranch</em> 分支...</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="shell">$ git checkout newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>然後檢視資料夾內容，則會發現 f.txt、g.txt 不見了，取而代之顯示的是分支 <em>newbranch</em> 底下的 a.txt、b.txt、c.txt、d.txt、e.txt，a、b、c 之所以始終存在，是因為在 <em>newbranch</em> 建立之時它們的提交記錄就已經存在，新建分支會接續其另闢一條新徑。</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-branch-09.jpg">
</figure>
<p>通過不同分支的來回切換，並觀察檔案的變化狀況，就不難理解各分支的檔案操作皆為獨立，且不會互相重疊的，除非開發人員將其進行合併或其他的操作才會發生變化。</p>
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