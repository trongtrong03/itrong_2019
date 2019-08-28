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
                        <time>2019-08-12</time>
                        <h1>font-family</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>font-family</em> 用來設定文字的使用字體。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    font-family: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="css">p {
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>在設定 <em>font-family</em> 的時候，建議不要只設定一個字體，因為要考慮到字體不支援情況下的支援方案，所以通常除了指定字體之外，後面會接著賦予「通用字體」，並用逗號分隔之。</p>
<p>「通用字體」大抵來說可分為五種：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">serif</span>
        <span class="t-flex5">襯線體</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">sans-serif</span>
        <span class="t-flex5">無襯線體</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">cursive</span>
        <span class="t-flex5">手寫體</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">fantasy</span>
        <span class="t-flex5">幻想體</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">monospace</span>
        <span class="t-flex5">等寬體</span>
    </div>
</div>

<p>以下是常見英文指定字體列表：</p>
<h2>襯線體（serif）：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Georgia</span>
        <span class="t-flex2">
            <span style="font-family: Georgia;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Palatino</span>
        <span class="t-flex2">
            <span style="font-family: Palatino;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Times</span>
        <span class="t-flex2">
            <span style="font-family: Times;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Times New Roman</span>
        <span class="t-flex2">
            <span style="font-family: Times New Roman;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<h2>無襯線體（sans-serif）：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Arial</span>
        <span class="t-flex2">
            <span style="font-family: Arial;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Arial Black</span>
        <span class="t-flex2">
            <span style="font-family: Arial Black;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Arial Narrow</span>
        <span class="t-flex2">
            <span style="font-family: Arial Narrow;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Charcoal</span>
        <span class="t-flex2">
            <span style="font-family: Charcoal;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Geneva</span>
        <span class="t-flex2">
            <span style="font-family: Geneva;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Impact</span>
        <span class="t-flex2">
            <span style="font-family: Impact;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Trebuchet MS</span>
        <span class="t-flex2">
            <span style="font-family: Trebuchet MS;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Tahoma</span>
        <span class="t-flex2">
            <span style="font-family: Tahoma;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Verdana</span>
        <span class="t-flex2">
            <span style="font-family: Verdana;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<h2>手寫體（cursive）：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Comic Sans MS</span>
        <span class="t-flex2">
            <span style="font-family: Comic Sans MS;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<h2>幻想體（fantasy）：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Copperplate</span>
        <span class="t-flex2">
            <span style="font-family: Copperplate;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Papyrus</span>
        <span class="t-flex2">
            <span style="font-family: Papyrus;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">fantasy</span>
        <span class="t-flex2">
            <span style="font-family: fantasy;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<h2>等寬體（monospace）：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">Courier New</span>
        <span class="t-flex2">
            <span style="font-family: Courier New;">iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<p>常見中文字體列表：</p>
<h2>Windows：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">微軟正黑體（Microsoft JhengHei）</span>
        <span class="t-flex2">
            <span style="font-family: '微軟正黑體';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">新細明體（PMingLiU）</span>
        <span class="t-flex2">
            <span style="font-family: '新細明體';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">標楷體（DFKai-SB）</span>
        <span class="t-flex2">
            <span style="font-family: '標楷體';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<h2>Mac：</h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">font-family</span>
        <span class="t-flex2">Example</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">蘋方（PingFang）</span>
        <span class="t-flex2">
            <span style="font-family: 'PingFang';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">黑體（STHeiti）</span>
        <span class="t-flex2">
            <span style="font-family: 'STHeiti';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">楷體（STKaiti）</span>
        <span class="t-flex2">
            <span style="font-family: 'STKaiti';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">儷黑 Pro（LiHei Pro）</span>
        <span class="t-flex2">
            <span style="font-family: 'LiHei Pro';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">儷宋 Pro（LiSong Pro）</span>
        <span class="t-flex2">
            <span style="font-family: 'LiSong Pro';">我是中文字 iTrong Work Studio 1234567890</span>
        </span>
    </div>
</div>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area03" class="code-text"><code class="js">object.style.fontFamily="arial,sans-serif"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<!-- 瀏覽器支援性 -->
<h2 class="browser"></h2>
<div class="is-browser">
    <div class="t-form">
        <div class="t-head">
            <span class="t-flex1">Chrome</span>
            <span class="t-flex1">Firefox</span>
            <span class="t-flex1">IE9以下</span>
            <span class="t-flex1">IE Edge</span>
            <span class="t-flex1">Safari</span>
            <span class="t-flex1">Opera</span>
        </div>
        <div class="t-row">
            <span class="t-flex1"><i class="fab fa-chrome"></i></span>
            <span class="t-flex1"><i class="fab fa-firefox"></i></span>
            <span class="t-flex1"><i class="fab fa-internet-explorer"></i></span>
            <span class="t-flex1"><i class="fab fa-edge"></i></span>
            <span class="t-flex1"><i class="fab fa-safari"></i></span>
            <span class="t-flex1"><i class="fab fa-opera"></i></span>
        </div>
        <div class="t-row">
            <span class="t-flex1 is-none">-webkit-</span>
            <span class="t-flex1 is-none">-moz-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-webkit-</span>
            <span class="t-flex1 is-none">-o- / -webkit-</span>
        </div>
    </div>
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