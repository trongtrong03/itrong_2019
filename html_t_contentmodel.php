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
                        <time>2020-02-06</time>
                        <h1>［HTML5］元素分類與內容模型（Content Model）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>CSS 規範規定 HTML 所有元素都有默認的 <em>display</em> 屬性，早期 HTML 標準將元素歸納為兩大類：區塊元素（Block）與行內元素（Inline），分別與 CSS <em>display</em> 屬性中的 <em>display</em> 值和 <em>inline</em> 值相對應。</p>
<p>我們可透過表格來理解兩者的不同之處：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">區塊元素（Block）</span>
        <span class="t-flex1">行內元素（Inline）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">與前後元素標籤隔行。</span>
        <span class="t-flex1">與相鄰的行內元素會並排在一起。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">可設定寬、高。</span>
        <span class="t-flex1">寬、高設定無效。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">可以包含行內元素或部份區塊元素。</span>
        <span class="t-flex1">只能包含其他行內元素，不能包含區塊元素。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>&lt;div&gt;</em>、<em>&lt;h1&gt;</em>～<em>&lt;h6&gt;</em>、<em>&lt;p&gt;</em>、<em>&lt;ul&gt;</em>、<em>&lt;table&gt;</em>、<em>&lt;form&gt;</em>...</span>
        <span class="t-flex1"><em>&lt;span&gt;</em>、<em>&lt;em&gt;</em>、<em>&lt;strong&gt;</em>、<em>&lt;b&gt;</em>、<em>&lt;i&gt;</em>、<em>&lt;a&gt;</em>、<em>&lt;img&gt;</em>、<em>&lt;input&gt;</em>、<em>&lt;textarea&gt;</em>、<em>&lt;select&gt;</em>...</span>
    </div>
</div>
<figure class="mb-0">
    <img src="images/pic/html/contentmodel_1.jpg">
    <figcaption>區塊元素與行內元素的排版示意圖。</figcaption>
</figure>
<br>
<p>隨著網路世代的崛起，設計師對於網頁排版的需求也越來越講究變化與彈性，CSS 甚至出現「<em>inline-block</em>」這種同時兼具兩者特性的屬性，顯然過去標準的二分法已不再適用。在 HTML5 規範標準裡，便將新舊所有元素重新分類，重新定義它們的內容模型（Content Models）。</p>
<p>內容模型（Content Models）將元素劃分七種類型：Flow content、Sectioning content、Heading content、Phrasing content、Embedded content、Interactive content、Metadata content。在詳細介紹它們之前，我們先看下方這張內容模型示意圖：</p>
<figure class="mb-0">
    <img src="images/pic/html/contentmodel_2.jpg">
    <figcaption>內容模型（Content Models）示意圖。</figcaption>
</figure>
<p>由此可知，Flow content 幾乎涵蓋所有其他內容模型的元素，而部分內容模型之間也會有重疊的部份，亦即是說單一 HTML 元素滿足特定情境條件下，就會歸類於不同的內容模型。</p>
<br>
<h2>Flow content（流動型內容）：</h2>
<p>此一內容模型幾乎涵蓋所有存在於 <em>&lt;body&gt;</em> 裡的所有元素，換句話說，像 <em>&lt;title&gt;</em>、<em>&lt;meta&gt;</em> 這類只會在 <em>&lt;head&gt;</em> 內使用的就不屬 Flow content 範疇。</p>
<br>
<h2>Sectioning content（章節型內容）：</h2>
<p>主要囊括用來定義網頁結構的元素，例如 <em>&lt;article&gt;</em>、<em>&lt;section&gt;</em>、<em>&lt;aside&gt;</em>、<em>&lt;nav&gt;</em>。</p>
<br>
<h2>Heading content（標題型內容）：</h2>
<p>顧名思義，指的就是那些用來表示網頁文章標題的元素：<em>&lt;h1&gt;</em>、<em>&lt;h2&gt;</em>、<em>&lt;h3&gt;</em>、<em>&lt;h4&gt;</em>、<em>&lt;h5&gt;</em>、<em>&lt;h6&gt;</em>，以及處於被半放生狀態的 <em>&lt;hgroup&gt;</em>。</p>
<br>
<h2>Phrasing content（段落型內容）：</h2>
<p>所有可以放在 <em>&lt;p&gt;</em> 內構築段落內容的元素皆屬於 Phrasing content，所以屬於 Phrasing content 的元素也隸屬 Flow content。例如：<em>&lt;img&gt;</em>、<em>&lt;video&gt;</em>、<em>&lt;input&gt;</em>、<em>&lt;select&gt;</em>...等。</p>
<br>
<h2>Embedded content（嵌入型內容）：</h2>
<p>指的是那些可以嵌入外部資源的元素，例如：<em>&lt;img&gt;</em>、<em>&lt;iframe&gt;</em>、<em>&lt;embed&gt;</em>、<em>&lt;audio&gt;</em>、<em>&lt;video&gt;</em>、<em>&lt;canvas&gt;</em>...等。</p>
<br>
<h2>Interactive content（互動型內容）：</h2>
<p>凡是與使用者產生互動事件的元素都是 Interactive content，除了典型的表單元素們（<em>&lt;input&gt;</em>、<em>&lt;textarea&gt;</em>、<em>&lt;select&gt;</em>...）之外，<em>&lt;a&gt;</em> 元素也是其中一員。</p>
<br>
<h2>Metadata content（資訊元內容）：</h2>
<p>此類型的元素作用在於定義網頁與其他外部資源的關係，或是記載網站本身的資訊或行為。基本上放在 <em>&lt;head&gt;</em> 裡的元素都屬此模型內容，例如：<em>&lt;title&gt;</em>、<em>&lt;meta&gt;</em>、<em>&lt;link&gt;</em>、<em>&lt;style&gt;</em>、<em>&lt;script&gt;</em>...等。</p>
<br>
<br>
<p>最後來補充 Content Models 中有別上述七大類之外的一個有趣內容──Transparent（透明內容模型）。</p>
<h2>Transparent（透明內容模型）：</h2>
<p>Transparent 是一個很特殊的分類，透明元素可包含其他元素，<em>&lt;a&gt;</em> 就是典型的透明內容模型元素，我們很常自己或看到他人在 <em>&lt;a&gt;</em> 裡面嵌套其他內容模型的元素，然而，必須依循一定規則才可算是合法。什麼樣叫做合法？為方便了解，我們搬出 HTML4 之前提到「行內元素不能包含區塊元素」的規則，來檢視 <em>&lt;p&gt;</em>（行內元素）與 <em>&lt;div&gt;</em>（區塊元素）之間的嵌套關係：</p>
<h3 class="example"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;div&gt;
  &lt;p&gt;&lt;/p&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p><em>div</em> > <em>p</em>，區塊元素包含行內元素，此為合法。</p>
<h3 class="example"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;p&gt;
  &lt;div&gt;&lt;/div&gt;
&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p><em>p</em> > <em>div</em>，區塊元素在行內元素之內，這樣是不合法的。</p>
<p>知道以上元素嵌套的合法規則後，我們回頭瞧瞧透明內容模型，透明內容模型的元素特性是其子元素會依據其父元素（也就是透明元素的上一層）決定是否合法，假如父元素仍然是透明元素，則繼續向上遍歷直到 <em>&lt;body&gt;</em> 為止，假設這之間透明元素的子元素都沒遍歷到非透明元素的其他內容模型父級元素，則該透明元素可以包含任何 Flow content 的元素，不論它的初始型態是區塊（Block）還是行內（Inline）元素。我們也可以從上方 Content Models 示意圖作想像，Flow content 包含所有 Phrasing content，但 Phrasing content 卻沒有包含全部的 Flow content。舉例來說：</p>
<h3 class="example"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;p&gt;
    &lt;span&gt;
        &lt;a href="###"&gt;
            &lt;div&gt;this is a link.&lt;/div&gt;
        &lt;/a&gt;
    &lt;/span&gt;
&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>我們將這串程式碼簡化為階層順序：<em>&lt;p&gt;</em> > <em>&lt;span&gt;</em> > <em>&lt;a&gt;</em> > <em>&lt;div&gt;</em>，作為透明內容屬性元素（<em>&lt;a&gt;</em>）的子元素 <em>&lt;div&gt;</em> 是為 Flow content，跳過 <em>&lt;a&gt;</em> 往上查看父級元素先碰到 <em>&lt;span&gt;</em>，<em>&lt;span&gt;</em> 的內容模型不是透明元素而是 Phrasing content，因此就不再繼續向上檢查。由於 <em>&lt;div&gt;</em> 是不屬於 Phrasing content 的 Flow content，不應存在於 <em>&lt;span&gt;</em> 之內，故這段程式碼的結構是不正確（不合法）的。</p>
<p>我們接著來看第二個例子：</p>
<h3 class="example"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="html">&lt;p&gt;
    &lt;ins&gt;
        &lt;a href="###"&gt;
            &lt;div&gt;this is a link.&lt;/div&gt;
        &lt;/a&gt;
    &lt;/ins&gt;
&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>一樣先將其簡化：<em>&lt;p&gt;</em> > <em>&lt;ins&gt;</em> > <em>&lt;a&gt;</em> > <em>&lt;div&gt;</em>，<em>&lt;ins&gt;</em> 和 <em>&lt;a&gt;</em> 一樣同屬透明內容屬性，因此<em>&lt;div&gt;</em> 將略過它們繼續向上遍歷直至 <em>&lt;p&gt;</em>，然而 <em>&lt;p&gt;</em> 只能包含其他 Phrasing content 的元素，所以這段程式碼依然是錯誤的撰寫結構。</p>
<p>第三個範例：</p>
<h3 class="example"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="html">&lt;ul&gt;
    &lt;li&gt;
        &lt;a href="###"&gt;
            &lt;div&gt;this is a link.&lt;/div&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p><em>&lt;li&gt;</em> 內容模型與 <em>&lt;div&gt;</em> 皆屬 Flow content，因此這段程式碼是合法的。</p>
<br>
<h3 class="example"></h3>
<div class="code-area mb-0">
<pre id="area07" class="code-text"><code class="html">&lt;body&gt;
    &lt;a href="###"&gt;
        &lt;div&gt;this is a link.&lt;/div&gt;
    &lt;/a&gt;
&lt;/body&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>最後這個例子，由於 <em>&lt;a&gt;</em> 與 <em>&lt;body&gt;</em> 間已無其他父級元素，因此 <em>&lt;a&gt;</em> 內的子元素就可以包含任一 Flow content 的元素。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.itread01.com/p/1028604.html" target="_blank">W3C HTML5標準閱讀筆記4 – 元素分類與內容模型(Content Model)Script</a></li>
    <li><a href="http://caibaojian.com/567.html" target="_blank">HTML5的嵌套与HTML4的嵌套标准对比</a></li>
    <li><a href="https://www.zhihu.com/question/34952563" target="_blank">a 标签为什么能够包含块级元素？</a></li>
    <li><a href="https://www.w3.org/TR/2011/WD-html5-20110525/semantics.html#semantics" target="_blank">W3C HTML5</a></li>
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