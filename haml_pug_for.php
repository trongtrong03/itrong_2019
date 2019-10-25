<!doctype html>
<html class="pages html view">
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
                        <time>2019-10-25</time>
                        <h1>Lesson13-- 迴圈（For）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 的 <em>for</em> 迴圈使用方式為下：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">- for (value)</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="yaml">- for (var x = 0; x < 3; x++)
    a(href='###') Link</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;a href="###"&gt;Link&lt;/a&gt;
&lt;a href="###"&gt;Link&lt;/a&gt;
&lt;a href="###"&gt;Link&lt;/a&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p><em>for</em> 迴圈功能可以直接和元素標籤的程式碼區塊摻雜一塊兒混用，例如 <em>ul</em> 嵌套裡的 <em>li</em>：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">ul
    - for (var x = 0; x < 3; x++)
        li item</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;item&lt;/li&gt;
  &lt;li&gt;item&lt;/li&gt;
  &lt;li&gt;item&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/code.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/code.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://medium.com/anna-hsaio-%E5%89%8D%E7%AB%AF%E9%96%8B%E7%99%BC%E8%A8%98/pug%E5%B0%8F%E5%AD%B8%E5%A0%82-%E9%97%9C%E6%96%BCpug%E7%9A%84%E5%A5%BD%E7%94%A8%E5%B0%8F%E5%85%AC%E5%BC%8F-8ba5096dd341" target="_blank">Pug小學堂|關於pug的好用小公式</a></li>
</ul>
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