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
                        <time>2017-07-09</time>
                        <h1>Vue 的聲明式渲染方法</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>以下是 Vue 官方文件的腳本連結（非壓縮及壓縮版本），建議下載至本機端專案目錄引用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;script src="https://unpkg.com/vue/dist/vue.js"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/vue/dist/vue.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>
<h2>聲明式渲染：</h2>
<p>Vue.js 的核心是透過簡潔的模板語法，聲明式地將數據渲染進 DOM 結構裡。舉例來說：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html" v-pre>&lt;div id="app"&gt;
    {{ message }}
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>最後瀏覽器渲染輸出的結果會是「Hello Vue!」的字串。</p>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="wqaWLG" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="vue-learn-example1" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/wqaWLG/">vue-learn-example1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>看完演例後，我們回頭檢視 Vue 的程式碼：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="javascript">var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>在程式碼片段中，<em>el</em> 指的是「提供一個頁面上已存在的 DOM 元素作為 Vue 實例掛載目標」，他可以是 HTML 元素標籤，也可以是某個 CSS 的選擇器（<em>#id</em> 或 <em>.class</em>）。</p>
<p><em>data</em> 則是 Vue 的實例對象，放在其內部的屬性能夠響應數據變化。一般而言，<em>data</em> 只能存放數據資料，不建議是有其狀態行為的對象。</p>
<br>
<p>Vue 除了能置入資料到元素內容外，也可以直接讓指定的 HTML 標籤屬性綁定數據，例如：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="javascript">var img = new Vue({
    el: '#img',
    data: {
        message: '這是一張圖片。'
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html" v-pre>&lt;img id="img" src="image.jpg" v-bind:title="message"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="PKqbGE" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="vue-learn-example2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/PKqbGE/">vue-learn-example2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>經由這個範例，我們看到在 <em>&lt;img&gt;</em> 裡面使用了一個陌生的 <em>v-bind</em> 屬性，它在 Vue 裡被稱為「指令」，所謂的指令，就是開頭是用 <em>v-</em> 作為前綴的字串。</p>

<ul class="refer">
    <li><a href="https://cn.vuejs.org/v2/guide/" target="_blank">介绍 — Vue.js</a></li>
    <li><a href="https://nowills.blogspot.tw/2016/08/vue-js.html" target="_blank">Vue js快速上手 (一) Hello World!</a></li>
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