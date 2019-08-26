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
                        <time>2016-11-25</time>
                        <h1>Sass 與 SCSS 基本介紹</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>基本介紹：</h2>
<p>Sass 全名 Syntactically Awesome StyleSheets，是 CSS 的擴展語言，除了完全兼容 CSS 與 CSS3 語法外，還提供多種規則指令，來輔助開發者更輕鬆便利地撰寫網頁樣式表。</p>
<p>Sass 有以下這些特色：</p>
<ol class="decimal">
    <li>兼容 CSS3。</li>
    <li>提供變量（variables）、嵌套（nesting）、混合（mixin）、導入（import）等擴展功能。</li>
    <li>可對顏色或其他值進行函數操作。</li>
    <li>提供函式庫控制指令。</li>
    <li>可制定輸出格式。</li>
</ol>
<p>Sass 有兩種語法，第一種是基於 CSS3 語法的擴充版本，名為 Sassy CSS，也就是 SCSS，此語法的文件格式必須式 <em>.scss</em>。</p>
<p>第二種則是縮排語法，通稱 Sass，它不使用花括號，直接通過縮排來表達選擇器與其樣式屬性的嵌套層級，此外，也不使用分號作結尾，用換行符來分隔屬性，讓樣式表看起來更加簡潔。Sass 樣式表文件須以 <em>.sass</em> 副檔名格式。</p>

<br>
<h2>如何使用：</h2>
<p>安装 Sass gem。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">gem install sass</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>如果是 windows 系統，則需要安裝 <a href="https://rubyinstaller.org/" target="_blank">Ruby 語言</a>，相關教學可見本篇：<a href="css_compass_install_ruby.php" target="_blank">〈Compass：安裝 Ruby 工作環境〉</a></p>
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