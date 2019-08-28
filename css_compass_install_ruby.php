<!doctype html>
<html class="pages css view">
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
                        <time>2016-11-28</time>
                        <h1>Compass：安裝 Ruby 工作環境</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>安裝步驟：</h2>
<p class="step">
    <span>Step01. 下載 <a href="https://rubyinstaller.org/" target="_blank">RubyInstaller</a>。</span>
</p>
<figure>
    <img src="images/pic/compass-ruby/step-1.jpg">
    <figcaption>RubyInstaller 下載頁面。</figcaption>
</figure>
<p class="step">
    <span>Step02. 安裝 RubyInstaller。</span>
</p>
<br>
<p class="step">
    <span>Step03. 安裝 Sass。</span>
    <span>(1) 開始程式集 -> Ruby -> Start Command Prompt with Ruby（命令提示元）。</span>
    <span>(2) 輸入指令「<em>gem install compass</em>」。</span>
</p>
<figure>
    <img src="images/pic/compass-ruby/step-2.jpg">
    <figcaption>安裝 Compass。</figcaption>
</figure>
<p class="step">
    <span>Step04. 在指定磁碟中建立專案所需的資料夾，如 E:/itrong。</span>
    <span>(1) 命令提示字元，輸入「D:」（更換根目錄路徑）。</span>
    <span>(2) 輸入「<em>cd itrong</em>」（至專案的資料夾內）。</span>
    <span>(3) 輸入「<em>compass create 名稱</em>」。（建立存放 sass 相關檔案的資料夾）（註1）</span>
</p>
<figure>
    <img src="images/pic/compass-ruby/step-3.jpg">
    <figcaption>建立專案資料夾。</figcaption>
</figure>
<p class="step">
    <span>Step05. 輸入指令「<em>compass watch 專案資料夾名稱</em>」。（註2）</span>
</p>
<figure>
    <img src="images/pic/compass-ruby/step-4.jpg">
    <figcaption>輸入同步編譯指令。</figcaption>
</figure>
<p>
    <span>註 1：</span>
    <span>「sass」資料夾內的檔案為多支 scss，可將副檔名更改為 sass。</span>
    <span>「stylesheets」資料夾為多支 css（和 sass 對應）。</span>
    <span>「config.rb」為編譯檔，不可缺少。</span>
</p>
<br>
<p>
    <span>註 2：</span>
    <span>此步驟將使編寫的 SCSS / Sass 儲存後自動編譯到 CSS 檔案內。</span>
    <span>亦可至專案資料夾內才輸入指令「<em>compass watch</em>」，如此就不用在專案資料夾外還得 KEY 入資料夾名稱。</span>
</p>
<br>
<p>稍微補充有關 <em>config.rb</em>：<br>
css_dir = "stylesheets"：建議改為 css，同時 stylesheets 資料夾也要更名為 css。<br>
# line_comments = false：將「#」移除，即可取消註解。<br>
如果有更改 <em>config.rb</em> 任何資訊，都需要重新執行「<em>compass watch</em>」才能完成同步更新。</p>
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