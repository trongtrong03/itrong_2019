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
                        <time>2019-10-20</time>
                        <h1>Lesson02-- 純文本（Plain Text）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>根據 Pug 官方文件的描述，純文本的 Pug 撰寫方法有數種，它們各自在不同的情況有不同的用處。</p>
<br>
<h2>Inline（適合短文本）：</h2>
<p>這是最基本也是最常見的用法，Pug 的表達方式也非常簡單，僅需在該行行首鍵入元素本身（不需要嵌套），然後在元素與純文本之間以一個空白字元隔開即可。</p>
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

<p>在 Pug 語法，行首的第一個字詞會直接被判定為元素名稱，如果一行內同時輸入很多元素名稱，除了行首之外，一率會被視為純文本的內容。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">p strong b i This is text.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;p&gt;strong b i This is text.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>然而因為這個特性，當首字輸入單字並非存在的元素標籤，編譯時也會把首字當作元素來輸出。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="yaml">This is text.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;This&gt;is text.&lt;/This&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>假如要在行內加入其他元素，有兩種表示方法。第一種是直接用傳統 HTML 嵌套囊括的方式，將純文字內容放入嵌套內。例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="yaml">p This is text &lt;b&gt;content&lt;/b&gt;.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;p&gt;This is text &lt;b&gt;content&lt;/b&gt;.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>另一種則是採取階層縮排的方式：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="yaml">p This is text
    b content</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="html">&lt;p&gt;This is text&lt;b&gt;content&lt;/b&gt;&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>Piped Text（管道文本）：</h2>
<p><em>|</em> 這個符號在 Unix 系統常用作「管道」功能因而得名，當行內的純文本與行內元素需要混合使用，就是 <em>|</em> 派上用場的時候。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area11" class="code-text"><code class="yaml">p
    | This is
    b important
    | text.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area12" class="code-text"><code class="html">&lt;p&gt;This is&lt;b&gt;important&lt;/b&gt;text.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area12">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>Block（區塊形式）：</h2>
<p>很多時候我們的純文本並非寥寥一行表示的程式碼，而是數行甚至多達十行以上的一個文本區塊，抑或者像 <em>&lt;style&gt;</em> 或 <em>&lt;script&gt;</em> 這類典型內嵌 CSS 樣式表或 Javascript 腳本的程式碼區塊，雖說一樣可以用 <em>|</em> 表示：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area13" class="code-text"><code class="yaml">script
    | if (usingPug)
    |   console.log('you are awesome')
    | else
    |   console.log('use pug')</code></pre>
    <button class="copy-btn" data-clipboard-target="#area13">
        <span>COPY</span>
    </button>
</div>
<p>但這樣寫反而沒效率且也不是那麼好閱讀，這時就可以善用 Pug 的區塊表示方法。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area14" class="code-text"><code class="yaml">script.
    if (usingPug)
      console.log('you are awesome')
    else
      console.log('use pug')</code></pre>
    <button class="copy-btn" data-clipboard-target="#area14">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area15" class="code-text"><code class="html">&lt;script&gt;
  if (usingPug)
    console.log('you are awesome')
  else
    console.log('use pug')
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area15">
        <span>COPY</span>
    </button>
</div>
<p>只要在父階層的元素名稱後方加上一個 <em>.</em>，Pug 就會將該元素下方從屬階層的內容視為程式碼區塊的片段，區塊同樣可以運用在一般程式碼的建構上，只不過要注意的是，區塊內如果存在其他元素名稱，仍會被視為純文本而不會被判讀為元素標籤。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area16" class="code-text"><code class="yaml">div.
    h1 This is title
    p This is text</code></pre>
    <button class="copy-btn" data-clipboard-target="#area16">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area17" class="code-text"><code class="html">&lt;div&gt;
  h1 This is title
  p This is text
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area17">
        <span>COPY</span>
    </button>
</div>
<p>假如要使 <em>.</em> 區塊內的純文本元素生成為對應的元素標籤，我們要嘛就是直接用傳統嵌套的方式指定該元素名稱為標籤，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area18" class="code-text"><code class="yaml">div.
    &lt;h1&gt;This is title&lt;/h1&gt;
    &lt;p&gt;This is text&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area18">
        <span>COPY</span>
    </button>
</div>
<p>或是改寫 <em>.</em> 區塊的位置，在父階層元素區塊內的子階層元素平行下方創建一個 <em>.</em> 點塊，例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area19" class="code-text"><code class="yaml">div 
    h1 This is title
    p This is text
    .
        This is end</code></pre>
    <button class="copy-btn" data-clipboard-target="#area19">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area20" class="code-text"><code class="html">&lt;div&gt;
  &lt;h1&gt;This is title&lt;/h1&gt;
  &lt;p&gt;This is text&lt;/p&gt;This is end
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area20">
        <span>COPY</span>
    </button>
</div>
<p>只是這種寫法必須在 <em>.</em> 結尾之後再添加純文本內容，否則編譯就會噴錯，所以什麼情況適合用什麼樣的方法表示，就得自己詳加斟酌一番了。</p>
<figure>
    <img src="images/pic/html/pug-text-01.jpg">
    <figcaption>在父階層創建 dot 區塊但後方沒有其他純文本時的編譯錯誤回饋。</figcaption>
</figure>

<br>
<p>以上是 Pug 純文本的應用方式，最後再稍微補充撰寫時另一個需要注意的地方──由於 Pug 省略了 HTML 元素標籤必須有頭有尾的規則，但假如我們撰寫時遇到必須在 <em>.pug</em> 檔案裡使用傳統 HTML 嵌套格式的情況，要記得補上結束嵌套，以免編譯後排版亂了套。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area21" class="code-text"><code class="yaml">div
   | &lt;p&gt;This is text</code></pre>
    <button class="copy-btn" data-clipboard-target="#area21">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area22" class="code-text"><code class="html">&lt;div&gt;&lt;p&gt;This is text&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area22">
        <span>COPY</span>
    </button>
</div>
<p>可以發現到 Pug 編譯的結果並不會自動補足 <em>&lt;p&gt;</em> 的結尾嵌套，故在編輯時需要多加注意。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://pjchender.github.io/2017/09/25/note-pug-%E5%AD%B8%E7%BF%92%E7%AD%86%E8%A8%98%EF%BC%88learn-to-use-pug%EF%BC%89/" target="_blank">[Note] PUG 學習筆記（Learn to Use PUG）</a></li>
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