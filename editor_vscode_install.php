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
                        <time>2019-03-23</time>
                        <h1>VS Code 簡介與安裝</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>VS Code，全名 Visual Studio Code，是一套由微軟公司開發的跨平台編輯器，與 Atom（由 GitHub 開發）相同，使用 Electron 開源框架（也是由 GitHub 開發），目前已是公布於 GitHub 開源社群裡成長迅速的開源專案之一，儘管執行效能及套件多樣性現階段尚不及 Sublime，但鑒於 VS Code 仍持續不斷在更新（相較 Sublime Text3 已停宕在 Beta 版本許久），被看好未來成為最熱門的開發工具。</p>
<p>相較 Sublime、Atom ...等編輯器軟體，VS Code 還有內嵌 Git 版本控管的優勢，且亦能與 Gulp、Webpack 整合，相當地方便。</p>
<br>
<h2>安裝流程：</h2>
<p class="step">
    <span>Step01. 至<a href="https://code.visualstudio.com/" target="_blank">官網</a>下載安裝程式。</span>
</p>
<figure>
    <img src="images/pic/vscode/vscode.png">
    <figcaption>VS Code 的官方網頁。</figcaption>
</figure>
<p class="step">
    <span>Step02. 安裝程式。</span>
    <span>如果沒什麼特殊需求的話，基本上只要一直下一步即可。</span>
</p>
<figure>
    <img src="images/pic/vscode/install-app.png">
    <figcaption>成功完成安裝。</figcaption>
</figure>
<p class="step">
    <span>Step03. 開始使用。</span>
    <span>開啟 VS Code，初始介面會是長這樣，我們可以開始建立個人化的操作設定以及擴充套件的安裝。</span>
</p>
<figure>
    <img src="images/pic/vscode/vscode-gui.png">
</figure>
<p>補充，若已安裝 VS Code，在命令提示字元輸入「code」，即可快速開啟本工具。</p>
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