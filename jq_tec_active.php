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
                        <time>2017-11-23</time>
                        <h1>實現項目間的 class 轉移效果</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在同一組項目間（例如導覽列）透過滑鼠點擊轉移 class，以實現樣式切換的效果是網頁設計裡很常見的功能。具體實現的方式倒也不困難，主要是當按下選項時，先清除同層所有選項指定樣式的 class，接著再給該選項添加該 class 即可。</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $('.nav li').on('click', function() {
            $(this).parent().find('li.active').removeClass('active');
            $(this).addClass('active');
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="default" data-default-tab="result" data-user="itrong" data-slug-hash="JOZbpj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="JQ-effects-clickactive">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/JOZbpj">
      JQ-effects-clickactive</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
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