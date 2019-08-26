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
                        <time>2016-12-18</time>
                        <h1>解決 font-family 使用中文字型導致同步出現錯誤碼的問題</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>有兩種方式：</p>
<ol class="decimal">
    <li>在 Sass 第一行加上 <em>@charset "UTF-8"</em>。</li>
    <li><em>config.rb</em> 加上「<em>Encoding.default_external = "utf-8"</em>」。</li>
</ol>
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