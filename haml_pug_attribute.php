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
                        <h1>Lesson04-- 屬性（Attribute）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 對於元素屬性的運用與 HTML 本身語法類似，在 Pug 中，屬性的使用方法以圓弧括號（<em>()</em>）來表示。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">a(href='https://www.google.com.tw') Google</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;a href="https://www.google.com.tw"&gt;Google&lt;/a&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>若元素同時存在多個屬性，則以空格區隔：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">a(href='https://www.google.com.tw' target='_blank') Google</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>屬性並非都得擠在同一行不可，也可以隔行表示以增加易讀性：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">a(
    href='https://www.google.com.tw' 
    target='_blank'
) Google</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;a href="https://www.google.com.tw" target="_blank"&gt;Google&lt;/a&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<p>以下介紹幾種較常用到，且也有對應方便 Pug 撰寫的幾個屬性語法：</p>
<h2>style：</h2>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="yaml">button(style={color: 'red', background: 'green'}) btnName</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;button style="color:red;background:green;"&gt;btnName&lt;/button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<h2>ID：</h2>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="yaml">button#idName btnName</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="html">&lt;button id="idName"&gt;btnName&lt;/button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>

<h2>class：</h2>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="yaml">button.className btnName</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area11" class="code-text"><code class="html">&lt;button class="className"&gt;btnName&lt;/button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>
<p>如果同時存在複數的 class：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area12" class="code-text"><code class="yaml">button.class1.class2.class3 btnName</code></pre>
    <button class="copy-btn" data-clipboard-target="#area12">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area13" class="code-text"><code class="html">&lt;button class="class1 class2 class3"&gt;btnName&lt;/button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area13">
        <span>COPY</span>
    </button>
</div>
<p>因為 Pug 可以直接用 Javascript 表達式編寫，如果有一組多個元素皆會用到的共用樣式類別名稱，我們可以透過變數宣告的方式使類別名稱成為數組，然後讓目標元素去使用它。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area14" class="code-text"><code class="yaml">- var classes = ['class1', 'class2', 'class3']
button(class = classes) btnName</code></pre>
    <button class="copy-btn" data-clipboard-target="#area14">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area15" class="code-text"><code class="html">&lt;button class="class1 class2 class3"&gt;btnName&lt;/button&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area15">
        <span>COPY</span>
    </button>
</div>
<p>如果同時存在共用與額外獨自使用的樣式，數組與類別普通使用方式混用也是可以的：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area16" class="code-text"><code class="yaml">- var classes = ['class1', 'class2', 'class3']
button(class = classes).class4 btnName</code></pre>
    <button class="copy-btn" data-clipboard-target="#area16">
        <span>COPY</span>
    </button>
</div>

<br>
<p>補充，假設 ID 或 class 前方都沒有指定元素名稱，編譯時則會自動以 <em>div</em> 生成。換句話說，如果要製作指定 ID 值或 class 值的 <em>div</em> 元素，元素名稱 <em>div</em> 可以直接省略。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area17" class="code-text"><code class="yaml">#idName
.className</code></pre>
    <button class="copy-btn" data-clipboard-target="#area17">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area18" class="code-text"><code class="html">&lt;div id="idName"&gt;&lt;/div&gt;
&lt;div class="className"&gt;&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area18">
        <span>COPY</span>
    </button>
</div>


<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://www.litreily.top/2018/08/31/pug-synax/" target="_blank">网页模板pug基本语法</a></li>
    <li><a href="https://codertw.com/%E5%89%8D%E7%AB%AF%E9%96%8B%E7%99%BC/49527/" target="_blank">程式前沿: html 模板 pug</a></li>
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