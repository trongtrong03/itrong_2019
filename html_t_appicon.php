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
                        <time>2016-11-23</time>
                        <h1>App icon 的語法教學</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>關於什麼是 App icon，可以見 <a href="kl_wf_appicon.php" target="_blank">〈什麼是 App icon？〉</a> 這篇文章的介紹，本篇將只單純記錄語法的使用方法。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;link rel="apple-touch-icon" href="圖片路徑"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>置於 <em>&lt;head&gt;&lt;/head&gt;</em> 之間。</p>

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

<h2>常見尺寸列表：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">尺寸</span>
        <span class="t-flex7">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">58 x 58</span>
        <span class="t-flex7">iPhone</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">72 x 72</span>
        <span class="t-flex7">ipad</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">114 x 114</span>
        <span class="t-flex7">iPhone4</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">144 x 144</span>
        <span class="t-flex7">new iPad</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">512 x 512</span>
        <span class="t-flex7">app store</span>
    </div>
</div>
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