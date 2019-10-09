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
                        <time>2019-10-07</time>
                        <h1>Lesson01-- Gulp 基本介紹</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<figure>
    <img src="images/pic/frontend/gulp-intro-01.jpg">
    <figcaption><a href="https://gulpjs.com/" target="_blank">Gulp 官方網站</a></figcaption>
</figure>
<p>隨著網路的迅速發展，網頁技術開發需求也越來越龐大，就前端而言，核心雖然仍圍繞於 HTML、CSS、Javascript 這三大構成元素，但各自細分的使用技術可謂是五花八門，儘管這些技術可以幫助開發者們實現各式各樣的效果及需求，相對卻也對網站運行帶來不小的負擔，為了同時兼顧網頁優化及程式技術統合，各種「前端自動化建構工具」如雨後春筍般相繼問世，所謂的建構工具指的是根據原始碼自動生成文件的一種程序，其過程包含打包、編譯、壓縮與測試，而本學習系列主角──「Gulp」，便是廣為人知的其中一款建構工具。</p>
<br>

<h2>用途：</h2>
<p>和其他多數自動化工具相似，Gulp 可以做到以下這些事情：</p>
<ol class="decimal">
    <li>編譯 SASS、<a href="https://zh.wikipedia.org/wiki/CoffeeScript" target="_blank">Coffeescript</a>。</li>
    <li>壓縮文件，例如 CSS、Javascript...等，甚至影像圖檔也可以壓縮。</li>
    <li>合併文件。</li>
    <li>即時預覽畫面（Livereload）。</li>
    <li>開源的 Task runner，可自主安裝所需的工具套件。</li>
</ol>
<p>在搜尋引擎顯示 Gulp 的官方文件搜尋結果時，我們明確可以看到其大名後方，添加了一串「The streaming build system」文字，顯然是 Gulp 特別強調給使用者的訊息，用中文來解讀這段英文就是「一套文件串流的建構系統」的意思，它就像一條河流，從上游（Source）開始，一個階段（Task）一個階段地向下一個步驟前進，直到下游的最終目的地（Destination）。有些自動化工具（例如 Grunt）無法有效串聯不同插件之間的工作，往往容易陷入檔案「讀取（Read）、修改（Modify）、寫入（Write）」的循環，見下圖：</p>
<figure>
    <img src="images/pic/frontend/gulp-intro-02.jpg">
    <figcaption>Grunt 的編譯流程。（引用自 <a href="https://www.cnblogs.com/chyingp/p/gulp-introduction.html" target="_blank">chyingp- gulp：入门简介</a>）</figcaption>
</figure>
<p>但是在 Gulp 的概念裡，讀取（Read）和寫入（Write）文件分別只要處理一次就夠了，中間修改（Modify）的過程應全部串連在一起，流程如下：</p>
<figure>
    <img src="images/pic/frontend/gulp-intro-03.jpg">
    <figcaption>Gulp 的編譯流程。（引用自 <a href="https://www.cnblogs.com/chyingp/p/gulp-introduction.html" target="_blank">chyingp- gulp：入门简介</a>）</figcaption>
</figure>
<p>儘管看起來插件用量都很多，但在執行效率上，Gulp 卻遠遠高於 Grunt 的編譯方式。</p>
<br>

<h2>優點：</h2>
<p>看懂 Gulp 文件流的作業方式，我們可以得到其具備以下這些優點：</p>
<ol class="decimal">
    <li>易於使用。</li>
    <li>建構快速。</li>
    <li>學習簡單。</li>
</ol>
<br>

<p>在下一篇我們將進入如何前置安裝 Gulp 的學習記錄。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://gulpjs.com/" target="_blank">gulp.js - The streaming build system</a></li>
    <li><a href="https://www.gulpjs.com.cn/" target="_blank">gulp.js - 中文</a></li>
    <li><a href="https://www.cnblogs.com/chyingp/p/gulp-introduction.html" target="_blank">gulp：入门简介</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10185420" target="_blank">Gulp 安裝與介紹</a></li>
    <li><a href="https://juejin.im/post/5c736fc4f265da2d943f6b8c" target="_blank">Gulp 快速入门</a></li>
    <li><a href="https://www.jianshu.com/p/196d3eadd6b5" target="_blank">gulp 自动化构建工具</a></li>
    <li><a href="https://juejin.im/entry/5a4470f85188252b145b5742" target="_blank">前端构建工具之争——Webpack vs Gulp 谁会被拍死在沙滩上</a></li>
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