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
                        <time>2019-10-14</time>
                        <h1>Notes03-- 建立 Gulp 專案</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>從本篇開始，我們將學習如何建立一個由 Gulp 進行編譯的專案，首先，在本機任一位置新增一個空白資料夾，並取名為「demo」。</p>
<p class="step">
    <span>Step01. 於專案目錄建立 package.json 文件。</span>
</p>
<p>package.json 是一種基於 JSON 格式建構成的說明文件，同時也是 Node.js 中很重要的存在，它可以用來定義很多東西，例如要使用哪些相依套件或記錄應用程式的資訊，由於 Gulp 乃依憑於 Node.js 開發而成，故必須先在專案目錄下建立起始環境，指令為下：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="dos">npm init</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<figure class="mb-0">
    <img src="images/pic/frontend/gulp-gulpfile-01.jpg">
    <figcaption>文件生成期間會詢問一些文件訊息。</figcaption>
</figure>
<p>指令送出後，系統會詢問將記載於 package.json 文件內的一些基本訊息，例如名稱、描述、作者...等等，這些資訊並不需要立即填寫，一直向下 ENTER 鍵到文件建立完成，日後有空再行補充即可。</p>
<figure>
    <img src="images/pic/frontend/gulp-gulpfile-02.jpg">
    <figcaption>package.json 文件建立成功。</figcaption>
</figure>
<figure>
    <img src="images/pic/frontend/gulp-gulpfile-03.jpg">
    <figcaption>package.json 文件的內容。</figcaption>
</figure>
<br>

<p class="step">
    <span>Step02. 安裝專案使用的 gulp。</span>
</p>
<p>在上一篇下達的 <em>npm install gulp -g</em> 安裝指令指的是全域環境的安裝，而現在則是要將 Gulp 模組資訊導入 package.json 文件裡，後者的行為可稱作本地安裝 Gulp，全域安裝是為了執行 Gulp 任務，而本地安裝則是為了調用 Gulp 套件的功能。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="dos">npm install gulp --save-dev</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/frontend/gulp-gulpfile-04.jpg">
</figure>

<p>此時觀看專案目錄，會看見 Node 相關檔案模組都已安裝在該資料夾內。</p>
<figure>
    <img src="images/pic/frontend/gulp-gulpfile-05.jpg">
</figure>

<p>接著打開 package.json，則看到 gulp 已被記錄在該文件裡。</p>
<figure class="mb-0">
    <img src="images/pic/frontend/gulp-gulpfile-06.jpg">
</figure>
<p><em>devDependencies</em> 指的是開發環境，在其嵌套裡的套件只會用於開發環境內，基本上建構工具（Gulp、Webpack ...等）皆屬這類。然還有另一種類似的嵌套叫做 <em>dependencies</em>，和前者相反，此為需要發佈到生產環境，如果使用的套件（譬如某一個項目需要依賴 jQuery）需要在被生產到最終輸出文件，那就得將此依賴寫入 <em>dependencies</em> 裡，若沒有此依賴則在編譯過程中就會報錯。</p>
<p>通常在執行 <em>npm install</em> 的時候就會知道該套件屬於哪一種類別：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="dos">// 新增到 dependencies
npm install *** –-save

// 新增到 devDependencies
npm install ***  –-save-dev</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>

<p class="step">
    <span>Step03. 建立 gulpfile.js 文件。</span>
</p>
<p>在專案目錄下新增一個副檔名為 .js 的檔案，並命名為「gulpfile」，然後在文件貼上以下內容：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="javascript">function defaultTask(cb) {
  // place code for your default task here
  cb();
}

exports.default = defaultTask</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>本段程式碼取自 Gulp 官方文件，此段僅用來為後續是否有成功執行 <em>gulp</em> 指令的測試，尚未加入其他任務（task）的指令代碼。</p>
<br>

<p class="step">
    <span>Step04. 執行 <em>gulp</em> 指令。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="dos">gulp</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<figure class="mb-0">
    <img src="images/pic/frontend/gulp-gulpfile-07.jpg">
</figure>
<p>確認 <em>gulp</em> 指令已順利在進行，但因為目前 gulpfile.js 沒有其他 task 任務，所以暫且無法看見其他實際動作。</p>
<br>
<p>小結，當要建立一個 Gulp 專案時，會有兩個必要的檔案，第一個是 package.json，主要整理 Gulp Plugin。第二個則是 gulpfile.js，用來創建任務流（task），只要有這兩個檔案，就能快速建構出一個 gulp 的開發環境了。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://gulpjs.com/" target="_blank">gulp.js - The streaming build system</a></li>
    <li><a href="https://www.gulpjs.com.cn/" target="_blank">gulp.js - 中文</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10185420" target="_blank">Gulp 安裝與介紹</a></li>
    <li><a href="https://juejin.im/post/5c736fc4f265da2d943f6b8c" target="_blank">Gulp 快速入门</a></li>
    <li><a href="https://www.slideshare.net/sfismy/gulpjs" target="_blank">Gulp.js 自動化前端任務流程</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10158140" target="_blank">Node.js 系列學習日誌 #6 - 使用 package.json 安裝、管理模組</a></li>
    <li><a href="https://juejin.im/post/5c85d278e51d453e35764da0" target="_blank">dependencies与devDependencies的区别</a></li>
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