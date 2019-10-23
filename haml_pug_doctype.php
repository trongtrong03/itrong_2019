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
                        <h1>Lesson02-- 文件類型（Doctype）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>文件類型（Doctype）會影響 Pug 編譯的結果，例如該文件是 HTML 還是 XML？版本是多少？又或是閉合標籤是否要有 <em>/</em> 結尾，它的格式看起來也是個元素標籤，但實際上它更像是一種宣告（document type declaration，簡稱 DTD）。</p>
<p>Pug 官方文件有提供一份常見的 <a href="https://pug.bootcss.com/language/doctype.html" target="_blank">Doctype 宣告縮寫列表</a>，只要行首先書寫 <em>doctype</em>，以空格將類型關鍵字與其分隔之，Pug 就會編譯出相對應的文件類型宣告。例如：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">doctype html</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;!DOCTYPE html&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>以下是一份基本的 HTML 的 Pug 撰寫方式：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">doctype html
html
    head
        title Web title
        meta(charset='UTF-8')
        meta(
            http-equiv='X-UA-Compatible',
            content='IE=edge, chrome=1'
        )
        meta(
            http-equiv='content-language',
            content='zh-tw'
        ) 
        meta(
            name='viewport', 
            content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'
        )
        link(
            href='images/favicon.ico',
            rel='shortcut icon'
        )
        link(
            href='css/style.css',
            rel='stylesheet'
        )
    body</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Web title&lt;/title&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"&gt;
    &lt;meta http-equiv="content-language" content="zh-tw"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"&gt;
    &lt;link href="images/favicon.ico" rel="shortcut icon"&gt;
    &lt;link href="css/style.css" rel="stylesheet"&gt;
  &lt;/head&gt;
  &lt;body&gt;&lt;/body&gt;
&lt;/html&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>關於屬性的使用方式，將留待後續的篇章進行說明。</p>


<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Glossary/Doctype" target="_blank">MDN Doctype</a></li>
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