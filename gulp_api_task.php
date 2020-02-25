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
                        <h1>Notes06-- gulp.task 於 Gulp4.0 的改動</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Gulp4.0 的發佈，除了修復安全漏洞外，最大變革莫過於 API 使用方式的改變，不僅從原本的四個 API 一口氣暴增到十餘個，同時也讓任務（task）方法有了更加便捷易懂的表現方式。</p>
<p>這是過往 Gulp 任務流的定義方式：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="javascript">gulp.task('compile-css', function() {
    // TODO 
});
gulp.task('compile-js', function() {
    // TODO 
});
gulp.task('webserver', function() {
    // TODO 
});
...
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>在 Gulp4.0，則演變為這樣表示：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">function compileCss()  {
    // TODO
}
function compileJs()  {
    // TODO
}
function webserver()  {
    // TODO
}
...

exports.compileCss = compileCss;
exports.compileJs = compileJs;
exports.webserver = webserver;
...
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>gulp 操作完成時，我們需要注意 <em>task</em> 函式結尾必須下達 <em>cb</em>（callback）或 <em>return</em> 來告知 gulp 該任務已經完成，倘如需要用到 <em>watch</em> 監聽文件的變更，就更必須注意這點，否則監聽將無法持續作用。</p>
<p><em>cb()</em>：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="javascript">function taskname(cb) {
    // TODO
    cb();
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p><em>return</em>：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="javascript">function taskname() {
    return TODO;
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>兩種方法擇一使用即可。</p>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="javascript">function compileCss()  {
    return gulp.src('scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            cascade: false
        }))  // 自動編譯前綴
        .pipe(concat('style.css'))  // 將所有 scss 合併輸出為單一檔案
        .pipe(gulp.dest('css'));
}
exports.compileCss = compileCss;

gulp.task('default', function () {
    gulp.watch('scss/**/*.scss', gulp.series('compileCss'))
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.gulpjs.com.cn/docs/api/task/" target="_blank">gulp.js - 中文</a></li>
    <li><a href="https://juejin.im/post/5d066486e51d455071250b05" target="_blank">Gulp4.0入门指南</a></li>
    <li><a href="https://blog.skk.moe/post/update-gulp-to-4/#%E5%AE%89%E8%A3%85-gulp-4-0" target="_blank">升级到 gulp 4.0</a></li>
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