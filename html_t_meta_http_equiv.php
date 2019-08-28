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
                        <time>2019-08-22</time>
                        <h1>&lt;meta&gt; 之 http-equiv 屬性</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>舉凡網頁編碼（content-type）、自動更新（refresh）、樣式優先度（default-style）...等功能，都可透過 <em>http-equiv</em> 屬性來達成，因為 HTML5 將編碼方式另外拉出來寫，使得 <em>http-equiv</em> 不再是唯一書寫方式。</p>
<p>基本結構是長這樣子的：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta http-equiv="項目名稱" content="值"; /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h2>屬性一覽：</h2>
<p>定義網頁編碼，在 HTML5 有更簡潔且舊版本瀏覽器也適用的寫法：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;meta http-equiv="Content-Type" content="text/html"; charset="編碼名稱"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<br>

<p>設定網頁自動重新整理網頁的時間間隔，建議不要使用，因為使用者無法自行控制。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;meta http-equiv="refresh" content="數值"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>

<p>禁止瀏覽器用快取開啟網頁。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;meta http-equiv="Pragma" content="no-cache"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<br>

<p>強制在單一視窗中開啟網頁。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;meta http-equiv="windows-Target" content="_top"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<br>

<p>告訴搜尋引擎此網站屬於何種語言類型。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;meta http-equiv="content-language" content="zh-tw"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>content-language常見的中文語言代碼：</p>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">代碼</span>
        <span class="t-flex4">國家</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">zh-tw</span>
        <span class="t-flex4">台灣</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">zh-hk</span>
        <span class="t-flex4">香港</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">zh-cn</span>
        <span class="t-flex4">中國</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">zh-sg</span>
        <span class="t-flex4">新加坡</span>
    </div>
</div>
<p><a href="http://www.dreamdu.com/xhtml/names_of_countries/" target="_blank">國家代碼表</a></p>

<p>關閉圖片控制選單。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;meta http-equiv="imagetoolbar" content="no" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<br>

<p>設置 IE 兼容模式。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area08" class="code-text"><code class="html">&lt;meta http-equiv="X-UA-Compatible" content="IE=Edge"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>兼容複數的版本，彼此間用分號隔開：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area09" class="code-text"><code class="html">&lt;meta http-equiv="X-UA-Compatible" content="IE=7; IE-9"/&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<p>保持使用最新版本：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area10" class="code-text"><code class="html">&lt;meta http-equiv="X-UA-Compatible" content="IE=Edge"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<p>強制 IE 模擬為 Google chrome 瀏覽器環境：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area11" class="code-text"><code class="html">&lt;meta http-equiv="X-UA-Compatible" content="chrome=1"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>

<h2>懶人包寫法：</h2>
<p>若琳瑯滿目的語法令你眼花撩亂（好啦，個人也是有點看到昏頭），底下直接提供一條可應付多數情境的簡便寫法：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area12" class="code-text"><code class="html">&lt;meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area12">
        <span>COPY</span>
    </button>
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