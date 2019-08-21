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
                        <time>2019-08-20</time>
                        <h1>input 的提示訊息（placeholder）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>適用以下 <em>input</em> type 類型：<br>
text、search、url、telephone、email、password。
</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">input::-webkit-input-placeholder { /* CSS */ }
input::-moz-placeholder { /* CSS */ }
input:-ms-input-placeholder { /* CSS */ }
input:-moz-placeholder { /* CSS */ }</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="JbNLwx" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="CSS-placeholder" class="codepen">See the Pen <a href="http://codepen.io/itrong/pen/JbNLwx/">CSS-placeholder</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
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