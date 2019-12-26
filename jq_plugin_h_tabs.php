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
                        <time>2019-01-21</time>
                        <h1>水平切換頁籤（Horizontal Tabs）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;div class="tabs-wrap"&gt;
    &lt;div class="tabs-nav"&gt;
        &lt;ul&gt;
            &lt;li class="tabs-item"&gt;item01&lt;/li&gt;
            &lt;li class="tabs-item"&gt;item02&lt;/li&gt;
            &lt;li class="tabs-item"&gt;item03&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="tabs-main"&gt;
        &lt;div class="tabs-content"&gt;內容1&lt;/div&gt;
        &lt;div class="tabs-content"&gt;內容2&lt;/div&gt;
        &lt;div class="tabs-content"&gt;內容3&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(function(){
        $(".tabs-item:first").addClass("active");
        $(".tabs-content:first").addClass("active");
        $(".tabs-item").click(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
            $(".tabs-content").siblings().removeClass("active");  
            $(".tabs-content").eq($(this).index()).addClass("active");
            $(".receive-content").removeClass("active");
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="exNPNj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="jq-tabs">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/exNPNj/">
      jq-tabs</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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