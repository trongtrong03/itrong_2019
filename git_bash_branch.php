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
                        <h1>Lesson07-- 分支（branch）：建立與切換</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在專案無論是開發、維護階段，相信多少會遇到以下情形：</p>
<ol class="decimal">
    <li>多人同時進行作業。</li>
    <li>功能新增或修改的撰寫。</li>
    <li>有程式錯誤需要處理。</li>
</ol>
<p>若是直接在原專案進度直接進行作業，或許會有改壞的可能性，即便小心謹慎，對部分人來說心底亦難以踏實，再者，當同時有複數進行作業的狀態下，可能會遇到覆蓋他人檔案、編輯到相同檔案等衝突問題，面對種種各種風險，就是分支（branch）功能發揮其強大作用的時候。</p>
<p>首先，我們可以使用 <em>git branch</em> 指令，查看目前所在的分支名稱。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git branch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<figure>
    <img src="images/pic/git/bash-branch-01.jpg">
    <figcaption>※ <em>master</em> 即是目前所在的分支，順便一提，<em>master</em> 是預設且也是通常被作為最主要分支的名稱。</figcaption>
</figure>
<br>

<h2>建立與切換分支：</h2>
<p class="step">
    <span>Step01. 建立分支。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git branch 分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git branch newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 切換分支。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git checkout 分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="shell">$ git checkout newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<p>如此便完成分支切換的動作，我們可以再次利用 <em>git branch</em> 指令，以確認目前所在分支是不是已經切換至分支 <em>newbranch</em>。</p>
<figure>
    <img src="images/pic/git/bash-branch-02.jpg">
</figure>

<p>建立與切換分支的步驟也可以同時進行，指令為：</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="shell">$ git checkout -b 分支名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>這段指令意思就是 <em>git branch</em> 分支名稱 + <em>git checkout</em> 分支名稱。<br>例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area07" class="code-text"><code class="shell">$ git checkout -b newbranch</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<p>同樣用 <em>git branch</em> 確認一下：</p>
<figure>
    <img src="images/pic/git/bash-branch-03.jpg">
    <figcaption>可看出不但建立了名為 <em>newbranch</em> 的分支，同時也已切換到此分支上。</figcaption>
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