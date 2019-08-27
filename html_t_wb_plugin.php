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
                        <time>2017-09-19</time>
                        <h1>微博分享按鈕</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js"&gt;&lt;/script&gt;
&lt;wb:share-button addition="simple" type="button" picture_search="false" language="zh_tw"&gt;&lt;/wb:share-button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="http://open.weibo.com/sharebutton" target="_blank">微博分享按钮</a></li>
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