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
                        <time>2019-01-16</time>
                        <h1>頁籤切換功能</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;templete&gt;
    &lt;section class="title"&gt;
        &lt;button :class="active==1 ? 'active' : ''" @click="active=1"&gt;A&lt;/button&gt;
        &lt;button :class="active==2 ? 'active' : ''" @click="active=2"&gt;B&lt;/button&gt;
        &lt;button :class="active==3 ? 'active' : ''" @click="active=3"&gt;C&lt;/button&gt;
    &lt;/section&gt;
    &lt;section class="content"&gt;
        &lt;div v-if="active==1"&gt;A&lt;/div&gt;
        &lt;div v-if="active==2"&gt;B&lt;/div&gt;
        &lt;div v-if="active==3"&gt;C&lt;/div&gt;
    &lt;/section&gt;
&lt;/templete&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">new Vue({
    el: '#app',
    data: {
        active: 1
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="wNGOag" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="vue-ex: tabs">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/wNGOag/">
      vue-ex: tabs</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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