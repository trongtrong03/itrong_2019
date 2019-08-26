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
                        <time>2017-08-03</time>
                        <h1>什麼是 APNG？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>APNG，全名 Animated Portable Network Graphics，是 PNG 的動畫擴充格式，輸出格式為 .png 或 .apng。</p>
<p>事實上，APNG 並非 PNG 官方認可的動態格式，官方動態格式定義為 MNG（Multiple-image Network Graphics），不過 MNG 並不受大眾青睞，且瀏覽器也鮮少主動支援。比起 MNG，APNG 更大的對手則是 GIF，兩者功能與製程類似。</p>
<p>以下是 APNG 與 GIF 的比較簡表：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">APNG</span>
        <span class="t-flex1">GIF</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">發展較晚（2008）</span>
        <span class="t-flex1">發展較早（1987）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">支援 24 位元色</span>
        <span class="t-flex1">支援 8 位元色</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">支援 Alpha 透明通道</span>
        <span class="t-flex1">不支援 Alpha 透明通道</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">瀏覽器支援較少</span>
        <span class="t-flex1">所有瀏覽器皆支援</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">檔案較大</span>
        <span class="t-flex1">輕量</span>
    </div>
</div>
<p>目前幾個主流瀏覽器皆已開始支援 APNG 格式，因此會發現，除了檔案體積外，APNG 幾乎全面勝於 GIF，然而 GIF 已流行多年，加上有「輕量」這極為重要的優勢，APNG 迄今仍難以取代 GIF。</p>
<p>除了 GIF，APNG 其他的「敵人」還有 Flash，但隨著 Flash 即將銷聲匿跡，這點發展不利的劣勢可望消失。</p>
<br>
<p class="mb-0">以下推薦兩套軟體，分別製作，以及分解 APNG 的好用工具：</p>
<h2>APNG Disassembler</h2>
<p>
    <span>下載連結：<a href="http://apngdis.sourceforge.net/" target="_blank">http://apngdis.sourceforge.net/</a></span>
    <span>APNG Disassembler 可用來分解 APNG 格式的影像，將影像分解為每一幀。</span>
</p>
<br>
<h2>APNG Anime Maker</h2>
<p>
    <span>下載連結：<a href="http://www.azofreeware.com/2015/03/apng-anime-maker-portable.html" target="_blank">http://www.azofreeware.com/2015/03/apng-anime-maker-portable.html</a></span>
    <span>APNG Anime Maker 可用來將多張 PNG 合併為一個 APNG 影像，藉以來製作動態圖檔。</span>
</p>
</p>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://aotu.io/notes/2016/11/07/apng/index.html" target="_blank">APNG 那些事</a></li>
    <li><a href="https://www.techbang.com/posts/14598-low-quality-gif-aspect-of-the-network-for-20-years-better-why-apng-failed-to-replace-it" target="_blank">低畫質的 GIF 縱橫網路20年了，更優秀的 APNG 為什麼沒能取代它？</a></li>
    <li><a href="https://read01.com/zh-tw/3R6oMy.html" target="_blank">APNG Disassembler – 分解導出 APNG 動畫圖片中的幀</a></li>
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