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
                        <time>2017-07-09</time>
                        <h1>兩層式摺疊列表（Accordion）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;ul&gt;
    &lt;li&gt;
        &lt;span class="title"&gt;Title A&lt;/span&gt;
        &lt;div class="content"&gt;
            &lt;div&gt;content&lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;span class="title"&gt;Title B&lt;/span&gt;
        &lt;div class="content"&gt;
            &lt;div&gt;content&lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(".title").on("click", function(e){
        if($(this).parent().has(".content")) {
            e.preventDefault();
        }
        if(!$(this).hasClass("active")) {
            $(".content").slideUp();
            $(".title").removeClass("active");
            $(this).next(".content").slideDown();
            $(this).addClass("active");
        }
        else if($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).next(".content").slideUp();
        }
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="default" data-default-tab="result" data-user="itrong" data-slug-hash="weOBOe" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="JQ-收合選單">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/weOBOe">
      JQ-收合選單</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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