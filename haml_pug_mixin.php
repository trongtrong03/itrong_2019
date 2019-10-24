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
                        <h1>Lesson09-- 混入（Mixin）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>如果有學過 Sass 的朋友，肯定知道 Sass 中有的 <em>mixin</em> 這樣一個好用又方便的語法，它能建立一個可以被其他類別（class）選擇器重複使用的樣式表區塊，且還可以將屬性值設定為變數，依據不同選擇器需求，傳入指定的參數。</p>
<p>Pug 同樣也有提供 <em>mixin</em> 方法，使用方式與 Sass 大同小異，主要是 Pug 建立混入區塊的對象是 HTML 程式碼，我們可以將 <em>mixin</em> 區塊的內容傳遞給別的文件使用。</p>
<br>
<h2>使用方法：</h2>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">mixin name
    //- pug code
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="yaml">mixin list
    ul
        li item01
        li item02
        li item03</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>在其他地方取用 <em>mixin</em> 只要透過 <em>+</em> 去調用混入區塊的名稱即可，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">+list</code></pre>
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
<p><em>+</em> 與 <em>mixin</em> 名稱之間有沒有空格都無所謂。</p>
<p>截至目前為止，你可能會疑惑 <em>mixin</em> 混入程式碼區塊的方法和 <em>include</em> 有什麼差別，的確，如果只是單純要將多個網頁共同的內容獨立出來，製作成可以傳遞給其他文件使用的區塊，確實用 <em>mixin</em> 或 <em>include</em> 都可以，不過接下來要介紹的 <em>mixin</em> 用法，正是其與 <em>include</em> 方法最大的歧異之處。</p>
<br>

<h2>傳遞參數：</h2>
<p><em>mixin</em> 允許將程式碼設置成函數形式，然後在其他調用的地方傳遞特定的參數。它的公式是這樣：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="yaml">mixin name(value)
    pugcode.name= value
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>函數元素與其後方的 <em>=</em> 之間不能存在空格。</p>
<p>例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="yaml">mixin list(item)
    li= item
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>然後就可以傳遞參數進去：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="yaml">ul
    +list('蘋果')
    +list('香蕉')
    +list('芭樂')
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;蘋果&lt;/li&gt;
  &lt;li&gt;香蕉&lt;/li&gt;
  &lt;li&gt;芭樂&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>不單單侷限純文本，連元素的屬性也可以使其成為函數，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="yaml">mixin link(href, cname, lname)
    a(href=href class=cname)= lname

nav
    +link('index.html', '首頁', 'first')
    +link('about.html', '關於我們')
    +link('news.html', '最新消息', 'last')
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;nav&gt;
    &lt;a class="first" href="index.html"&gt;首頁&lt;/a&gt;
    &lt;a href="about.html"&gt;關於我們&lt;/a&gt;
    &lt;a class="last" href="news.html"&gt;最新消息&lt;/a&gt;
&lt;/nav&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>上面的範例揭露另一個小亮點：傳遞的最後一個函數值如果沒有要指定參數，則可以省略不寫，被省略的函數也不會編譯到屬性值裡。</p>
<br>

<h2>剩餘參數（rest arguments）：</h2>
<p>如果我們 <em>mixin</em> 傳遞函式參數的對象是不固定的數量，在設置函數的時候可以加入 <em>...</em> 來表示：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="yaml">mixin list(...items)
    ul
        each item in items
            li= item

+list('蘋果', '香蕉', '芭樂', '橘子')
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="html">&lt;ul&gt;
  &lt;li&gt;蘋果&lt;/li&gt;
  &lt;li&gt;香蕉&lt;/li&gt;
  &lt;li&gt;芭樂&lt;/li&gt;
  &lt;li&gt;橘子&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/inheritance.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/inheritance.html" target="_blank">Pug 中文文档</a></li>
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