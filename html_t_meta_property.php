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
                        <time>2016-11-30</time>
                        <h1>寫給 Facebook 看的 SEO 標籤</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>property:og</em> 屬性主要是用來設定 Facebook 分享外部網站連結時，計畫呈現的資訊與內容。</p>
<p>og = Open Graph Protocol。</p>
<p>一旦使用此標籤，即意味著本網站已同意被其他社群網站（如 Facebook）引用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta property="og:title" content="標題" /&gt;
&lt;meta property="og:site_name" content="網站名稱" /&gt;
&lt;meta property="og:description" content="網頁描述" /&gt;
&lt;meta property="og:type" content="類型" /&gt;
&lt;meta property="og:url" content="網址" /&gt;
&lt;meta property="og:image" content="影像網址" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>下列這兩者為管理者進行分析的功能（流量、按讚數）：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;meta property="fb:app_id" content="填入應用程式 ID" /&gt;
&lt;meta property="fb:admins" content="管理者 fid"/&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
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