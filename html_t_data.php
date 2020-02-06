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
                        <time>2019-09-02</time>
                        <h1>［HTML5］淺談資料屬性（data-*）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>自從 HTML5 廣大普及化之後，我們時不時會在別人的原始碼中看到大量以 <em>data-</em> 開頭的元素內屬性應用，像是 <em>data-id</em>、<em>data-item</em> ...等等，其實這些都是開發者方便自己理解所下的自定義屬性名稱，它叫做「data-* attribute」，是 HTML5 釋出的一種新屬性。</p>
<p><em>data-*</em> 中的 <em>*</em> 即是可以自定義的名稱，像是 id、name、type...什麼的，例如：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;ul&gt;
    &lt;li data-class="一年甲班"&gt;小明&lt;/li&gt;
    &lt;li data-class="一年乙班"&gt;小華&lt;/li&gt; 
    &lt;li data-class="一年丙班"&gt;小三&lt;/li&gt; 
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p><em>data-*</em> 命名要注意兩個重點：</p>
<ol class="decimal">
    <li>屬性名稱可以是任何字符串。</li>
    <li>屬性名稱應盡量避免大寫，且前綴 data- 之後必須至少存在一個字符。</li>
</ol>
<p>我們可以使用 Javascript 或 CSS 來取得 <em>data-*</em> 屬性的值並對其進行操作，例如：</p>
<p>使用 jQuery：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="NVzrOG" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="html5: data-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/NVzrOG/">
    html5: data-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>使用 CSS：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="VOdKJe" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="html5: data-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/VOdKJe/">
    html5: data-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="http://www.w3school.com.cn/tags/att_global_data.asp" target="_blank">HTML data-* 属性</a></li>
    <li><a href="https://developer.mozilla.org/zh-CN/docs/Web/Guide/HTML/Using_data_attributes" target="_blank">使用数据属性</a></li>
    <li><a href="https://pjchender.blogspot.com/2017/01/html-5-data-attribute.html" target="_blank">[技術分享] 什麼是 HTML 5 中的資料屬性（data-* attribute）</a></li>
    <li><a href="https://muki.tw/tech/html5-jquery-access-data/" target="_blank">使用 HTML5 和 jQuery 簡易存取資料</a></li>
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