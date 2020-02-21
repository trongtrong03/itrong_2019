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
                        <time>2017-04-10</time>
                        <h1>實現 input 的提示文字（placeholder）變色效果</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>本效果 jQuery 主要結合 <em>focus</em>（聚焦） 與 <em>blur</em>（失焦）的概念，觸發 <em>.addClass()</em> / <em>.removeClass()</em> 函數，實現輸入框提示文字變色的效果，具體的程式碼撰寫方法如下：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $('input[type="text"], input[type="password"]').each(function(){
            $(this).focus(function(){
                $(this).addClass('placeholder');
            });
            $(this).blur(function(){
                $(this).removeClass('placeholder');
            });
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="default" data-default-tab="result" data-user="itrong" data-slug-hash="gmVxOZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-placeholder">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/gmVxOZ">
      jq-placeholder</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>如果要讓點擊輸入框後提示文字自動消失，可巧用 <em>RGBA</em> 透明度設為 0 的方式來達到相同的效果。</p>
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