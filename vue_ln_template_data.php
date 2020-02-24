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
                        <time>2020-01-15</time>
                        <h1>資料（Data）與樣板（Template）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在解析之前先回頭看看上一篇創建的 Vue 實體結構：</p>
<h3 class="vue"></h3>
<div class="code-area mb-0">
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
<p>儘管關於 Vue 資料的部分上篇已略述過，不過這裡仍重新筆記一次：</p>
<p>通常我們需要先宣告一個名稱（例如 <em>app</em>、<em>vm</em>（viewmodel））建立 Vue 的實體。</p>
<p>實體需要指定一個 HTML 對象，才可以將資料綁定過去。對象可以是純元素標籤或是 CSS 選擇器（<em>#ID</em> 或 <em>.class</em>），如果不在指定對象內的元素，則無法與 Vue 實體產生互動。</p>
<p><em>data</em> 是一個物件屬性，代表「資料」，資料的屬性值可以是數字、字串、布林值，也可以是陣列或別的物件。除了 <em>data</em> 之外，Vue 實體還可以使用 <em>methods</em>（方法）、<em>computed</em>（運算）等屬性，這些屬性保留日後再行筆記。</p>
<br>
<p>建立基本的 Vue 實體後，我們需要在 HTML 結構作點文章去綁定資料，好讓 DOM 可以順利將 Vue 實體裡的資料渲染出來。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html" v-pre>&lt;div id="app"&gt;
    {{ message }}
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>寫在 HTML 的東西我們稱之為「樣板」（Template）或「模板」，注意喔，模板必須和要綁定 Vue 實體的 <em>el</em> 相對應才有作用。關於樣板的使用方式基本上有以下三種：</p>
<h2>文本綁定：</h2>
<p>上面範例中由兩對花括號（大括號）<em>{{</em> <em>}}</em> 組成的內容就是 Vue 將資料數值以文本方式插入樣板的基本寫法，而插入內容的名稱須與 <em>data</em> 的屬性值名稱互相對應，才能將實體的值綁定到樣板上，當 <em>data</em> 綁定數據發生改變，則樣板插入的內容也會一併更新。</p>
<br>
<h2>指令綁定：</h2>
<p>另一種資料綁定的方式是透過屬性（Attribute）雙向綁定，此時它的寫法規則就不是透過雙大括號，而是利用以 <em>v-</em> 開頭的特殊屬性來實現效果，這些 <em>v-</em> 前綴開頭的特殊詞彙在 Vue 稱之為「指令」。舉例來說：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html" v-pre>&lt;img id="app" src="image.jpg" v-bind:title="message"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p><em>v-bind</em> 即為指令，將原本 HTML 元素標籤裡的 <em>title</em> 屬性值與資料數據的 <em>message</em> 屬性值綁定在一起，當滑鼠懸停圖片上方時就會出現「Hello Vue!」的字串。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="html" v-pre>&lt;input id="app" type="text" v-model="message"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>又或者是 <em>v-model</em> 指令，令 <em>&lt;input&gt;</em> 的 value 值與 <em>data</em> 中 <em>message</em> 屬性值綁定，當 <em>message</em> 值發生改變，<em>&lt;input&gt;</em> 的值也會跟著改變。</p>
<br>
<h2>組件：</h2>
<p>組件（Component）是 Vue 相當重要的功能，我們可以將樣板內容寫在 Vue 實體之前或裡面（又稱全域或局部註冊）使其組件化，於 HTML 裡直接調用該組件即可，例如：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="javascript">Vue.component("component-layout", {
    template: `&lt;p&gt;{{ text }}&lt;/p&gt;`,
    data(){
        return{
            text:'我是全域註冊'
        }
    }
});
let app = new Vue({
    el: "#app"
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="html" v-pre>&lt;div id="app"&gt;
    &lt;component-layout&gt;&lt;/component-layout&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>關於組件的林林總總一時半刻也記錄不完，此刻僅需先瞭解個大概即可，日後會有更詳細的學習筆記作記錄。</p>
<br>
<p>以上就是 Vue 關於樣板語法與實體資料的簡單記錄，理解 Vue 基本的綁定運作方式後，就可以慢慢由簡入深，利用更多樣的屬性和指令建構各種前端需要的使用者介面。</p>
<ul class="refer">
    <li><a href="https://cn.vuejs.org/v2/guide/syntax.html" target="_blank">模板语法 — Vue.js</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10215066" target="_blank">Vue 的聲明式渲染、樣板與資料</a></li>
    <li><a href="https://medium.com/pierceshih/vue-js-%E5%AD%B8%E7%BF%92%E7%AD%86%E8%A8%98-day15-vue-component-%E5%85%83%E4%BB%B6%E5%9F%BA%E6%9C%AC%E7%94%A8%E6%B3%95-a414e2333e2b" target="_blank">「Vue.js 學習筆記 Day15」- Vue component 元件基本用法</a></li>
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