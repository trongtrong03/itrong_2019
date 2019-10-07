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
                        <time>2019-10-03</time>
                        <h1>Lesson14-- 設定遠端（remote）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>學習 Git 操作的記錄文章已邁入第十四篇，前面十三篇皆聚焦於本機端版本控制的技巧，而接下來將陸續學到如何與遠端的儲存庫（repository）連接，透過推送（Push）與拉取（Pull）等指令，將本機儲存庫與遠端儲存庫同步化，如此一來，即使個人電腦故障毀損，本機專案資料悉數化為雲煙，依然能從遠端儲存庫取回自己推送上去的檔案。而另一方面，如果要在別台工作電腦或讓其他人使用你的專案，同樣可以從遠端儲存庫上克隆（Clone）下來進行作業。以上種種便利性，足見遠端之於 Git 是多麼重要的一項環節。</p>
<p>坊間支援 Git 原始碼存取的服務有好幾種，<a href="https://github.com/" target="_blank">GitHub</a> 堪稱其中最廣受使用者歡迎的翹楚，因此本篇學習 remote 的對象將以 <a href="https://github.com/" target="_blank">GitHub</a> 作為範本。</p>
<p>在開始進行遠端指令操作之前，首先，得先要有一個 <a href="https://github.com/" target="_blank">GitHub</a> 或別的提供 Git 服務代管的平台帳號，並創建一個新的 new repository，參考畫面如下：</p>
<figure>
    <img src="images/pic/git/bash-remote-01.jpg">
    <figcaption>於 GitHub 新建一個遠端儲存庫。</figcaption>
</figure>
<p>建立之後會跳轉至該儲存庫的初始頁面，基本上長這個模樣：</p>
<figure>
    <img src="images/pic/git/bash-remote-02.jpg">
</figure>
<p>已經學過本機端基礎 Git 操作的你，對於畫面中的多半指令應該已不陌生，包含 GitHub 在內多個服務平台，都會很貼心地手把手教導將本機端儲存庫與遠端儲存庫的流程，基本上照著指示操作應該不會遇到問題。而我們現在練習所需要的，則是這個遠端儲存庫的連結，也就是「HTTPS」後方那一串網址，以上方影像為例，該遠端儲存庫網址為「https://github.com/trongtrong03/demo.git」。</p>
<p>呼叫本機端目標專案儲存庫的 Bash 視窗，輸入添加遠端主機與路徑的指令：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git remote add origin 遠端儲存庫連結</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="shell">$ git remote add origin https://github.com/trongtrong03/demo.git</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p><em>add</em> 自不必多說，即增加之意，<em>origin</em> 則是後方遠端儲存庫的主機名稱，可以更換自定義的其他名稱，<em>origin</em> 只是一般約定成俗的預設名稱，這裡我們從善如流，繼續沿用之。</p>
<p>指令送出後，已經成功將遠端儲存庫與本機目標專案建立好連接，之後就可以將檔案推送（Push）上遠端了，如果要確認目前本機端專案目錄的遠端節點狀態，可輸入 <em>git remote -v</em> 指令進行查詢。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="shell">$ git remote -v</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/git/bash-remote-03.jpg">
</figure>
<p>回應結果將會是遠端儲存庫的名稱以及其網址。</p>

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