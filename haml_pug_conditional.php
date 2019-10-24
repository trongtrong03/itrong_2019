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
                        <time>2019-10-24</time>
                        <h1>Lesson10-- 變數與條件式（Conditional）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 變數宣告的方式為：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">- var name = value</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>舉例來說：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="yaml">- var int = 100
- var boolin = false
- var string = 'hello'

p= int
p= boolin
p= string</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;p&gt;100&lt;/p&gt;
&lt;p&gt;false&lt;/p&gt;
&lt;p&gt;hello&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>在往後的章節將會陸續學到透過 Javascript 多樣的表達式，協助我們寫模板網頁時更加便利，因此我們得先學習 Pug 變數的宣告語法是什麼。明白變數宣告的方法後，本篇先從基本的條件判斷式（<em>if</em>、<em>else</em>）開始談起。</p>
<br>
<p>以往我們用 Javascript 寫 <em>if</em> 判斷式的時候，會用圓括號（<em>()</em>）囊括敘述句的內容。而在 Pug，這個圓括號可以被省略不寫，當然如果要保留以做識別也不會對 Pug 編譯造成影響。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">- var A = { value: '哈囉!' }
- var B = true

if A.value
    h1= A.value
else if B
    h1= B
else
    h1 你看不見我!</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;h1&gt;哈囉!&lt;/h1&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/conditionals.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/conditionals.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://juejin.im/post/5b8aa21251882542b60ebe80" target="_blank">网页模板pug基本语法</a></li>
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