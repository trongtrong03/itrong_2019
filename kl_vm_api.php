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
                        <time>2017-05-03</time>
                        <h1>什麼是 API？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>API，全名 Application Programming Interface，指的是應用程式介面。</p>
<p>API 是軟體與軟體之間的橋樑，例如自動販賣機的面板、或是手與紙之間的筆之類的概念，用較專業的廣義定義來講，「軟體提供的函式庫」即是所謂的 API。</p>
<p>一般提到 API，可能還會同時提到 SDK 與 KIT，SDK 指的是說明書，告知如何呼叫、使用 API；KIT 則是工具組，可能是簡易工具或現成範例，讓使用者無須寫程式也能控制軟體。</p>
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