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
                        <time>2016-12-05</time>
                        <h1>完成載入後執行（callback）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>顧名思義，<em>callback</em> 函數將在動畫完成加載後執行，通常是在 <em>speed</em> 後方再包一層 <em>function</em> 來表示 <em>callback</em>。</p>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    $(selector).函數(speed,callback);
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $("button").click(function(){
            $("#div-1").slideUp(500, function(){
                $("#div-2").slideDown(500);
            });
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="KNQOeP" data-default-tab="js,result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-callback" class="codepen">See the Pen <a href="http://codepen.io/itrong/pen/KNQOeP/">JQ-callback</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
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