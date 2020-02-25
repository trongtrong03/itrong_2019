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
                        <time>2019-10-15</time>
                        <h1>Notes05-- 淺說 Gulp API</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>儘管新版的 Gulp 新增多項 API 的用法，但是在舊版中，Gulp 基本的 API 只有四種，它們分別是：<em>gulp.task</em>、<em>gulp.src</em>、<em>gulp.dest</em> 與 <em>gulp.watch</em>，即使在新版 Gulp，這四種 API 仍非常廣泛地被運用到，所以本篇將來講講它們的用途。</p>
<p>為了有個實例做對照會更方便理解用法，我們把前篇安裝的 <em>gulp-sass</em> 程式碼拿出來重新檢視：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="javascript">gulp.task('sass', function () {
    return gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css'));
});
 
gulp.task('default', function () {
    gulp.watch('scss/**/*.scss', gulp.series('sass'));
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h2>gulp.task：</h2>
<p><em>gulp.task</em> 方法用來定義任務，它的語法是：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">gulp.task('taskName', taskFunction)</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p><em>taskName</em> 為任務名稱。</p>
<p><em>taskFunction</em> 為任務函數，該任務要執行的程式碼都會寫在這裡面。</p>
<br>

<h2>gulp.src</h2>
<p><em>gulp.src</em> 方法用來獲取來源文件的路徑，它的語法是：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="javascript">gulp.src(globs, [options])</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>它可以用數組的方式同時匹配多個文件，例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="javascript">gulp.src(['js/\*.js', 'css/*.css', '\*.html'])</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>gulp.dest</h2>
<p><em>gulp.dest</em> 方法用來寫入輸出文件的路徑，它的語法是：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="javascript">gulp.dest(directory, [options])</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>gulp.watch</h2>
<p><em>gulp.watch</em> 方法用來監聽文件，當文件發生變化（例如修改）後，便能執行相應的任務，例如文件編譯、壓縮等。</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="javascript">gulp.watch(globs, [options], [task])</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>然而，上面這個語法要注意的是，當字符串或數組作為 <em>task</em> 傳遞給 <em>watch</em> 時，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area07" class="code-text"><code class="javascript">gulp.task('default', function () {
    gulp.watch('scss/**/*.scss', ['sass']);
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<p>若執行 Gulp ，將回返「 "watch task has to be a function (optionally generated by using gulp.parallel or gulp.series)"」的錯誤訊息：</p>
<figure>
    <img src="images/pic/frontend/gulp-api-01.jpg">
</figure>
<p>意思是 <em>watch</em> 任務必須要是一個函數，我們可以選擇用 <em>gulp.parallel</em> 或 <em>gulp.series</em> 去生成。以前案為例，可將其改寫成：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="javascript">gulp.task('default', function () {
    gulp.watch('scss/**/*.scss', gulp.series('sass'));
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>

<br>
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