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
                        <time>2019-10-08</time>
                        <h1>Lesson02-- Gulp 安裝流程</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>安裝 Gulp 的步驟並不難，基本只要透過命令提示字元幾行指令就能安裝完成，只是在執行 Gulp 安裝指令之前，我們必須先行安裝 Node.js，因為 Gulp 是基於 Node 產生的一個資源包。</p>
<p class="step">
    <span>Step01. 安裝 Node.js。</span>
</p>
<figure class="mb-0">
    <img src="images/pic/frontend/gulp-install-01.jpg">
    <figcaption>Node.js 的<a href="https://nodejs.org/en/" target="_blank">官網網站</a>。</figcaption>
</figure>
<p>它有兩個下載連結，左邊是目前最多使用者推薦的版本，右邊則是當前最新的版本，視需求選擇相對應的版本即可。下載完程式後執行安裝，安裝基本上沒有什麼需要特別注意的，一直選擇下一步即可。</p>
<p>可以用以下三筆版本確認指令查看 node、npm、npx 是否有確實安裝於電腦裡：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="dos">node --version
npm --version
npx --version</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p><em>--version</em> 簡化成 <em>-v</em> 也可以：</p>
<figure class="mb-0">
    <img src="images/pic/frontend/gulp-install-02.jpg">
    <figcaption>Node.js 的<a href="https://nodejs.org/en/" target="_blank">官網網站</a>。</figcaption>
</figure>
<p>npm 是 Node 自帶的包（package）管理工具，而 npx 則是用來提升開發者使用包內提供的命令列工具之體驗。</p>
<br>

<p class="step">
    <span>Step02. 安裝 Gulp。</span>
</p>
<p>開啟命令提示字元，輸入以下指令：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="dos">npm install gulp -g</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/frontend/gulp-install-03.jpg">
</figure>
<p>可透過 <em>gulp --version</em> 或 <em>gulp -v</em> 指令查看安裝版本：</p>
<figure>
    <img src="images/pic/frontend/gulp-install-04.jpg">
</figure>
<p>以上就是 Gulp 的安裝流程，假如先前已經有裝過 Ndoe，那麼 Gulp 更是簡單到只要輸入其 <em>install</em> 指令即可完成安裝，之後要學的將是如何使用 Gulp 來管理、編譯專案了。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://gulpjs.com/" target="_blank">gulp.js - The streaming build system</a></li>
    <li><a href="https://www.gulpjs.com.cn/" target="_blank">gulp.js - 中文</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10185420" target="_blank">Gulp 安裝與介紹</a></li>
    <li><a href="https://www.itread01.com/content/1544755994.html" target="_blank">npx 是什麼？</a></li>
    <li><a href="https://juejin.im/post/5ab3f77df265da2392364341" target="_blank">2018 年了，你还是只会 npm install 吗？</a></li>
</ul>
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