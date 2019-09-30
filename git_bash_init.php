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
                        <time>2019-09-25</time>
                        <h1>Lesson02-- 建立 Git 版本庫（init）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>本篇主要介紹 Git 資料夾的基礎建置方法。</p>
<p class="step">
    <span>Step01. 在命令提示字元移動到欲建立版本庫的磁碟路徑。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="dos">d:</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 建立資料夾。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="dos">mkdir 資料夾名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="dos">mkdir demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step03. 進入資料夾底下。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="dos">cd 資料夾名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="dos">cd demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>


<p class="step">
    <span>Step04. 建立 Git 版本控制環境。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="shell">$ git init</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<p>真正與 Git 有關的指令實際上只有第四步，前三個步驟僅單純揭示如何透過命令提示字元指令生成一個具有 Git 版控的資料夾目錄，倘若要給已存在的專案目錄建立 Git 初始環境，僅需參照步驟三的 <em>cd</em> 指令，或是在該資料夾內點擊右鍵呼叫功能選單，選擇「Git Bash Here」即可。</p>
<figure>
    <img src="images/pic/git/cmd-bulid-git-01.jpg">
    <figcaption>右鍵功能選單的 Git 快速操作。</figcaption>
</figure>

<p>實際到資料夾結構看，會發現成為 Git 版本庫的資料夾圖示會有一個打勾的符號，而資料夾裡面則有一個隱藏的 .git 資料夾，該資料夾是用來記錄每次專案提交的版本資訊。</p>
<figure>
    <img src="images/pic/git/cmd-bulid-git-02.jpg">
    <figcaption>若有 .git 即表示此專案目錄已建立 Git 版控環境。</figcaption>
</figure>

<p>部分 Windows 系統的使用者可能看不見「.git」的隱藏目錄，此乃因為作業系統並未開啟顯示隱藏項目的選項，通常只要在工具列中「檢視」頁籤找到相對應的選項，將其核選方塊勾選即可。</p>
<figure>
    <img src="images/pic/git/cmd-bulid-git-03.jpg">
    <figcaption>Windows 系統顯示隱藏檔案的方法。</figcaption>
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