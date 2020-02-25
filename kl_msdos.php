<!doctype html>
<html class="pages res view">
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
                        <time>2019-05-09</time>
                        <h1>作業系統：MS-DOS 的基本指令介紹</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>使用 Windows 作業系統的用戶對 MS-DOS 這個詞應該不陌生，是的，它就是微軟發展的一套作業系統，全名為「MicroSoft Disk Operating System」，早期作業系統基本上是由鍵盤輸入特定的指令命令電腦執行動作，不若現在都是透過圖形化介面操作管理我們的電腦。儘管對一般使用者來說幾乎沒有打開命令提示字元輸入指令的需要，但對程式語言工程師而言，仍是時不時會需要召喚它執行系統檢測、安裝軟體掛件或是專案作業，其效率有時甚至超越純使用圖形化介面執行工作的人。以下將一些網頁前端工作者較長使用到的指令整理成一份簡表，馬上一起來看看。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex3">用途</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_cd">cd</a></span>
        <span class="t-flex3">移動到指定資料夾</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_ren">ren</a></span>
        <span class="t-flex3">幫檔案或資料夾重新命名</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_md">md</a></span>
        <span class="t-flex3">建立資料夾</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_rd">rd</a></span>
        <span class="t-flex3">刪除空的資料夾</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_del">del</a></span>
        <span class="t-flex3">刪除檔案</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_copy">copy</a></span>
        <span class="t-flex3">複製檔案</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_dir">dir</a></span>
        <span class="t-flex3">顯示資料夾詳細資訊</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_type">type</a></span>
        <span class="t-flex3">移動檔案裡的內容</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><a href="#msdos_echo">echo</a></span>
        <span class="t-flex3">將字串輸出到命令提示字元上或輸入到指定檔案內容裡</span>
    </div>
</div>
<br>
<h2 id="msdos_cd"><em>cd</em>：</h2>
<p><em>cd</em> 也被稱作 <em>chdir</em>，全名 change directory，即改變目錄之意，更直白地講就是移動到指定資料夾目錄，或是進行返回的動作。</p>
<p>移動至指定目錄：</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="bash">cd path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>假如沒有輸入指定路徑，則視同在當前指令所在的路徑執行操作（其他命令也是一樣概念）。另外，也可以直接將資料夾拖曳到命令提示字元視窗，視窗將會自動顯示路徑，如此在路徑很長的情況下，就不需要一層一層慢慢 <em>cd</em> 了。</p>
<br>
<p>返回當前目錄的上一層：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">cd..</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>返回當前目錄最上層的目錄：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash">cd\</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>補充，<em>cd</em> 也可以用 <em>chdir</em> 替代指令。</p>
<br>
<br>
<h2 id="msdos_ren"><em>ren</em>：</h2>
<p><em>ren</em>，又稱 <em>rename</em>，意即幫檔案或資料夾重新命名。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="bash">ren path\filename Newfilename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="bash">ren d:\demo demo2</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>也可以用 <em>rename</em> 替代 <em>ren</em> 來下指令。</p>
<br>
<br>
<h2 id="msdos_md"><em>md</em>：</h2>
<p>又稱 <em>mkdir</em>，全名 make directory，即建立目錄的意思。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="bash">md path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p><em>md</em> 也可以使用 <em>mkdir</em> 來操作。</p>
<br>
<br>
<h2 id="msdos_rd"><em>rd</em>：</h2>
<p>刪除空目錄使用的指令為 <em>rd</em>，即 remove directory。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="bash">rd path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<p>需注意，單純的 <em>rd</em> 指令只能移除「空的目錄」，若該目錄裡有子檔案的情況下使用此指令，會得到「目錄不是空的」訊息且無法刪除成功。</p>
<p>若要連同目錄內的子檔案一併移除，則須加上 <em>/s</em> 指令，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area08" class="code-text"><code class="bash">rd /s demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>此時系統會再次詢問是否確定要執行刪除的動作，若不想讓系統再次詢問，則可以加上 <em>/q</em>，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area09" class="code-text"><code class="bash">rd /s /q demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<p><em>/s</em> 與 <em>/q</em> 先後沒有差別。<em>rd</em> 也可以替換成 <em>rmdir</em> 來操作。</p>
<br>
<br>
<h2 id="msdos_del"><em>del</em>：</h2>
<p><em>rd</em> 指令僅限於刪除資料夾，若要針對檔案進行刪除動作，則必須使用 <em>del</em> 或 <em>erase</em>。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="bash">del path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<p>輸入 <em>del</em> 時還可以附加一些參數執行更詳細的動作：</p>
<section class="t-form">
    <article class="t-head">
        <span class="t-flex1">參數</span>
        <span class="t-flex4">說明</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/f</span>
        <span class="t-flex4">強制刪除唯讀檔案。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/s</span>
        <span class="t-flex4">從所有子目錄刪除指定檔案。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/q</span>
        <span class="t-flex4">刪除時，不要求確認。</span>
    </article>
    <article class="t-row">
        <span class="t-flex1">/a</span>
        <span class="t-flex4">根據屬性選擇要刪除的檔案。</span>
    </article>
</section>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area11" class="code-text"><code class="bash">del /a *.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>
<p>刪除當前目錄內所有副檔名是 .txt 的檔案。</p>
<p><em>del</em> 也可以使用 <em>erase</em> 來操作。</p>
<br>
<br>
<h2 id="msdos_copy"><em>copy</em>：</h2>
<p><em>copy</em> 指令是複製檔案的方法。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area12" class="code-text"><code class="bash">copy path\filename Newfilename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area12">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area13" class="code-text"><code class="bash">copy demo.txt demo02.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area13">
        <span>COPY</span>
    </button>
</div>
<p>附加參數：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">指令</span>
        <span class="t-flex4">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/d</span>
        <span class="t-flex4">允許解密要建立的目的檔。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/v</span>
        <span class="t-flex4">驗證新檔案寫入是否正確。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/n</span>
        <span class="t-flex4">複製帶有非 8dot3 名稱的檔案。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/y</span>
        <span class="t-flex4">使用確認是否要覆蓋現有目的檔的提示。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/-y</span>
        <span class="t-flex4">同上。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/z</span>
        <span class="t-flex4">可重新啟動模式複製已聯網的檔案。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/a</span>
        <span class="t-flex4">表示 ASCII 文字檔案。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">/b</span>
        <span class="t-flex4">表示二進位檔案。</span>
    </div>
</div>
<p>要注意的是，不能只單下達一個複製檔案的指令，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area14" class="code-text"><code class="bash">copy demo.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area14">
        <span>COPY</span>
    </button>
</div>
<p>系統會告訴你「檔案不可以複製到檔案本身」的訊息，由此可知複製的動作必須同時給予新的名稱。</p>
<br>
<br>
<h2 id="msdos_dir"><em>dir</em>：</h2>
<p><em>dir</em> 指令用於顯示某個指定資料夾下的全部或部分檔案目錄和子目錄的相關資訊，包含檔案名、副檔名、檔案長度、檔案建立日期和時間。同時給出所顯示檔案的總數和所剩餘的磁碟空間。</p>
<br>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area15" class="code-text"><code class="bash">dir path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area15">
        <span>COPY</span>
    </button>
</div>
<figure>
    <img src="images/pic/knowledge/dir-01.png">
</figure>
<p>附加參數：</p>
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
    <img src="images/pic/knowledge/dir-02.png">
    <figcaption>這是簡潔模式下的 <em>dir</em> 顯示目錄資訊的形式。</figcaption>
</figure>
<br>
<br>
<h2 id="msdos_type"><em>type</em>：</h2>
<p><em>type</em> 指令可用來顯示輸入檔案之內容。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area16" class="code-text"><code class="bash">type path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area16">
        <span>COPY</span>
    </button>
</div>
<br>
<br>
<h2 id="msdos_echo"><em>echo</em>：</h2>
<p><em>echo</em> 指令可以將輸入的字串顯示在終端機（命令提示字元）上，或是指定一個檔案，將字串內容輸入到該檔案內。</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area17" class="code-text"><code class="bash">echo "string" > path\filename</code></pre>
    <button class="copy-btn" data-clipboard-target="#area17">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area18" class="code-text"><code class="bash">echo "This is title" > abc.txt</code></pre>
    <button class="copy-btn" data-clipboard-target="#area18">
        <span>COPY</span>
    </button>
</div>
<p>「This is title」這串文字將會直接輸入到 abc.txt 檔案裡。</p>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area19" class="code-text"><code class="bash">echo This is title</code></pre>
    <button class="copy-btn" data-clipboard-target="#area19">
        <span>COPY</span>
    </button>
</div>
<p>在沒有指定檔案目標前提下，「This is title」則將直接顯示在命令提示字元視窗上。</p>
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