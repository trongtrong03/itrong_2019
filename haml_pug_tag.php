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
                        <time>2019-10-21</time>
                        <h1>Lesson05-- 元素標籤（Tag）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>雖然於<a href="haml_pug_text.php">〈Lesson03-- 純文本（Plain Text）〉</a>一文中，我們已學會在 Pug 如何渲染元素標籤，本篇目的則是再次整理元素標籤的使用方法，已經學會的看倌可直接跳過，或是當作複習再看一遍。</p>
<p>正常情況下，我們會在純文本開頭添加元素標籤的名稱，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">p This is text.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;p&gt;This is text.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>倘若是有嵌套關係的元素標籤群組，例如 <em>ul</em>、<em>table</em> ...等，我們可以利用縮進方式來表達元素之間的嵌套關係。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">ul
    li item01
    li item02
    li item03
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;item01&lt;/li&gt;
  &lt;li&gt;item02&lt;/li&gt;
  &lt;li&gt;item03&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>有些元素標籤沒有結束標籤（也就是自閉合標籤），例如 <em>meta</em>、<em>img</em>、<em>br</em> 等，Pug 進行編譯時都會聰明地自動判別，無需特地加上結尾符。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
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