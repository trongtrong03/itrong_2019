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
                        <time>2017-05-06</time>
                        <h1>MS-DOS：刪除空目錄（rd）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>刪除空目錄使用的指令為 <em>rd</em>，即 remove directory。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">rd 資料夾名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">rd demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>需注意，單純的 <em>rd</em> 指令只能移除「空的目錄」，若該目錄裡有子檔案的情況下使用此指令，會得到「目錄不是空的」訊息且無法刪除成功。</p>
<p>若要連同目錄內的子檔案一併移除，則須加上 <em>/s</em> 指令，例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash">rd /s demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>此時系統會再次詢問是否確定要執行刪除的動作，若不想讓系統再次詢問，則可以加上 <em>/q</em>，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="bash">rd /s /q demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>（<em>/s</em> 與 <em>/q</em> 先後沒有差別。）</p>
<p><em>rd</em> 也可以使用 <em>rmdir</em> 來操作。</p>
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