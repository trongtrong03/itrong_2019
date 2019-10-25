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
                        <h1>Lesson11-- 變數（Variable）與嵌入（Interpolation）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>變數：</h2>
<p>在往後的章節將會陸續學到透過 Javascript 多樣的表達式，協助我們寫模板網頁時更加便利，因此我們得先學習 Pug 變數的宣告語法是什麼。</p>
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
<p>變數不僅僅用於 Javascript 表達式上，我們也可以將自定義的變數嵌入到模板內，達到簡單求值的目標。</p>
<br>

<h2>嵌入：</h2>
<p>在 <a href="haml_pug_code.php" target="_blank">〈Lesson10-- 程式碼輸出的觀念（Code）〉</a> 一文裡提過程式碼輸出可以用 <em>=</em> 表示，這個用法基本上已經做到 Pug 簡單求值的功能，除了這個用法之外，還有另一種向變數求值的方式，語法為下：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">- var name = value
element #{name}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>舉例來說：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="yaml">- var yourName = '小明'
p 你的名字是#{ yourName }。</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;p&gt;你的名字是小明。&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>要注意的是，如果嵌入的變數對象裡包含元素標籤，在編譯時會被轉義輸出。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="yaml">- var yourName = '&lt;strong&gt;小明&lt;/strong&gt;'
p 你的名字是#{ yourName }。</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;p&gt;你的名字是&amp;lt;strong&amp;gt;小明&amp;lt;/strong&amp;gt;。&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>如果尖括號不想被轉義出去的話，那求值的語法就要改成用 <em>!{</em> 來寫，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="yaml">p 你的名字是!{ yourName }。</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<p>如此輸出後的程式碼就會維持元素標籤的樣式了。但是這樣不轉義的方式存在安全性風險，故官方文件強烈建議避用它。</p>
<p>我們知道要在元素行內加入其他元素標籤，可以直接用 HTML 傳統尖括號的方式實現，但假如只用 Pug 模板語言去嵌入的話？也是有的！只要用 <em>#[ ]</em>（方括號）括起元素對象的名稱、屬性、內容...等就可以了，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="yaml">p 我是一個#[a(href='###', target='_blank') 超連結]。</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area11" class="code-text"><code class="html">&lt;p&gt;我是一個&lt;a href="###" target="_blank"&gt;超連結&lt;/a&gt;。&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>

<p>你可能會好奇，兩種嵌入方法能不能一起使用？我們拿前面小明的案例來實作看看...</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area12" class="code-text"><code class="yaml">- var yourName = "小明";
p 你的名字是#[strong #{yourName}]</code></pre>
    <button class="copy-btn" data-clipboard-target="#area12">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area13" class="code-text"><code class="html">&lt;p&gt;你的名字是&lt;strong&gt;小明&lt;/strong&gt;。&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area13">
        <span>COPY</span>
    </button>
</div>
<p>答案是可以的。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/interpolation.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/interpolation.html" target="_blank">Pug 中文文档</a></li>
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