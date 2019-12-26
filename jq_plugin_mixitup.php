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
                        <time>2019-03-26</time>
                        <h1>項目篩選（MixItUp）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://www.kunkalabs.com/mixitup/" target="_blank">MixItUp</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="filter-wrap"&gt;
    &lt;div class="filter-menu"&gt;
        &lt;input type="text" class="filter-input" placeholder="請輸入關鍵字"&gt;
        &lt;button class="filter" data-filter="all"&gt;All&lt;/button&gt;
        &lt;button class="filter" data-filter=".dataA"&gt;A&lt;/button&gt;
        &lt;button class="filter" data-filter=".dataB"&gt;B&lt;/button&gt;
        &lt;button class="filter" data-filter=".dataC"&gt;C&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="filter-list"&gt;
        &lt;div class="filter-item mix dataA"&gt;
            &lt;h2 class="title"&gt;A1&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataA"&gt;
            &lt;h2 class="title"&gt;A2&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataC"&gt;
            &lt;h2 class="title"&gt;C1&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataA"&gt;
            &lt;h2 class="title"&gt;A3&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataB"&gt;
            &lt;h2 class="title"&gt;B1&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataC"&gt;
            &lt;h2 class="title"&gt;C2&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataB"&gt;
            &lt;h2 class="title"&gt;B2&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataC"&gt;
            &lt;h2 class="title"&gt;C3&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class="filter-item mix dataB"&gt;
            &lt;h2 class="title"&gt;B3&lt;/h2&gt;
        &lt;/div&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $(".filter-wrap").mixItUp();
        var inputText;
        var $matching = $();

        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        $(".filter-input").keyup(function(){
            delay(function(){
                inputText = $(".filter-input").val().toLowerCase();
                if ((inputText.length) > 0) {            
                    $( '.mix').each(function() {
                        $this = $("this");
                        if($(this).children('.title').text().toLowerCase().match(inputText)) {
                            $matching = $matching.add(this);
                        }
                        else {
                            $matching = $matching.not(this);
                        }
                    });
                        $(".filter-wrap").mixItUp('filter', $matching);
                }
                else {
                    $(".filter-wrap").mixItUp('filter', 'all');
                }
            }, 200);
        });
    })
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="css"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="css">.filter-item {
    display: none;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>※ 僅列出必要 CSS 屬性樣式，其餘自行添加。</p>
<br>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="GebNBX" style="height: 480px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="jq-mixitup">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/GebNBX/">
      jq-mixitup</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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