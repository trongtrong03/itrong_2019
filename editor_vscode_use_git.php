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
                        <time>2019-03-25</time>
                        <h1>VS Code 輕鬆使用 Git</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>VS Code 強大之處在於整合了許多前端會使用到的各項必要或輔助工具，Git 便是其中之一，若要在 VS Code 快速使用 Git，務必先將 Git 安裝於電腦本機內，其官方下載<a href="https://gitforwindows.org/" target="_blank">傳送門</a>在此。</p>
<p>確認本機端已安裝 Git，我們假定以下這個專案資料夾要進行 Git 版本控制管理...</p>
<figure>
    <img src="images/pic/vscode/git-1.png">
    <figcaption>欲進行版本控制管理的專案目錄。</figcaption>
</figure>
<p>按下「Ctrl + Shift + `」組合鍵，以新增 CLI（新增終端機），接著在終端機視窗輸入 <em>git init</em> 指令。</p>
<p>（僅按「Ctrl + `」為開關終端機，並非新增。）</p>
<figure>
    <img src="images/pic/vscode/git-2.png">
    <figcaption>輸入 <em>git init</em> 來為本專案建立版控環境。</figcaption>
</figure>

<p>給專案建立 Git 初始化環境後，會發現左側資料夾檔案列表產生了顯示顏色的變化...</p>
<figure>
    <img src="images/pic/vscode/git-3.png">
</figure>

<p>這意味著 Git 已開始追蹤本專案，綠色代表這些檔案未曾列入版控（U）。</p>
<p>此時若我們利用 <em>git add .</em> 指令將所有檔案添加至暫存區域（Staging area），會發現檔案右邊的（U）變成了（A）。</p>
<figure>
    <img src="images/pic/vscode/git-4.png">
    <figcaption>A 為 add 的意思。</figcaption>
</figure>

<p>使用 <em>commit -m</em> 指令將暫存區檔案提交至版本儲存庫（Repository）內，即發現檔案顏色恢復原本的色調，左側 Git 控制圖示的數字也已消失。</p>
<figure>
    <img src="images/pic/vscode/git-5.png">
</figure>

<p>倘若後續有修改或新增檔案，檔案列表皆會立即更新狀態，方便開發者迅速追蹤目前版控狀態。</p>
<figure>
    <img src="images/pic/vscode/git-6.png">
    <figcaption>M 為 modify 的意思。</figcaption>
</figure>
<figure>
    <img src="images/pic/vscode/git-7.png">
    <figcaption>Git 所有指令皆可在 VS Code 終端機進行操作。</figcaption>
</figure>
<p>至於其他有關 Git 的操作方法，可前往<a href="_git.php" target="_blank">此處</a>觀看。</p>
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