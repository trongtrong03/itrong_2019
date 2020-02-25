<!doctype html>
<html class="pages res view">
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
                        <time>2017-12-01</time>
                        <h1>什麼是 App icon？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>導入 App icon 程式碼，可於行動裝置環境下將網頁儲存於桌面時，產生客製化的 APP 圖示。如果沒有設定圖示，預設則顯示網頁的縮圖，視覺上相當不美觀。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;link rel="apple-touch-icon" href="圖片路徑"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;link rel="apple-touch-icon" href="images/appicon/icon48.png"&gt;
&lt;link rel="apple-touch-icon" sizes="72×72" href="images/appicon/icon72.png"&gt;
&lt;link rel="apple-touch-icon" sizes="96×96" href="images/appicon/icon96.png"&gt;
&lt;link rel="apple-touch-icon" sizes="144×144" href="images/appicon/icon144.png"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>注意：</p>
<ol class="decimal">
    <li>尺寸使用正方形。</li>
    <li>盡量不使用圓角。（iOS 會自動產生圓角效果）</li>
    <li>減少特效的應用。（iOS 會自動產生陰影和反射光的效果）</li>
</ol>
<p>概念文章：<br><a href="https://www.techbang.com/posts/14540-how-should-a-good-app-icon-design-martin-leblanc-teach-you-6-tips" target="_blank">一個優秀的 App icon 應該如何設計？</a></p>
<p>線上工具：<br><a href="http://romannurik.github.io/AndroidAssetStudio/icons-launcher.html#foreground.type=clipart&foreground.clipart=android&foreground.space.trim=1&foreground.space.pad=0.25&foreColor=rgba(96%2C%20125%2C%20139%2C%200)&backColor=rgb(68%2C%20138%2C%20255)&crop=0&backgroundShape=square&effects=none&name=ic_launcher" target="_blank">線上一次製作 Android APP 各種尺寸圖示</a></p>
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