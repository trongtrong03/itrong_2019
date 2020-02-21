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
                        <time>2017-07-24</time>
                        <h1>判定兩個輸入框的值是否一致</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>本效果可模擬密碼的二次驗證機制，主要是透過 <em>.val()</em> 取得使用者於輸入框輸入的 value 值，然後進行比對並顯示結果文字。</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    function passwordCheck() {
        var pw1 = $("#password1").val();
        var pw2 = $("#password2").val();

        if (pw1 != pw2){
            $("#result").html("密碼錯誤");
        }
        else {
            $("#result").html("密碼正確");
        }
    }

    $(function() {
       $("#password2").keyup(passwordCheck);
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>HTML 的部分，用來比對輸入內容的輸入框則需要添加 <em>onChange</em> 事件，來呼叫執行輸入值比對的函式。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;input type="text" id="password1" placeholder="請輸入密碼"&gt;
&lt;input type="text" id="password2" onChange="passwordCheck();" placeholder="請再次輸入密碼"&gt;
&lt;div id="result"&gt;&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="default" data-default-tab="result" data-user="itrong" data-slug-hash="oeNxdd" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec-txtConfirm">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/oeNxdd">
      jq-tec-txtConfirm</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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