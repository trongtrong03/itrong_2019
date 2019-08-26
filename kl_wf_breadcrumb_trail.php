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
                        <time>2017-04-27</time>
                        <h1>什麼是麵包屑導覽（Breadcrumb Trail）？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>麵包屑導覽（Breadcrumb Trail）是在使用者介面中的一種導覽輔助，例如以下模樣：</p>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">首頁 > 最新消息 > 活動公告</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>「麵包屑」這個名詞來自格林童話故事《糖果屋》的情節，內容描述一對遭遺棄在森林的孩童，試圖透過沿路布置的麵包屑尋找回家的路。</p>
<p>導入麵包屑導覽的好處：</p>
<ol class="decimal">
    <li>提供路徑的交互方式，方便用戶跳轉到其它頁面。</li>
    <li>從側面展示該信息集合的信息結構和集合方式。</li>
    <li>有利於 SEO，畢竟多次強調網站關鍵字，擴大了關鍵字的範圍。</li>
</ol>
<p>可分為三種類型：</p>
<ol class="decimal">
    <li>路徑型：<br>路徑型麵包屑是一個動態顯示用戶到達頁面經過的途徑。</li>
    <li>位置型：<br>位置型麵包屑是固定的，顯示了頁面在網站結構中的位置。</li>
    <li>屬性型：<br>屬性型麵包屑給出的當前頁面的分類資訊。</li>
</ol>
<p>雖然許多人提倡網站導入麵包屑導覽的好處，但也一派人不認同使用它，原因為下：</p>
<ol class="decimal">
    <li>功能與瀏覽器的返回功能重複。</li>
    <li>不適用過於豐富或很長的單元字串。</li>
</ol>
<p>推薦文章：<a href="https://read01.com/QodoDa.html" target="_blank">網頁面包屑導航是什麼？</a></p>
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