<?php require_once 'include/_viewhead.php' ?>
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
                        <time>2019-08-22</time>
                        <h1>&lt;meta&gt; 之 viewport 屬性</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>&lt;meta&gt; 標籤的 <em>viewport</em> 屬性功用主要是給瀏覽器定義目前裝置的尺寸，在 RWD 響應式設計中是不可或缺的重要語法。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h2>屬性一覽：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex6">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">width</span>
        <span class="t-flex6">
            <em>device-width</em> 指的是裝置可視區域的寬度，也可以設數值（例如480px），但通常以前者較常見，畢竟行動裝置百百款，直接設 <em>device-width</em> 讓各裝置自己去抓最佳的顯示解析度。<br>
            需注意，<em>device-width</em> 不一定就是螢幕解析度。
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">height</span>
        <span class="t-flex6">
            設定畫面高度，較少見。
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial-scale</span>
        <span class="t-flex6">
            網頁初始的縮放比例，範圍從 0.1 到 10，1 表示 100%。
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">minimum-scale</span>
        <span class="t-flex6">
            設定畫面的最小縮放比例，範圍從0.25 到 5。
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">maximum-scale</span>
        <span class="t-flex6">
            設定畫面的最大縮放比例，範圍從 0.25 到 5。
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">user-scalable</span>
        <span class="t-flex6">
            設定是否允許使用者變更縮放比例。
        </span>
    </div>
</div>


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