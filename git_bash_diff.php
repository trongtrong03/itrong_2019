<!doctype html>
<html class="pages html view">
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
                        <time>2019-10-17</time>
                        <h1>Notes19-- 差異比對（diff）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>或許我們常常使用 <em>git log</em> 指令來確認版控的歷史紀錄，但有時我們也需要比對修改檔案與前一次提交記錄檔案之間的差異，透過 <em>git diff</em> 指令，就可以一口氣列出所有未經提交的編輯差異。</p>

<p>為了展示差異比對的具體功用，我們要先模擬出相關的操作情境，以利更容易理解 <em>diff</em> 的用途，以下是演示步驟：</p>
<p class="step">
    <span>Step01. 新增檔案 <em>1.txt</em> 並輸入內容「111」。</span>
</p>
<p class="step">
    <span>Step02. 將檔案 <em>1.txt</em> 提交（<em>C1</em>）至 Git 版控。</span>
</p>
<p class="step">
    <span>Step03. 修改檔案 <em>1.txt</em> 內容為「222」。</span>
</p>
<br>
<p>此時我們就可以利用 <em>git diff</em> 指令，確認變更檔案的詳細比對差異資訊。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git diff</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-diff-01.jpg">
    <figcaption>與前一次提交版本的差異比對。</figcaption>
</figure>
<p>需要知道的是，<em>diff</em> 僅限於變更檔案在添加（<em>add</em>）至暫存區域之前，一旦檔案進入暫存區域就無法通過差異比對得知檔案修改的差異內容，除非將本次修改的內容先行提交版控，再利用版本 SHA-1 值比對差異的方式，就能針對不同版本之間的差異比對。</p>
<br>

<h2>兩個版本間的差異比對：</h2>
<p>只要輸入要比對的版本 SHA-1 值，就可以進行差異比對，我們可以利用 <em>git log</em> 指令去查詢目標的 SHA-1 值。</p>
<figure>
    <img src="images/pic/git/bash-diff-02.jpg">
    <figcaption>提交名稱前方的英數字組合即是該筆記錄的 SHA-1 值。</figcaption>
</figure>
<p>假設我們要比對 <em>C1</em> 與 <em>C2</em> 的內容，只要在 <em>git diff</em> 後方輸入 SHA-1 值即可，不一定要全部輸入進去，前六碼或五碼甚至四碼也可以。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git diff 1bb2 1f3d</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-diff-03.jpg">
    <figcaption>版本 SHA-1 值沒有先後強制性。</figcaption>
</figure>
<br>
<p>有些朋友可能會注意到差異比對的訊息裡有這麼樣一行文字：</p>
<figure>
    <img src="images/pic/git/bash-diff-04.jpg">
</figure>
<p>它的左右數字分別代表該檔案在舊版總行數與新版總行數，假設現在在文件裡面多輸入兩行內容，重新執行 <em>git diff</em>...</p>
<figure class="mb-0">
    <img src="images/pic/git/bash-diff-05.jpg">
    <figcaption>得見新行總數變更為 3。</figcaption>
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