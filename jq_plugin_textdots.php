<!doctype html>
<html class="pages js view">
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
                        <time>2019-06-23</time>
                        <h1>文字溢出省略符號（Text Dots）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://dotdotdot.frebsite.nl/" target="_blank">dotdotdot</a></p>
<p>我們通常會利用 CSS3 的 <em>text-overflow</em> 屬性來處理文字溢出的問題，但目前 <em>text-overflow</em> 僅能針對單行文字做到溢出用「...」符號替代，而不適用於多行文字，若有這方面的需求，一般仍會尋求 Javascript 的幫助，一款名為 <a href="http://dotdotdot.frebsite.nl/" target="_blank">dotdotdot</a> 的 JQuery 套件提供多種替代樣式，供開發者選用理想的效果方案。</p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="http://itrong.yidas.net/js/modules/dotdotdot/jquery.dotdotdot.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>以下分享幾種樣式供參，為了方便看出套件套用後的差異，範例將仿效官方套件的 Demo 方法，把文字區域分成左右邊，左邊是一般文字溢出區塊的情況，右邊則是套用 <a href="http://dotdotdot.frebsite.nl/" target="_blank">dotdotdot</a> 後的樣貌。</p>
<br>

<h2>純以「...」替代：</h2>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $("#dot").dotdotdot({
            watch: "window"
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>加入 <em>watch: "window"</em> 屬性是為了讓區域在 RWD 調整下能保持溢出省略。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="WqMZGp" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: dotdotdot-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/WqMZGp/">
    jq-plugin: dotdotdot-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2>以「...」替代並增加詳閱超連結：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $("#dot").dotdotdot({
            after: "a.more",
            watch: "window"
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="JQprqP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: dotdotdot-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JQprqP/">
    jq-plugin: dotdotdot-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2>加入展開 / 收合按鈕：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        var $dot = $("#dot");
        $dot.append("&lt;a class='toggle' href='#'&gt;&lt;span class='open'&gt;[ + ]&lt;/span&gt;&lt;span class='close'&gt;[ - ]&lt;/span&gt;&lt;/a&gt;");
        function createDots(){
            $dot.dotdotdot({
                after: "a.toggle",
                watch: "window"
            });
        }
        function destroyDots() {
            $dot.trigger("destroy");
        }
        createDots();
        $dot.on(
            "click",
            "a.toggle",
            function() {
                $dot.toggleClass("opened");
                if ($dot.hasClass("opened")) {
                    destroyDots();
                } else {
                    createDots();
                }
                return false;
            }
        );
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="MMQOmR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: dotdotdot-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MMQOmR/">
    jq-plugin: dotdotdot-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>

<h2>縮短檔案路徑：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $("#dot p").each(function() {
            var path = $(this).html().split( "/" );
            if ( path.length > 1 ) {
                var name = path.pop();
                $(this).html( path.join( "/" ) + "&lt;span class='filename'&gt;/" + name + "&lt;/span&gt;" );
                $(this).dotdotdot({
                    after: ".filename",
                    wrap: "letter",
                    watch: "window"
                });
            }
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="MMQOGN" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: dotdotdot-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MMQOGN/">
    jq-plugin: dotdotdot-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
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