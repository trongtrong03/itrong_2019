<!doctype html>
<html class="pages css view">
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
                        <time>2019-08-21</time>
                        <h1>drop-shadow VS box-shadow</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>drop-shadow</em> 與 <em>box-shadow</em> 皆是 CSS 添加陰影屬性的效果，在由 CSS 設置的形狀可能看不太出差異，但是在透明圖片就能看出端倪。</p>
<br>
<h2>drop-shadow：</h2>
<p>可以製作和物件不透明區域完全相同形狀的陰影。</p>
<br>
<h2>box-shadow：</h2>
<p>只能製作矩形的陰影。</p>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="xgJJoG" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="drop-shadow VS box-shadow" class="codepen">See the Pen <a href="http://codepen.io/itrong/pen/xgJJoG/">drop-shadow VS box-shadow</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
</code>
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