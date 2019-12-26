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
                        <time>2019-05-13</time>
                        <h1>複製區域文字（Copy）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://www.codeseek.co/mel/jquerycopiq-VzKKjz" target="_blank">Codeseek</a></p>
<p>前陣子介紹過一套用純 jacascript 撰寫的複製套件，有別與其不同的特色是，本款 jQuery 套件可實現單一頁面同時存在複數個複製區域，利用遍歷的概念，僅擷取包住複製按鈕的指定元素區域內的文字，在單一頁面如要使用多個複製區塊來說相當簡單便利。</p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://rawgit.com/melbon/jquery.copiq/master/jquery.copiq.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="content"&gt;
    &lt;div class="text"&gt;
        &lt;p&gt;文字內容&lt;/p&gt;
    &lt;/div&gt;
    &lt;button class="copy-btn" data-text="COPY" data-text-copied="COPIED"&gt;
        &lt;span&gt;COPY&lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $('.copy-btn').copiq({
        parent: '.content',
        content: '.text',
        onSuccess: function($element, source, selection) {
        $('span', $element).text($element.attr("data-text-copied"));
            setTimeout(function() {
                $('span', $element).text($element.attr("data-text"));
            }, 2000);
        }
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p><em>parent</em> 指的是複製按鈕（<em>.copy-btn</em>）要遍歷尋找的父元素。<br><em>content</em> 則是要被複製的文字區域目標。</p>
<br>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="vwXzLx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: copy text">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/vwXzLx/">
      jq-plugin: copy text</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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