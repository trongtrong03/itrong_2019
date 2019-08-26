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
                        <time>2017-05-08</time>
                        <h1>MS-DOS：顯示資訊（dir）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>顯示某個指定目錄下的全部或部分檔案目錄和子目錄，並提供相關資訊，包含檔案名、副檔名、檔案長度、檔案建立日期和時間。同時給出所顯示檔案的總數和所剩餘的磁碟空間。</p>
<br>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">dir 目錄路徑 + 名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">dir demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<figure>
    <img src="images/pic/msdos/dir-01.png">
</figure>
<h2>參數一覽：</h2>
<section class="t-form">
    <article class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex4">說明</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/p</span>
        <span class="t-flex4">分屏顯示，當資訊填滿整個視窗後先暫停，直到使用者按鍵後繼續。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/w</span>
        <span class="t-flex4">簡潔模式。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/s</span>
        <span class="t-flex4">對於給定的檔案標誌符，顯示其在指定目錄及指定目錄所有下級子目錄中的相應位置清單。</span>
    </article>
</section>
<figure>
    <img src="images/pic/msdos/dir-02.png">
</figure>
<p>這是簡潔模式下的 <em>dir</em> 顯示目錄資訊的形式。</p>
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