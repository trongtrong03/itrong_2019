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
                        <h1>Lesson12-- 合併（merge）：衝突</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>多人開發及維護同一專案時，難免會發生修改到相同檔案，合併階段發生錯誤的情況，在 Git 稱之為「衝突」，衝突需要由人工處理，只要選擇要保留指定版本的檔案，再進行合併就能搞定。</p>

<p>以下先來模擬衝突的環境：</p>
<p class="step">
    <span>Step01. 在主分支 <em>master</em> 新增 1.txt，輸入內容並分別提交。</span>
</p>
<p></p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-09.jpg">
    <figcaption>1.txt 文件裡的內容。</figcaption>
</figure>
<p>在主分支 <em>master</em> 下，我們新增一個文字檔案，內容輸入「This is master content」，然後進行提交。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git add .
$ git commit -m "C1"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 建立新分支 <em>newbranch</em>，並切換過去。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git checkout -b newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step03. 修改 1.txt 的內容，並進行提交。</span>
</p>
<p>此時專案目錄已切換至分支 <em>newbranch</em>，開啟 1.txt，並修改內文為「This is newbranch content」，儲存後進行提交的動作。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git add .
$ git commit -m "B1"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step04. 切回主分支 <em>master</em>，修改 1.txt 的內容，再次提交檔案。</span>
</p>
<p>再次從 <em>newbranch</em> 切回主分支 <em>master</em>，並變更 1.txt 內容，假設修改內容為下：</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-10.jpg">
</figure>
<p>同樣地，我們將檔案進行新的提交，版本名稱為「C2」。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git add .
$ git commit -m "C2"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>此時我們可以用 TortoiseGit 瞧瞧目前分支節點的進程畫面：</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-11.jpg">
</figure>

<p class="step">
    <span>Step05. 將 <em>newbranch</em> 分支合併到 <em>master</em> 分支裡。</span>
</p>
<p>在此一步驟，我們要用 <em>merge</em> 合併分支指令，來製造合併衝突的狀況：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="shell">$ git checkout master
$ git merge newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>將目前所在分支切換到 <em>master</em> 上，並將 <em>newbranch</em> 合併過來。</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-12.jpg">
    <figcaption>出現衝突訊息。</figcaption>
</figure>
<p>此時會得到「CONFLICT」的衝突訊息，導致 <em>newbranch</em> 無法合併至 <em>master</em>，原因在於合併過程中，發現部分檔案在兩條分支的內容並不一致，因此無法進行合併，必須手動去解決這個問題。</p>
<p>輸入 <em>git status</em> 指令，可以看見目前檔案的狀態：</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-merge-13.jpg">
</figure>
<p>Unmerge paths 清楚告訴你什麼檔案正處於未合併狀態，同時會將該檔案保留在工作目錄裡等待解決，開啟 1.txt，發現檔案裡同時存在不同分支下產生衝突的內容：</p>
<figure>
    <img src="images/pic/git/bash-merge-14.jpg">
    <figcaption>1.txt 同時寫入了 master 與 newbranch 分支時修改的內容。</figcaption>
</figure>

<p>於是乎，開始著手處理他們吧。</p>
<p class="step">
    <span>Step01. 開啟衝突文件 1.txt，比對並決定要保留的內容。</span>
</p>
<figure>
    <img src="images/pic/git/bash-merge-14.jpg">
</figure>
<p><<<<<<< HEAD 至 ======= 區域之間的內容，是目前所在分支先前提交的內容，而 ======= 到 >>>>>>> newbranch 之間，則是被合併分支提交的內容，假定我們要保留的是目前分支 master 的內容。</p>

<p class="step">
    <span>Step02. 刪除不要的內容，包含因應衝突產生的符號（<<<、===、>>>）。</span>
</p>
<figure>
    <img src="images/pic/git/bash-merge-15.jpg">
</figure>

<p class="step">
    <span>Step03. 重新提交檔案。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="shell">$ git add .
$ git commit -m "c3"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-merge-16.jpg">
    <figcaption>順利解決衝突，合併成功。</figcaption>
</figure>

<p>儘管上面實作是以保留 <em>master</em> 內容作為範例，其實關鍵在於衝突發生後的檔案再次添加且提交這個動作，假使今天發生衝突的檔案內容都是要予以保留，只要手動整理好後重新將檔案提交至版控，那麼先前發生的衝突也就不逕而走了。</p>
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