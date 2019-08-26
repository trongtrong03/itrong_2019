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
                        <time>2019-09-03</time>
                        <h1>Flexbox 使用分散水平對齊之於最後一行的改善方法</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.w3cplus.com/css/fighting-the-space-between-inline-block-elements" target="_blank">如何解决inline-block元素的空白间距</a></li>
    <li><a href="https://www.puritys.me/docs-blog/article-259-%E7%A7%BB%E9%99%A4-CSS-inline-block-%E7%A9%BA%E7%99%BD.html" target="_blank">移除 CSS inline-block 空白</a></li>
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