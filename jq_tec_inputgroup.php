<!doctype html>
<html class="pages js view">
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
                        <time>2018-12-16</time>
                        <h1>單選的核選方塊（checkbox）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>使用者傳遞資料的 <em>input</em> 項目選擇表示方式有兩種：<em>radio</em> 及 <em>checbox</em>。預設情況下，<em>radio</em> 為單選，<em>checbox</em> 為複選，但如果要限定 <em>checbox</em> 只能單選是否有可能呢？答案是可以的。</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $("input[type='checkbox']").on("change", function() {
            $("input[name='" + this.name + "']").not(this).prop("checked", false);
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="RmWaLK" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: checkbox group">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/RmWaLK/">
      jq-tec: checkbox group</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
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