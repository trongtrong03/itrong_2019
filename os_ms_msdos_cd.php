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
                        <time>2017-05-04</time>
                        <h1>MS-DOS：移動路徑（cd）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>cd</em> 也被稱作 <em>chdir</em>，全名 change directory，即改變目錄之意，更直白地講就是移動到指定資料夾目錄，或是進行返回的動作。</p>
<br>
<h2>指令一覽：</h2>
<p>移動至指定目錄：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">cd 資料夾名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">cd Demo</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>※ 可以直接將資料夾拖曳到命令提示字元視窗，視窗將會自動顯示路徑，如此在路徑很長的情況下，就不需要一層一層慢慢 <em>cd</em> 了。</p>
<br>
<p>返回當前目錄的上一層：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash">cd..</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>返回當前目錄最上層的目錄：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="bash">cd\</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>補充說明，<em>cd</em> 也可以用 <em>chdir</em> 替代指令。</p>
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