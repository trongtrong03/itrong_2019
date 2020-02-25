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
                        <time>2019-09-25</time>
                        <h1>Notes01-- Git 初始設定（config）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>電腦安裝完 Git 軟體後，在開始版本庫建立前需要先進行的初始化設定──設定使用者名稱與電子信箱帳號。<br>這個步驟非常重要，因為每次提交，Git 皆會記錄這些資訊，以方便其他協力者查看。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="shell">$ git config --global user.name "名稱"
$ git config --global user.email 電子信箱帳號</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="shell">$ git config --global user.name "iTrong"
$ git config --global user.email torngtrong03@gmail.com</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p class="mb-0">如果要查看目前設定之資訊的話，只要輸入至自定義名稱之前即可：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="shell">$ git config --global user.name
$ git config --global user.email</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
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