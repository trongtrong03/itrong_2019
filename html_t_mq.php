<?php require_once 'include/_viewhead.php' ?>
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
                        <time>2019-08-23</time>
                        <h1>HTML 的 Media Queries 寫法</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>之前有介紹過 CSS 的 <a href="css_t_media_queries.php" target="_blank">Media Queries</a> 實作方法，這篇則是要講講寫在 HTML 檔案裡的做法。</p>
<p>首先必須引入 <em>&lt;meta&gt;</em> 標籤的 <em>name="viewport"</em> 屬性，<em>media</em> 才有效果，有關 <em>meta name="viewport"</em> 的詳細介紹，可參照 <a href="html_t_meta_name.php" target="_blank">〈&lt;meta&gt; 之 viewport 屬性〉</a>。</p>

<p>完整的定義與法為下：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>除此之外，還需要載入 CSS 設定，並設定 Media Queries 的套用範圍。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;link rel="stylesheet" href="CSS 路徑" media="screen 範圍"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;link rel="stylesheet" href="all.css" media="screen"&gt;
&lt;link rel="stylesheet" href="a.css" media="screen and (max-width: 767px)"&gt;
&lt;link rel="stylesheet" href="b.css" media="screen and (min-width: 768px) and (max-width: 979px)"&gt;
&lt;link rel="stylesheet" href="c.css" media="screen and (min-width: 1200px)"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>這段程式碼意思就是，當畫面（viewport）不超過 <em>767px</em> 的時候，套用 a 這支 css；當畫面介於 <em>768px</em> 與 <em>979px</em> 之間，套用 b.css；而在畫面在 <em>1200px</em> 以上時，則會讀取 c.css。至於 all.css ，則是始終都會被讀取。</p>

<p>若要支援支援 IE8 以下瀏覽器，可引入：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;!--[if lt IE 9]&gt;
&lt;script src="//html5shiv.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;
&lt;![endif]--&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="http://www.w3school.com.cn/tags/att_a_media.asp" target="_blank">w3school</a></li>
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