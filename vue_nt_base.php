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
                        <time>2020-01-12</time>
                        <h1>Notes01-- Vue.js 的基本介紹</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>Vue 是什麼？</h2>
<p>Vue.js 是一款開源式的 JavaScript 框架，主要用來建構使用者介面，豐富了 MVVM 的前端開發模式。什麼是 MVVM？簡單來說，隨著圖形化介面應用程式在各種平台或裝置普及化，專案設計架構愈趨複雜，為了有效區分介面設計與程式設計獨立開發而不互相干擾，很多開發平台商各自提出適合的分層設計模式，例如 MVC（Model-View-Controller，源自蘋果開發者）、MVP（Model-View-Presenter，MVC 的演進版本），以及此刻主講的 MVVM。</p>
<figure>
    <img src="images/pic/vue/mvvm.jpg">
    <figcaption>MVVM 分層設計模式示意圖。</figcaption>
</figure>
<p>MVVM（Model-View-ViewModel）將專案架構分為：<br><br>
　◆ Model：管理所有資料來源，例如 API、本地資料庫等。<br>
　◆ View：顯示 UI 介面以及接受使用者與 UI 的互動動作。<br>
　◆ ViewModel：接收 View 的指令並向 Model 取得資料並保存起來供 View 使用。<br><br>
由此可知，MVVM 的核心是提供 View 與 View Model 之間的雙向數據綁定，而 Vue.js 則是一款提供 MVVM 雙向數據綁定的 Javascript 框架，它主要著重於 VM（ViewModel）這個環節，確保 Model 與 View 的一致性。</p>
<p>與其它實踐 MVVM 架構的 Javascript 框架（例如 AngularJS）相較，Vue.js 更加簡潔、輕量化，在 Vue 的官方文件中有一篇對比其他框架的描述文章，可點擊<a href="https://cn.vuejs.org/v2/guide/comparison.html#%E8%BF%90%E8%A1%8C%E6%97%B6%E6%80%A7%E8%83%BD-1" target="_blank">此處</a>閱讀更詳細說明。但基本上我們可以只需要知道 Vue.js 在推出後迅速成為受廣大開發者歡迎的網頁前端框架之一，且由於其創始者是華人，有提供中文學習文件故上手也相對容易許多。</p>
<br><br>
<h2>如何使用？</h2>
<p>因為 Vue 使用 Javascript ES5 的版本，故不兼容 ES5 的瀏覽器皆不支援 Vue，像是 IE8 及其以下的版本。</p>
<p><a href="https://cn.vuejs.org/v2/guide/installation.html#%E7%9B%B4%E6%8E%A5%E7%94%A8-lt-script-gt-%E5%BC%95%E5%85%A5" target="_blank">官方文件</a>提供多種安裝 Vue 的方式，最簡單的方式仍是透過 HTML <em>&lt;script&gt;</em> 標籤直接引用，我們可以從下方腳本連結將檔案下載到本機專案目錄裡去引用它。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;!-- 開發版本 --&gt;
&lt;script src="https://cn.vuejs.org/js/vue.js"&gt;&lt;/script&gt;
&lt;!-- 發布版本 --&gt;
&lt;script src="https://cn.vuejs.org/js/vue.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>開發版本與發佈版本的主要差別在於後者將腳本容量大幅壓縮達到輕量化的效果，適合專案正式上線發佈後使用，不過由於輕量化也省略去一些錯誤警告及相關提示的訊息，專案在開發階段時使用未壓縮的開發版本會較為適當。</p>
<br><br>
<h2>聲明式渲染</h2>
<p>在 Vue 的官方文件裡，提到了「聲明式渲染」這個名詞，什麼是聲明式（Declarative）渲染？扼要而言，聲明式渲染令開發者「只需要告訴程式應該做什麼，讓程式自行處理細節然後輸出結果」。</p>
<p>「給客人一杯珍珠奶茶，半糖去冰，50元。」──此為聲明式渲染。</p>
<p>與聲明式渲染相對的則是命令式（Imperative）渲染，開發者必須明確地下達指令，鉅細靡遺地告訴程式執行每一個步驟──「去哪裡？取得什麼資料？資料發生變化時要怎麼處理？」諸如此類的細節，像 jQuery 就屬於命令式渲染的 Javascript 函式庫。聲明式渲染的好處可以讓開發者節省時間去關注物件狀態的變化，不需要花費大把時間逐一設定程式的細節。</p>
<p>「向客人收取50元，拿起一個杯子...如果糖量需求是全糖，則用湯匙重複撈起X量的糖粉N次，如果是半糖，則...如果冰塊量需求是全冰，則...最後將珍珠奶茶交給客人。」──此為命令式渲染。</p>
<h3 class="vue"></h3>
<br><br>
<h2>創建一個 Vue 的實體</h2>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="javascript">var app = new Vue({
    // options
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>以上這段程式碼即是 Vue 最基本的聲明式渲染規則，每個 Vue 的應用都是從 <em>Vue</em> 函數建立一個新的實體開始，然後傳入選項（options），最後由 HTML 透過指令實現我們要的結果。例如：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html" v-pre>&lt;div id="app"&gt;
    {{ message }}
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
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
<p>DOM 在瀏覽器輸出的結果為：</p>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html" v-pre>Hello Vue!</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="wqaWLG" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="vue-learn-example1" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/wqaWLG/">vue-learn-example1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>在程式碼片段中，<em>el</em> 指的是「提供一個頁面上已存在的 DOM 元素作為 Vue 實體掛載目標」，他可以是 HTML 元素標籤，也可以是某個 CSS 的選擇器（<em>#id</em> 或 <em>.class</em>）。</p>
<p><em>data</em> 則是 Vue 的實體對象，放在其內部的屬性能夠響應數據變化。一般而言，<em>data</em> 只能存放數據資料，不建議放有狀態行為的對象。</p>
<p>第一個範例告訴大家如何在 HTML 元素裡插入 Vue 的資料，而接下來的範例則是展示 Vue 也可以讓資料綁定元素標籤的屬性（Attribute）：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html" v-pre>&lt;img id="img" src="image.jpg" v-bind:title="message"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="javascript">var img = new Vue({
    el: '#img',
    data: {
        message: '這是一張圖片。'
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="PKqbGE" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="vue-learn-example2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/PKqbGE/">vue-learn-example2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>在 HTML 程式碼中我們可以看到 <em>&lt;img&gt;</em> 標籤裡 <em>title</em> 屬性前添加了一個 <em>v-bind</em> 的東西，它是 Vue 提供的指令，凡是以 <em>v-</em> 開頭的指令皆為 Vue 提供的特殊屬性，讓 DOM 裡的元素響應我們在 Vue 提供的資料。</p>
<br>
<p>以上就是有關 Vue 的基本介紹，關於其實體結構寫法與運用僅點到為止，保留到下篇作更詳細地記錄。</p>

<ul class="refer">
    <li><a href="https://cn.vuejs.org/v2/guide/" target="_blank">介绍 — Vue.js</a></li>
    <li><a href="https://segmentfault.com/a/1190000009397476" target="_blank">Vue.js入门（一）--MVVM框架理解</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10192829" target="_blank">MVVM架構</a></li>
    <li><a href="https://zhuanlan.zhihu.com/p/59467370" target="_blank">什么是MVVM框架？</a></li>
    <li><a href="http://www.syscom.com.tw/ePaper_New_Content.aspx?id=498&EPID=219&TableName=sgEPArticle" target="_blank">淺談MVVM架構</a></li>
    <li><a href="https://kknews.cc/zh-tw/code/l3n8z59.html" target="_blank">一篇文章告訴你MVC、MVP、MVVM</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10215066" target="_blank">Vue 的聲明式渲染、樣板與資料</a></li>
    <li><a href="https://www.zhihu.com/question/68121329" target="_blank">怎么理解“声明式渲染”？</a></li>
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