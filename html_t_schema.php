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
                        <h1>Schema 標記（item...）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Schema 是一份共享的詞彙表，用於標記網頁內容，讓搜尋引擎更能精確地掌握到資訊，進而加強 SEO 的功用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;div&gt;
    &lt;h1&gt;《奇異果博士》&lt;/h1&gt;
    &lt;span&gt;類型：動作&lt;/span&gt;
    &lt;span&gt;演員：奇異果、蘋果、鳳梨&lt;/span&gt;
    &lt;span&gt;&lt;a href="#0"&gt;搶先看&lt;/a&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>上面是平常常見的語法，瀏覽者雖然看的懂內容，但對搜尋引擎來說理解有限，Schema 的問世便是幫助它們理解語意。<br>舉例來說：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div itemscope itemtype="http://schema.org/Movie"&gt;
    &lt;h1 itemprop="name"&gt;《奇異果博士》&lt;/h1&gt;
    &lt;span itemprop="genre"&gt;類型：動作&lt;/span&gt;
    &lt;span itemprop="director"&gt;演員：奇異果、蘋果、鳳梨&lt;/span&gt;
    &lt;span itemprop="trailer"&gt;&lt;a href="#0"&gt;搶先看&lt;/a&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h2>Schema 的屬性：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex7">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">itemscope</span>
        <span class="t-flex7">表示此標籤所在的區域及包含在其底下的階層，是 itemtype 某項特定的訊息。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">itemtype</span>
        <span class="t-flex7">決定 Schema 的型態，若不加此行（意即單只有 <em>itemscope</em>），則會被認為是未知分類，如此對搜尋引擎的幫助非常有限。<br>可參考官網釋出的列表：<a href="http://schema.org.cn/CreativeWork.html" target="_blank">Schema CreativeWork</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">itemprop</span>
        <span class="t-flex7">為每個條目增加屬性，每個 <em>itemtype</em> 可使用的 <em>itemprop</em> 也許會有些不同。</span>
    </div>
</div>

<p>Schema 範例（LocalBusiness）：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;div itemscope itemtype="http://schema.org/LocalBusiness"&gt;
    &lt;h1 itemprop="name"&gt;老王煎餃&lt;/h1&gt;
    &lt;p itemprop="description"&gt;手工現包現做，內餡紮實又多汁，挑戰幸福味蕾的極限。&lt;/p&gt;
    &lt;p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"&gt;
        &lt;span itemprop="addressRegion"&gt;台中市&lt;/span&gt;
        &lt;span itemprop="addressLocality"&gt;龍井區&lt;/span&gt;
        &lt;span itemprop="streetAddress"&gt;這條路那條巷一段一弄一號&lt;/span&gt;&lt;/p&gt;
    &lt;p itemprop="openingHours"&gt;營業時間：平日9:00-17:00&lt;/p&gt;
    &lt;p itemprop="telephone"&gt;聯絡電話: (03) 388-3887&lt;/p&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h2>time 和 datetime：</h2>
<p>表示時間日期的格式有很多種，搜尋引擎本身其實並不是很容易地能判別，因此產生了<time>標籤與 datetime 屬性，使搜尋引擎得以明確地掌握時間。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;time datetime="2016-12-01"&gt;12/01/2016&lt;/time&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>範例：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;p itemprop="openingHours" datetime="Mo,Tu,We,Th,Fr 9:00-17:00"&gt;營業時間：平日 9:00 - 17:00&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="http://schema.org.cn/docs/getstarted.html" target="_blank">Schema.org 中文站</a></li>
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