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
                        <time>2019-01-13</time>
                        <h1>httpVueLoader -- 不需編譯也能載入 .vue</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>以往想透過加載 .vue 檔案建立網頁環境，通常需要 nodeJS 來輔助編譯，但目前有一款名為 <a href="https://www.npmjs.com/package/http-vue-loader" target="_blank">http-vue-loader</a> 的工具套件，令開發者得以不用透過編譯，直接載入 .vue 檔案。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://unpkg.com/vue"&gt;&lt;/script&gt;
&lt;script src="https://unpkg.com/http-vue-loader"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>建議是將腳本下載到自己專案資料夾作內部引用比較好。</p>
<br>
<p>然後就可以在 <em>components</em> 裡面使用 <em>httpVueLoader</em> 指令來載入 .vue 檔案。</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">new Vue({
    el: 'app',
    components: {
        'my-component': httpVueLoader('my-component.vue')
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;div id="app"&gt;
    &lt;my-component&gt;&lt;/my-component&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.npmjs.com/package/http-vue-loader" target="_blank">http-vue-loader</a></li>
    <li><a href="https://kuro.tw/posts/2017/07/11/%E4%B8%8D%E9%9C%80%E7%B7%A8%E8%AD%AF%E4%B9%9F%E8%83%BD%E8%BC%89%E5%85%A5-vue-%E5%85%83%E4%BB%B6%E6%AA%94-%E4%BD%BF%E7%94%A8-http-vue-loader/" target="_blank">不需編譯也能載入 .vue 元件檔: 使用 http-vue-loader</a></li>
    <li><a href="https://dotblogs.com.tw/hellodeveloper/2017/09/21/143929" target="_blank">不用vue-cli也能使用vue檔案 (使用CDN方式)</a></li>
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