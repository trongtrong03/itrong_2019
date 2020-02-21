<!doctype html>
<html class="pages js view">
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
                        <time>2017-07-14</time>
                        <h1>常見的返回頂部按鈕</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;button id="gotop" class="btn-top"&gt;top&lt;/button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 240) {
                $("#gotop").fadeIn();
            } else {
                $("#gotop").fadeOut();
            }
        });
        $("#gotop").click(function() {
            $('body, html').animate({
                scrollTop: 0
            }, 500);
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>其中關於這段：</p>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="javascript">if ($(this).scrollTop() > 240) {
    $("#gotop").fadeIn();
} else {
    $("#gotop").fadeOut();
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>這段程式碼用來實現當網頁卷軸下滑超過 <em>240px</em> 時，按鈕就會漸變淡入，反之則漸變隱藏，數值可依需求自由調整。</p>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="MoxypL" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-gotop" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/MoxypL/">JQ-gotop</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
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