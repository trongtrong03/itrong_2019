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
                        <time>2016-11-21</time>
                        <h1>SKYPE 外掛</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>如何製作 SkypeMe 按鈕？<br><a href="http://skypebiz.pchome.com.tw/skypeme/skypeme.html" target="_blank">SkypeBIZ 企業服務</a></p>
<p>以下提供兩種功能：</p>
<h2>聊天視窗：</h2>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;a href="skype:帳號?chat" onclick="return skypeCheck();"&gt;圖示或文字&lt;/a&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h2>通話：</h2>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;a href="skype:帳號?call" onclick="return skypeCheck();"&gt;圖示或文字&lt;/a&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
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