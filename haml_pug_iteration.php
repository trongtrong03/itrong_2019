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
                        <time>2019-10-26</time>
                        <h1>Notes14-- 迭代（Iteration）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 支援的迭代方式有兩種，分別是 <em>each</em> 及 <em>while</em>。</p>
<h2>each：</h2>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">ul
    each val in [1, 2, 3, 4, 5]
        li= val</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;1&lt;/li&gt;
  &lt;li&gt;2&lt;/li&gt;
  &lt;li&gt;3&lt;/li&gt;
  &lt;li&gt;4&lt;/li&gt;
  &lt;li&gt;5&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>迭代的對象可以是數字、字串及布林值，同時，迭代過程中也可以取得它們的索引值：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">ul
    each val, index in [1, 2, 3, 4, 5]
        li= index + ': ' + val</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;0: 1&lt;/li&gt;
  &lt;li&gt;1: 2&lt;/li&gt;
  &lt;li&gt;2: 3&lt;/li&gt;
  &lt;li&gt;3: 4&lt;/li&gt;
  &lt;li&gt;4: 5&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p><em>each</em> 除本身的用法外，還可加入 <em>else</em> 敘述句，當 <em>each</em> 對象的數組沒有參數可以迭代的時候，<em>else</em> 的內容就會顯示出來，舉例來說：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="yaml">- var values = [];
ul
    each val in values
        li= val
    else
        li 空的</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;空的&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<br>
<h2>while：</h2>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="yaml">- var n = 0;
ul
    while n < 3
        li= n++</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;0&lt;/li&gt;
  &lt;li&gt;1&lt;/li&gt;
  &lt;li&gt;2&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>


<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/iteration.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/iteration.html" target="_blank">Pug 中文文档</a></li>
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