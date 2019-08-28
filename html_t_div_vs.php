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
                        <time>2019-08-28</time>
                        <h1>&lt;div&gt; V.S. &lt;section&gt; V.S. &lt;article&gt;</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>HTML5 新增許多新的標籤，將過去千篇一律的 <em>&lt;div&gt;</em> 排版分門別類，使得閱讀性與 SEO 都大大提升不少效率，但其實蠻常會有新手開發者納悶，<em>&lt;div&gt;</em>、<em>&lt;section&gt;</em> 與 <em>&lt;article&gt;</em> 這三個定義相似的標籤差異在哪？受「什麼時候適合使用哪一種標籤」而苦惱。</p>

<h2>&lt;div&gt; ：</h2>
<p>語意為「區塊」，全名 division，是最常見也是使用率最高的標籤，本身沒有特別的語意，相當萬用，所以在不確定內容要採用哪一種標籤表示時，用 <em>&lt;div&gt;</em> 往往是保險的作法，至少不會有太大的「錯誤」。</p>
<br>

<h2>&lt;section&gt; ：</h2>
<p>語意為「章節」，通常用來表示一段專題性的內容，除了內容外，還會包含標題。講白一點就是有語意的 <em>&lt;div&gt;</em>，所以今天標籤含有明確的資訊，像是大綱、文章章節、評論之類的內容，就可以使用 <em>&lt;section&gt;</em>，然而，他的界定也不是這麼明確，當這些內容可以脫離上下文，成為一個非常「獨立」的區塊，則應當使用 <em>&lt;article&gt;</em> 標籤。</p>
<p>當要使用某標籤作單純的樣式容器，請還是繼續使用 <em>&lt;div&gt;</em> 表示。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;section&gt;
&lt;h1&gt;Title A&lt;/h1&gt;
&lt;p&gt;content&lt;/p&gt;
&lt;/section&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>&lt;article&gt; ：</h2>
<p>語意為「文章」，承襲 <em>&lt;section&gt;</em> 的說明，在區塊內容更具明確意義且獨立完整，使用 <em>&lt;article&gt;</em> 會比 <em>&lt;section&gt;</em> 更好，廣泛來說算是特殊的 <em>&lt;section&gt;</em> 標籤。此外，<em>&lt;article&gt;</em> 的內容可以引用外部的資料，例如某篇文章裡包含瀏覽者的評論或留言。</p>
<p>順帶一提，<em>&lt;article&gt;</em> 標籤往往也會包含 <em>&lt;header&gt;</em> 或 <em>&lt;footer&gt;</em> 等標籤，縱然 <em>&lt;section&gt;</em> 是擁有主題性的內容，可是 <em>&lt;article&gt;</em> 較之更具獨立及完整性。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;article&gt;
    &lt;header&gt;
        &lt;!-- header --&gt;
    &lt;/header&gt;
    &lt;section&gt;
        &lt;h1&gt;Title A&lt;/h1&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/section&gt;
    &lt;section&gt;
        &lt;h1&gt;Title B&lt;/h1&gt;
        &lt;p&gt;content&lt;/p&gt;
    &lt;/section&gt;
    &lt;footer&gt;
        &lt;!-- footer --&gt;
    &lt;/footer&gt;
&lt;/article&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p><em>&lt;div&gt;</em>、<em>&lt;section&gt;</em>、<em>&lt;article&gt;</em> 這三個標籤語意是從無到有，並由弱增強的。此外 <em>&lt;nav&gt;</em>、<em>&lt;aside&gt;</em> 也是類似 <em>&lt;article&gt;</em> 的用法，都是特殊的 <em>&lt;section&gt;</em> 標籤。</p>
<p>我們也可以這樣解讀：<br>
<em>&lt;article&gt;</em> 是整個文章，<em>&lt;section&gt;</em> 是片段，<em>&lt;aside&gt;</em> 是側邊，<em>&lt;nav&gt;</em> 是導覽列。</p>
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