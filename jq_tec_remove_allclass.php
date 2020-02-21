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
                        <time>2018-05-01</time>
                        <h1>移除指定元素所有 class 的幾種方法</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>透過 jQuery 移除指定對象 class 最簡單又常見的方法為 <em>.removeClass()</em>，但除此之外其實還有好幾種方法可以達到一樣的效果，讓我們繼續往下看。</p>
<h2>方法一：.removeClass()</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    $(selector).removeClass();
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="eaNOop" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: remove all class">
        <span>See the Pen <a href="https://codepen.io/itrong/pen/eaNOop/">
        jq-tec: remove all class</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<h2>方法二：.removeAttr("class")</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(selector).removeAttr("class");
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="xNGxpp" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: remove all class-2">
        <span>See the Pen <a href="https://codepen.io/itrong/pen/xNGxpp/">
        jq-tec: remove all class-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<h2>方法三：.attr("class", "")</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(selector).attr("class", "");
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="RmPwvO" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: remove all class-3">
        <span>See the Pen <a href="https://codepen.io/itrong/pen/RmPwvO/">
        jq-tec: remove all class-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<h2>方法四：[0].className = ""</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;script&gt;
    $(selector)[0].className = "";
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="Jqdoja" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: remove all class-4">
        <span>See the Pen <a href="https://codepen.io/itrong/pen/Jqdoja/">
        jq-tec: remove all class-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<p>最後補充一個純 javascript 的用法：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;script&gt;
    document.getElementById('div').className = '';
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="Ezjamd" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: remove all class-5">
        <span>See the Pen <a href="https://codepen.io/itrong/pen/Ezjamd/">
        jq-tec: remove all class-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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