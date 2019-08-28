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
                        <time>2017-01-20</time>
                        <h1>SCSS：mixin vs. extend</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>mixin：</h2>
<ol class="decimal">
    <li>主要用於記憶很多不同定義、段落的程式碼。</li>
    <li>可下參數定義。</li>
    <li>承 01，相同的定義樣式，<em>mixin</em> 較浪費資源。</li>
</ol>
<h2>extend：</h2>
<ol class="decimal">
    <li>主要用於合併相同程式碼。</li>
    <li>承 01，相同的定義樣式，<em>extend</em> 較節省資源。</li>
</ol>
<br>
<p>相同的定義樣式，如果使用 <em>mixin</em>，css 轉換時會於每個 class 底下加上定義樣式；如果使用 <em>extend</em>，css 轉換時會將含有該定義樣式的 class 全部整合在一起（用「,」分隔），並只寫入一次定義碼。</p>
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