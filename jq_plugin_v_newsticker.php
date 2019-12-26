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
                        <time>2019-01-24</time>
                        <h1>垂直切換跑馬燈（News Ticker）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;div class="news-wrap"&gt;
    &lt;ul class="news-item"&gt;
        &lt;li&gt;&lt;a href="#0"&gt;標題A&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#0"&gt;標題B&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#0"&gt;標題C&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    var news = null;
    function newsTicker() {
      $(".news-item")
        .filter(function(item) {
            return !$(this).is(news);
        })
        .each(function() {
            $(this)
            .find("li:first")
            .slideUp(function() {
                var newsitem = $(this).closest(".news-item");
                $(this)
                    .appendTo(newsitem)
                    .slideDown();
            });
        });
    }
    setInterval(newsTicker, 5000);

    $(function() {  
        $(".news-item").hover(
            function() {
                news = $(this);
            },
            function() {
                news = null;
            }
        ); // set timeout
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="vbOvJP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="jq-newsticker">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/vbOvJP/">
      jq-newsticker</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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