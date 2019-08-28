<!doctype html>
<html class="pages app view">
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
                        <time>2019-04-01</time>
                        <h1>VS Code 實用外掛介紹：中文化</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<figure>
    <img src="images/pic/vscode/lang-1.png">
    <figcaption>VS Code 中文化流程。</figcaption>
</figure>
<p class="step">
    <span>Step01. 點擊左側側邊攔最後一個功能圖示「extensions」（延伸模組）。</span>
    <span>呼叫延伸模組功能後，於搜尋框輸入「Chinese language」關鍵字，並點擊中文繁體項目的安裝（install）按鈕。</span>
</p>
<br>
<p class="step">
    <span>Step02. 按下組合鍵「Ctrl + Shift + P」。</span>
    <span>於搜尋輸入框鍵入「config」，點選第一個項目「Configure Display Language」，或直接押下 Enter 鍵也可以。</span>
</p>
<figure>
    <img src="images/pic/vscode/lang-2.png">
    <figcaption>VS Code 中文化流程。</figcaption>
</figure>
<p class="step">
    <span>Step03. 將「en」修改為「zh-TW」。</span>
    <span>修改完成後進行儲存，關閉 VS Code 並重新啟動，系統語言即變更為中文。</span>
</p>
<figure>
    <img src="images/pic/vscode/lang-3.png">
    <figcaption>VS Code 中文化流程。</figcaption>
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