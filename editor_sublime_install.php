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
                        <time>2016-11-22</time>
                        <h1>Sublime Text 安裝與初始設定</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>安裝流程：</h2>
<p class="step">
    <span>Step01. 至<a href="https://www.sublimetext.com/3" target="_blank">官方網站</a>下載安裝應用程式。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-01.png">
</figure>
<p class="step">
    <span>Step02. 執行安裝即可。</span>
</p>
<br>

<h2>設定：</h2>
<p>擁有豐富且成熟的擴充套件是 Sublime Text 其中一項強大之處，但是在使用這些擴充套件前，必須先安裝控制包套件（<a href="https://packagecontrol.io/" target="_blank">Package Control</a>）。</p>
<figure>
    <img src="images/pic/sublime/install-02.png">
    <figcaption>Package Control 的網頁畫面。</figcaption>
</figure>
<h2>操作步驟：</h2>
<p class="step">
    <span>Step01. 開啟 Sublime Text 主控台面板。</span>
    <span>開啟 Sublime Text，於工具列選擇「View -> Show Console」，或是透過快捷鍵「Ctrl + `」來呼叫主控台。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-03.png">
</figure>
<p class="step">
    <span>Step02. 複製 Package Control 程式代碼。</span>
    <span>複製 Package Control 官方套件提供的 <a href="https://packagecontrol.io/installation" target="_blank">Python 程式代碼</a>，程式代碼因應 Sublime Text 版本區分 2 和 3 兩個版本，請選擇自己使用的版本。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-04.png">
</figure>
<p class="step">
    <span>Step03. 將代碼貼於 Sublime Text 主控台面板，按下 Enter 鍵執行安裝。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-05.png">
</figure>
<p class="step">
    <span>Step04. 安裝完成。</span>
</p>
<br>

<h2>使用：</h2>
<p>要如何使用 Package Control 來 Sublime Text 安裝琳瑯滿目、各式各樣的擴充套件？且看以下說明：</p>
<p class="step">
    <span>Step01. 開啟套件管理員。</span>
    <span>於工具列上選擇「Preferences -> Package Control」，或是使用快捷鍵「Ctrl + Shift + P」呼叫套件管理員面板。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-06.png">
</figure>
<p class="step">
    <span>Step02. 輸入指令「Package Control: Install Package」。</span>
    <span>基於 Sublime Text 會即時顯示搜尋結果的特性，我們不需要完整輸入指令，只要輸入個「ins」即可選擇安裝指令。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-07.png">
</figure>
<p class="step">
    <span>Step03. 輸入要安裝的套件名稱，點擊或按下 Enter 鍵執行安裝即可。</span>
</p>
<figure>
    <img src="images/pic/sublime/install-08.png">
</figure>
<br>
<p>若想瞭解較多使用者安裝或推薦的套件列表可參閱此篇：<a href="editor_sublime_plugins.php">Sublime Text 套件推薦列表</a></p>
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