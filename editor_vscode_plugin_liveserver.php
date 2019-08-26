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
                        <time>2019-07-16</time>
                        <h1>VS Code 實用外掛介紹：Live Server</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Live Server 可以讓正在 VS Code 編輯的網頁內容，及時同步於瀏覽器的該網頁內容。</p>
<p class="step">
    <span>Step01. 點擊「延伸模組」（Extensions）。</span>
    <span>在左邊功能選單中找到「延伸模組」（Extensions）的功能選項，並點擊打開。</span>
</p>
<figure>
    <img src="images/pic/vscode/liveserver-1.jpg">
    <figcaption>點擊延伸模組按鈕。</figcaption>
</figure>

<p class="step">
    <span>Step02. 尋找套件並安裝。</span>
    <span>在關鍵字輸入框中輸入套件名稱，找到「Live Server」，然後點擊安裝按鈕。</span>
</p>
<figure>
    <img src="images/pic/vscode/liveserver-2.jpg">
    <figcaption>安裝套件。</figcaption>
</figure>

<p class="step">
    <span>Step03. 安裝完成後重新啟動 VS Code。</span>
    <span>需要重新啟動編輯器，套件始會生效。</span>
</p>

<p class="step">
    <span>Step04. 在編輯中的檔案呼叫右鍵選單，點擊「Open with Live Server」。</span>
</p>
<figure>
    <img src="images/pic/vscode/liveserver-3.jpg">
    <figcaption>點擊「Open with Live Server」。</figcaption>
</figure>

<p class="step">
    <span>Step05. 承 4，瀏覽器將自動開啟該編輯頁面。</span>
    <span>這時已經啟動「Live Server」功能，接下來在 VS Code 編輯的內容，一經存檔，瀏覽器就會立即同步編輯存檔後的內容。</span>
</p>
<figure>
    <img src="images/pic/vscode/liveserver-4.jpg">
    <figcaption>瀏覽器會自動打開正在編輯的網頁，且啟用同步狀態。</figcaption>
</figure>

<p>同步功能可以省下我們每次存檔後，必須重新整理瀏覽器網頁才能看到最新內容的步驟，需注意的是，必須先進行存檔的動作，瀏覽器才會馬上進行同步。</p>
<figure>
    <img src="images/pic/vscode/liveserver-5.jpg">
</figure>
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