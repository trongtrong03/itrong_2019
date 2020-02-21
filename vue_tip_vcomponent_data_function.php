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
                        <time>2017-12-06</time>
                        <h1>組件的 data 必須由 function 宣告</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>我們一般利用 Vue 寫入數據資料時，直接在 <em>data</em> 內用大括號宣告物件是很正常的事情，例如：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="javascript">var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p><em>data</em> 後面接大括號宣告物件，渲染出來的結果沒什麼問題，然而，若今天要在組件（Component）內使用 <em>data</em> 宣告物件，就不能這樣做了，下面舉一個錯誤的例子：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">Vue.component('my-component',{
    template: '&lt;div&gt;{{ message }}&lt;/div&gt;',
    data: {
        message: 'Hello Vue!'
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>實際執行的範例結果可以看這裡：</p>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="ppgyMM" data-default-tab="js,result" data-user="itrong" data-embed-version="2" data-pen-title="vue-example: component-data-function-1" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/ppgyMM/">vue-example: component-data-function-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>會發現 <em>data</em> 裡的數據並沒有經由 <em>#app</em> 元素渲染出來，開啟瀏覽器的 Console 看一下...</p>
<figure class="mb-0">
    <img src="images/pic/vue/component-data-function-1.jpg">
</figure>
<p>很明確地告知 <em>message</em> 沒有被定義，這是因為 Vue 要求組件裡的 <em>data</em> 得用 <em>function</em> 的方式將其裡面的物件 <em>return</em> 出來，所以如果要在組件下 <em>data</em> 的話，應該要這樣寫：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="javascript">Vue.component('my-component',{
    template: '&lt;div&gt;{{ message }}&lt;/div&gt;',
    data: function() {
        return {
            message: 'Hello Vue!'
        }
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p data-height="480" data-theme-id="0" data-slug-hash="aEdZLw" data-default-tab="js,result" data-user="itrong" data-embed-version="2" data-pen-title="vue-example: component-data-function-2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/aEdZLw/">vue-example: component-data-function-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>如此便能正確地渲染出資料。</p>
<ul class="refer">
    <li><a href="https://www.youtube.com/watch?v=T2JsTE0Hq58" target="_blank">Vue.js 教學 - 從 Vuejs 初探 Web Component 的世界</a></li>
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