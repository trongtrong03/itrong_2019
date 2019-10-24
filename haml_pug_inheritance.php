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
                        <time>2019-10-23</time>
                        <h1>Lesson08-- 模板繼承（Inheritance）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 的模板繼承（Inheritance）是非常好用的功能，它可以在父模板建立程式碼區塊（<em>block</em>），然後讓其他文件去擴展（<em>extends</em>）它，擴展其 <em>block</em> 的文件我們稱之子模板，子模板不僅可以直接顯示，還可以覆蓋內容，或是插入其他內容給 <em>block</em>。</p>
<br>

<h2>使用方法：</h2>
<p>首先，我們學習如何讓子模板來擴展父模板的內容。</p>
<p class="step">
    <span>Step01. 建立模板內容。</span>
</p>
<p>建立一個名為 <em>layout</em> 的 <em>.pug</em> 父模板文件，並輸入以下內容：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">//- layout.pug
block h1
    h1 This is title.

block div
    div.item This is an apple.

p I am not block.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>父模板裡 <em>block</em> 的內容將會是其他子模板文件擴展後的可編輯預設內容，不屬於 <em>block</em> 區塊內的程式碼雖然在子模板依然會編譯出來，但卻無法針對其進行任何修改。</p>
<p><em>block</em> 空格後方是區塊的名稱，底下才是元素的程式碼內容。</p>
<br>

<p class="step">
    <span>Step02. 建立子模板文件，並擴展父模板。</span>
</p>
<p>接著創建子模板文件 <em>page.pug</em>，然後用 <em>extends</em> 擴展父模板文件的內容：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="yaml">//- page.pug
extends layout.pug</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>假設我們此刻直接將 <em>page.pug</em> 輸出成 HTML，其內容會是這樣：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;!-- page.html --&gt;
&lt;h1&gt;This is title.&lt;/h1&gt;
&lt;div class="item"&gt;This is an apple.&lt;/div&gt;
&lt;p&gt;I am not block.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>完美地將 <em>layout.pug</em> 的內容全部擴（搬）展（運）了過來。</p>
<br>

<p class="step">
    <span>Step03. 覆蓋擴展的父模板 <em>block</em> 內容。</span>
</p>
<p>當 <em>page.pug</em> 擴展了父模板 <em>layout.pug</em> 內容後，我們就可以對子模板的程式碼區塊進行只屬該頁面的操作，例如覆蓋或修改，這個操作很簡單，只要在該擴展文件下調出 <em>block</em> 的名稱，然後直接書寫要覆蓋的內容即可。例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">//- page.pug
extends layout.pug

block h1
    h1 This is page title.
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;!-- page.html --&gt;
&lt;h1&gt;This is page title.&lt;/h1&gt;
&lt;div class="item"&gt;This is an apple.&lt;/div&gt;
&lt;p&gt;I am not block.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>仔細看 <em>&lt;h1&gt;</em> 的部分，裡頭純文本的內容已覆蓋原本父模板 <em>layout.pug</em> 的預設 <em>&lt;h1&gt;</em> 內容了。而 <em>page.pug</em> 內其他模板程式碼因為沒有別的操作，所以仍然維持父模板預設的內容。</p>
<p>注意喔！子模板無法添加父模板沒有的程式碼，也無法修改不是 <em>block</em> 區塊內的程式碼，所以為什麼我們會說繼承父模板的擴展文件是子模板的原因就在這裡，繼承模板的擴展文件只能編輯模板裡的 <em>block</em>。我們可以將複雜的頁面拆分成許多簡潔的模板區塊，功能強大又方便維護，卻也犧牲了部分自由。</p>
<br>

<h2>添加 <em>block</em> 內容：</h2>
<p>擴展的子模塊除了可以直接覆寫父模塊的 <em>block</em> 內容，也可以添加新的內容到 <em>block</em> 內，如果是添加在原本內容之前（頭部）的語法叫 <em>prepend</em>，添加在之後（尾部）的語法則叫 <em>append</em>。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="yaml">//- page.pug
extends layout.pug

block prepend h1
    h1 This is prepend content.

block append h1
    h1 This is append content.
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;!-- page.html --&gt;
&lt;h1&gt;This is prepend content.&lt;/h1&gt;
&lt;h1&gt;This is title.&lt;/h1&gt;
&lt;h1&gt;This is append content.&lt;/h1&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<p>當使用 <em>prepend</em> 及 <em>append</em> 語法時，前方的 <em>block</em> 是可以省略的：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="yaml">//- page.pug
extends layout.pug

prepend h1
    h1 This is prepend content.

append h1
    h1 This is append content.
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<p>其輸出結果不變。</p>
<br>

<h2>與包含（Include）的差異：</h2>
<p>當學會模板擴展 <em>extend</em> 的使用方法後，難免會產生其與 <em>include</em> 用法差異的疑竇，以下製作一份簡表來比較兩者的不同之處：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1"></span>
        <span class="t-flex2">extand</span>
        <span class="t-flex2">include</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">引用文件</span>
        <span class="t-flex2">只能是 <em>.pug</em></span>
        <span class="t-flex2">可引用其他文件，如 <em>.js</em>、<em>.css</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">引用次數</span>
        <span class="t-flex2">一個文件只能繼承一個模板</span>
        <span class="t-flex2">一個文件可包含多個文件</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">引用修改</span>
        <span class="t-flex2">可以覆寫或添加內容</span>
        <span class="t-flex2">不能修改</span>
    </div>
</div>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/inheritance.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/inheritance.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10204237" target="_blank">HTML模版語言-pug的指令『include』和『繼承』</a></li>
    <li><a href="https://stackoverflow.com/questions/30629016/what-is-the-difference-between-extends-and-include-in-jade" target="_blank">What is the difference between “extends” and “include” in Jade?</a></li>
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