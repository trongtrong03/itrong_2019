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
                        <h1>Lesson10-- 程式碼輸出的觀念（Code）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 程式碼除了常見元素名稱接內容的書寫方式，另外還有三種類型，在編譯時各自有不同的輸出結果。</p>
<br>
<h2>不輸出的程式碼：</h2>
<p>不輸出的程式碼主要是用在 Javascript 宣告變數或定義函數，此類型的程式碼我們用 <em>-</em> 表示，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">- var name = '小明'
p= name

//- or

- for (var x = 0; x < 3; x++)
    li item</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>不輸出的程式碼也可以用區塊方式進行書寫，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="yaml">ul
    -
        var list = ["小明", "大華", "阿亮", "張三", "李四"]
    each item in list
        li= item</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;小明&lt;/li&gt;
  &lt;li&gt;大華&lt;/li&gt;
  &lt;li&gt;阿亮&lt;/li&gt;
  &lt;li&gt;張三&lt;/li&gt;
  &lt;li&gt;李四&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>帶輸出的程式碼：</h2>
<p>部分特殊符號像是尖括號（<em>&lt;&gt;</em>），在編譯時會被轉換元素形式，假如要直接在網頁上顯示這些類型的程式碼，我們可以用 <em>=</em> 表示。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">p 這很&lt;strong&gt;重要&lt;/strong&gt;所以要說三次！
p= '這很&lt;strong&gt;重要&lt;/strong&gt;所以要說三次！'</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;p&gt;這很&lt;strong&gt;重要&lt;/strong&gt;所以要說三次！&lt;/p&gt;
&lt;p&gt;這很&amp;lt;strong&amp;gt;重要&amp;lt;/strong&amp;gt;所以要說三次！&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>不帶輸出的程式碼：</h2>
<p>和帶輸出的程式碼相反，此類用 <em>!=</em> 表示</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">p
  != '這很 <strong>重要</strong> 所以要說三次！'</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>來和其他表示方式進行一下比較：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="yaml">p '這很' + ' <strong>重要</strong> 所以要說三次！'
p= '這很' + ' <strong>重要</strong> 所以要說三次！'
p!= '這很' + ' <strong>重要</strong> 所以要說三次！'</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;p&gt;'這很' + ' &lt;strong&gt;重要&lt;/strong&gt; 所以要說三次！'&lt;/p&gt;
&lt;p&gt;這很&amp;lt;strong&amp;gt;重要&amp;lt;/strong&amp;gt;所以要說三次！&lt;/p&gt;
&lt;p&gt;這很 &lt;strong&gt;重要&lt;/strong&gt; 所以要說三次！&lt;/p&gt;
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>由於這類的用法會牽涉安全性的問題，故 Pug 官方本身也不推崇不轉義的程式碼輸出。</p>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/code.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/code.html" target="_blank">Pug 中文文档</a></li>
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