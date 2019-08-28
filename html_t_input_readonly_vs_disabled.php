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
                        <time>2019-08-26</time>
                        <h1>輸入框（&lt;input&gt;、&lt;textarea&gt;）的 readonly 屬性與 disabled 比較</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>readonly</em> 屬性，顧名思義就是讓輸入框內的值無法被使用者修改，但保留輸入框原先的樣貌，並且讓值是可以被傳送提交出去的。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;input value="值" readonly&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h2>readonly VS disabled：</h2>
<p><em>disabled</em> 不僅禁止使用者修改 value 值，同時也無法被提交（傳送出去會變成空白值），且輸入框樣式會變為灰色；反之 <em>readonly</em> 雖然一樣無法被使用者修改，但表單資料提交時是可以把輸入框內的 value 值傳送出去，且保留輸入框預設的樣貌。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="KYyOWQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="html: input readonly vs disabled">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/KYyOWQ/">
      html: input readonly vs disabled</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2>readonly 的 CSS Style：</h2>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">input:read-only {
    /* CSS */
}
input:-moz-read-only {
    /* CSS */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="pBdMdV" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="CSS: read-only">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/pBdMdV/">
      CSS: read-only</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://bonze.tw/%E7%9A%84disabled%E5%B1%AC%E6%80%A7%E8%88%87readonly%E5%B1%AC%E6%80%A7/" target="_blank">html input標籤的disabled屬性與readonly屬性</a></li>
    <li><a href="https://blog.wpjam.com/m/input-disabled-vs-readonly/" target="_blank">disabled 和 readonly 的区别</a></li>
    <li><a href="https://developer.mozilla.org/zh-CN/docs/Web/CSS/:read-only" target="_blank">MDN :read-only</a></li>
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