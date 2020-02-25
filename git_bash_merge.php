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
                        <h1>Notes10-- 合併（merge）：分支合併</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>合併（merge）的功用在於當我們完成另開分支後的作業，想使其與其他分支整合時使用，它的操作方法很簡單，只需要兩個步驟：</p>
<p class="step">
    <span>Step01. 將所在分支切換到指定分支（如 <em>master</em>）。</span>
</p>
<p class="step">
    <span>Step02. 將目標分支合併進來。</span>
</p>
<br>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git merge 目標分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>以下的練習將從分支學習系列累積的進度接續下去，如果對練習的前因後果有所納悶，建議可以先閱讀前幾篇有關分支的文章練習。此外，為方便觀察分支合併的節點進程，本篇同樣會借助 TortoiseGit GUI 畫面的輔助。</p>

<figure>
    <img src="images/pic/git/bash-merge-01.jpg">
    <figcaption>目前專案資料夾底下的分支一覽圖。</figcaption>
</figure>
<p>上圖是前幾篇分支學習的演練結果，目前該資料夾底下一共有兩條分支，是為主分支 <em>master</em> 以及另一條尚未執行合併的分支 <em>newbranch2</em>，他們各自存在只存在於自己分支內的檔案，畫面如下：</p>
<figure>
    <img src="images/pic/git/bash-branch-08.jpg">
    <figcaption>master 分支底下的檔案清單。</figcaption>
</figure>
<figure class="mb-0">
    <img src="images/pic/git/bash-branch-09.jpg">
    <figcaption>newbranch2 分支底下的檔案清單。</figcaption>
</figure>
<p>我們要做的，就是將兩個分支合併（merge）在一起，將 <em>newbranch2</em> 併入 <em>master</em>，最後成功的畫面將會看到所有檔案都存在於 <em>master</em> 裡。</p>
<p>但我們不先急著馬上開始動作，進行分支合併之前，必須先確保目前分支不在即將要進行合併的分支上，若是直接在目標分支上進行合併，會得到「Already up-to-date」的訊息：</p>
<figure>
    <img src="images/pic/git/bash-merge-02.jpg">
    <figcaption>還沒切換到別的分支就對合併目標下達指令的結果。</figcaption>
</figure>

<p>因此，我們要先將分支切換主分支 <em>master</em> 上，指令為：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git checkout master</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-merge-03.jpg">
    <figcaption>可以用 git branch 指令來確認是否有切換成功。</figcaption>
</figure>

<p>接著輸入合併指令，把 <em>newbranch2</em> 分支合併進來。</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="shell">$ git merge newbranch2</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>按下確認鍵，這時會突入一個畫面，要求你輸入一個 commit message，以解釋為什麼要對 <em>newbranch2</em> 這個分支進行合併的操作。</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-04.jpg">
</figure>
<p>如果沒有要特別註記什麼的話，直接輸入 <em>:q</em> 就可以直接退出。</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-05.jpg">
</figure>
<p>如此便完成合併的操作，我們可以打開資料夾目錄進行確認：</p>
<figure>
    <img src="images/pic/git/bash-merge-06.jpg">
    <figcaption>在 newbranch2 分支新增的檔案已合併於主分支 master。</figcaption>
</figure>
<P>透過 GUI 來檢視版本圖，合併後會自動產生一個新的提交版本，並加上合併的描述資訊，被合併的 <em>newbranch2</em> 分支依然存在，可以選擇保留或刪除。<br>
假如要刪除它，是否還記得先前在分支刪除的學習文章中有提到，直接下達 <em>-d</em> 的指令，Git 會認定你還沒有合併它故有誤刪可能的預設條件下而不同意刪除，但此時由於 <em>newbranch2</em> 已經和 <em>master</em> 合併了，因此不再需要使用 <em>-D</em> 強制刪除，使用 <em>-d</em> 即可。</P>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git branch -d newbranch2</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-merge-08.jpg">
    <figcaption>刪除後可用 git branch 確認目前分支名單。</figcaption>
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