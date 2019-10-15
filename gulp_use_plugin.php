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
                        <h1>Lesson04-- 使用 Gulp 套件與 gulpfile.js 說明</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Gulp 所需的必要檔案文件在上一篇已經陸續建置完成，也實測過 <em>gulp</em> 指令可以順利運行，那麼本篇將接續學習如何使用 gulp 的套件，以及介紹 gulpfile.js 的相關屬性配置與用途。</p>
<br>
<h2>使用 Gulp 套件：</h2>
<p>上篇我們已知利用 <em>npm intall</em> 來將套件安裝到 package.json，也已實際將 gulp 核心安裝進專案目錄內，方便日後調用其他套件功能，現在我們繼續接著安裝其他 gulp 套件，例如 <em>gulp-sass</em>（sass 的編譯）。</p>
<br>

<p class="step">
    <span>Step01. 安裝 gulp 套件。</span>
</p>
<p>當我們今天想使用某個 gulp 套件時，最好先到 Gulp 官方文件的 <a href="https://gulpjs.com/plugins/" target="_blank">Plugins</a> 頁面列表裡搜尋要使用的套件，裡面會記載相關使用方式。以 <em>gulp-sass</em> 來說，我們不僅僅可以得知其安裝指令，同時網頁也會告知如何在 gulpfile.js 引用該套件的方法。</p>
<figure>
    <img src="images/pic/frontend/gulp-use-01.jpg">
    <figcaption><a href="https://www.npmjs.com/package/gulp-sass" target="_blank">https://www.npmjs.com/package/gulp-sass</a></figcaption>
</figure>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="dos">npm install node-sass gulp-sass --save-dev</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>這裡稍微插播補充一點，安裝少量套件的時候一筆一筆輸入指令沒啥問題，然而若要一口氣安裝大量套件的時候，一筆一筆輸入就顯得稍微浪費時間了，其實我們可以直接用一行囊括所有要安裝的套件，迅速將他們安裝到專案目錄內，例如：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="dos">npm install gulp-autoprefixer gulp-concat gulp-uglify --save-dev</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/frontend/gulp-use-02.jpg">
    <figcaption>開啟 package.json 確認相關套件已被安裝。</figcaption>
</figure>

<p class="step">
    <span>Step02. 撰寫 gulpfile.js 文件。</span>
</p>
<p>開啟 gulpfile.js（假如內容留有前一篇為了測試 gulp 指令是否順利執行的測試程式碼，記得先全部刪除），添加以下內容：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="javascript">'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>這段的用意是要將這些安裝的套件引入進來。<em>'use strict'</em> 則是嚴格模式的意思，目的是讓 Javascript 過去不嚴謹的寫法變得更加具有穩定性。</p>

<p>接著就是要細部設定每個使用套件的 API 了，在變數宣告之後，接續貼上以下程式碼：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="javascript">sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css'));
});
 
gulp.task('sass:watch', function () {
    gulp.watch('scss/**/*.scss', ['sass']);
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>當然真實使用的配置多少會和官方文件展示的範例有所出入，依開發者自身的需求進行調整即可。</p>
<p>現在我們可以在專案根目錄內新增 scss 與 css 資料夾，並在 scss 資料夾內新增一個 scss 檔案，並編輯內容。</p>
<figure>
    <img src="images/pic/frontend/gulp-use-03.jpg">
</figure>
<br>

<p class="step">
    <span>Step03. 運行 gulp。</span>
</p>
<p>再來就是要執行 <em>gulp</em> 指令跑任務了，依照套件的預設指令，我們要鍵入的指令內容為下：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="dos">gulp sass</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/frontend/gulp-use-04.jpg">
</figure>
<p>編譯完成，這時開啟 css 資料夾，原先 layout.scss 已成功輸出 layout.css 的發佈檔案。</p>
<figure>
    <img src="images/pic/frontend/gulp-use-05.jpg">
</figure>
<p>看起來感覺大功告成，其實操作幾次之後就會發現仍有不方便的地方，假如單純按照套件原先預設的指令工作，會發現每一次修改 scss 檔案，就必須重新輸入 <em>gulp sass</em>，這其實是非常沒有效率的，為了讓 <em>gulp sass</em> 能隨時被監聽，我們勢必需要改寫任務流的程式碼。</p>
<br>

<p class="step">
    <span>Step04. 新增 default 任務。</span>
</p>
<p><em>default</em> 方法能讓其任務內涵式內的 gulp 套件隨時被監聽，如此一來就不需要每修改一次檔案就得重新執行一次套件的任務命令，以 <em>gulp sass</em>為例，我們得找出這一段：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="javascript">gulp.task('sass:watch', function () {
    gulp.watch('scss/**/*.scss', ['sass']);
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>並將其改寫成：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="javascript">gulp.task('default', function () {
    gulp.watch('scss/**/*.scss', gulp.series('sass'));
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>然後只要在命令提示字元視窗輸入 <em>gulp</em> 指令即可：</p>
<figure>
    <img src="images/pic/frontend/gulp-use-06.jpg">
    <figcaption>一旦開始監聽，每儲存一次檔案，gulp 就會自動執行 default 裡的任務流。</figcaption>
</figure>
<p>大部分 gulp 套件的使用方法皆大同小異，有關個人常使用的套件會在後面幾篇陸續進行記錄，方便日後需要重新使用的時後能立即找到使用方式。</p>
<br>

<h2>gulpfile API 介紹：</h2>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://gulpjs.com/" target="_blank">gulp.js - The streaming build system</a></li>
    <li><a href="https://www.gulpjs.com.cn/" target="_blank">gulp.js - 中文</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10185420" target="_blank">Gulp 安裝與介紹</a></li>
    <li><a href="https://juejin.im/post/5c736fc4f265da2d943f6b8c" target="_blank">Gulp 快速入门</a></li>
    <li><a href="https://www.slideshare.net/sfismy/gulpjs" target="_blank">Gulp.js 自動化前端任務流程</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201503/gulp-2-compress-js-css.html" target="_blank">Gulp 學習 2 - 打包壓縮 CSS 與 JS</a></li>
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