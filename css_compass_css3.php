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
                        <time>2016-12-11</time>
                        <h1>Compass：About Compass CSS3</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Compass CSS3 是 COMPASS 內建的可使用 MIXIN 列表，他用途在重複引用某 SASS 檔案時，只輸出一次編譯效果，且它同時包含自動追加跨瀏覽器前綴的功能。</p>
<br>
<p>如何使用：</p>
<p class="step">
    <span>Step01. 於 SASS 檔案加上：</span>
</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">@import "compass/css3";
@import "compass/reset";    //如果需要樣式標準化可添加此段。</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 於要套用公式的 CSS 添加 <em>@include</em> 語法即可。</span>
    <span>例如：</span>
</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="scss">/* box-sizing */
@include box-sizing;

/* border-radius */
@include border-radius(100%);

/* animation */
@include animation(keyframes名稱 .7s both ease);
@include keyframes(keyframes名稱) {
    0% { opacity:0; }
    100% { opacity:1; }
}

/* transition */
@include transition(all .5s ease);

/* transform */
@include transform(translate3d(0px ,0px ,0px));
@include transform(translate3d(-180px ,0px ,0px) rotate(-45deg));

/* filter */
@include filter(blur(4px) brightness(1.3) saturate(1.5));</code></pre>
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