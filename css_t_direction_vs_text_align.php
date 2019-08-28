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
                        <time>2019-08-07</time>
                        <h1>direction V.S. text-align</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>direction</em> 與 <em>text-align</em> 都可以針對指定對象元素內的文本或並排元素進行對齊的設定，除了 <em>text-align</em> 可以水平置中對齊，這兩個屬性究竟還有什麼不一樣呢？</p>
<p>首先我們進行純文本方向的對照：</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="PMQyYj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css: text-align vs direction -1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PMQyYj/">
    css: text-align vs direction -1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>以純文本來說兩者並無顯著差異，然而有趣的是，<em>direction</em> 若文本是以特殊符號作結，該特特殊符號會挪移至設定方向最末端，所以我們才會看到 <em>direction: rtl</em> 範例中的情況。</p>

<p>接著是並排元素的比較：</p>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="jgZeWv" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css: text-align vs direction -2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/jgZeWv/">
    css: text-align vs direction -2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>方向靠左部份一樣沒有差別，但靠右（右至左）就很昭然了，並排元素在 <em>text-align: right</em> 設定下是以父元素區域右側作對齊基準，然後左至右依次排列顯示；<em>direction: rtl</em> 在意義上則是從父元素右側開始依次往左排序， 因此兩者乍看用途互相重疊，實際使用上仍有殊異之處。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.zhangxinxu.com/wordpress/2016/03/css-direction-introduction-apply/" target="_blank">CSS direction属性简介与实际应用</a></li>
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