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
                        <time>2017-11-26</time>
                        <h1>什麼是 HEIF？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>HEIF 全名為 High Efficiency Image File Format，直翻意思為「高效率圖檔格式」，或是「高校圖檔格式」，是由動態圖像專家組（MPEG）於 2013 制訂的新格式，但大約在 2015 年始完成正式的技術規範。</p>
<p>2017 WWDC 蘋果全球開發者大會提到，未來 iOS11 將使用 HEIF 這個格式來作為相機拍攝圖像的預設格式，Apple 聲稱比起傳統的 JPEG / GIF，這是一個可以減少影像佔據儲存空間的格式，達到以更少容量來儲存更好畫質照片的目的。</p>
<p>雖說現在 HEIF 尚未普及，能直接開啟此格式的裝置仍不多，不過若使用者從 iOS11 拍攝的照片上傳至社群平台、手機 APP 互傳檔案，或是將手機連接到 Mac 及 PC，系統皆會自動轉成可被支援讀取的格式，然而，若是先將 HEIF 影像上傳至雲端（例如：Google Drive），再用其他裝置抓取下來的話，則不會自動轉檔為可支援的格式，必須仰賴第三方轉檔軟體來處理影像。</p>
<p>特色：</p>
<ol class="decimal">
    <li>檔案擴展名為 .heif 或 .heic。</li>
    <li>媒體檔案以 HEVC 標準來編碼。</li>
    <li>使用 ISOBMFF 格式來儲存。</li>
    <li>有效率地儲存連拍照和動畫圖像（cinemagraphs）。</li>
    <li>支援計算攝影情景（例如全景攝影、 HDR 照片、光場相機等）。</li>
    <li>支援有損或無損影像資料儲存。</li>
    <li>提供更好和容易的途徑來分發硬照、相集和相關的檔案資訊。</li>
</ol>
<p>此外，若想將 iOS11 的相機更改回拍照儲存影像為 JPEG 格式，可由「系統 -> 相機 -> 格式 -> 最相容」變更設定。</p>
<figure>
    <img src="images/pic/knowledge/heif-1.jpg">
    <figcaption>將 iOS11 的相機更改回拍照儲存影像為 JPEG 格式。</figcaption>
</figure>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://zh.wikipedia.org/wiki/%E9%AB%98%E6%95%88%E7%8E%87%E5%9B%BE%E5%83%8F%E6%96%87%E4%BB%B6%E6%A0%BC%E5%BC%8F" target="_blank">維基百科</a></li>
    <li><a href="https://www.pcmarket.com.hk/2017/06/06/apple%E8%A6%81%E6%94%B9%E8%AE%8A%E5%9C%96%E5%83%8F%E6%BD%AE%E6%B5%81-heif%E6%A0%BC%E5%BC%8F%E6%98%AF%E7%94%9A%E9%BA%BC/" target="_blank">【WWDC 2017】Apple 要改變圖像潮流？HEIF 格式是甚麼？</a></li>
    <li><a href="https://www.newmobilelife.com/2017/09/18/ios-11-heif-8-faq/" target="_blank">拍照不再塞爆 iPhone 了　有關 iOS 11 HEIF 照片格式的 8 個 FAQ</a></li>
    <li><a href="http://www.chinatimes.com/realtimenews/20170920003230-260412" target="_blank">iOS 11新照片格式 恐讓Windows用戶頭痛</a></li>
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