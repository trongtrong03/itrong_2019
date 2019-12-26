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
                        <time>2019-07-03</time>
                        <h1>日曆選擇工具（Calendar Picker）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://flatpickr.js.org/" target="_blank">flatpickr</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;!-- js --&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/flatpickr"&gt;&lt;/script&gt;

&lt;!-- css --&gt;
&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;input type="text" class="datepicker" placeholder="請選擇日期時間"/&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        var doSomething = function() {
            console.log(fp[0].currentYear);
        }
        var options = {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            altInput: true,
            altFormat: "F j, Y H:i",
            minuteIncrement: 0,
            //maxDate: "today",
            //minDate: new Date(2018, 0, 1),
            //plugins: [new rangePlugin({ input: #input2"})]
            onChange: doSomething
        };

        const fp = $(".datepicker").flatpickr(options);
        var date = new Date();
        fp[0].setDate(date);
        console.log(fp[0].currentYear);
    })
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p><em>maxDate</em> 指的是日曆範圍的可選最大日期。<br>
<em>minDate</em> 指的是日曆範圍的可選最小日期。<br>
<em>minuteIncrement</em> 指的是分鐘的增加幅度，0 為無法選擇分鐘。</p>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="gNKpWy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: flatpickr">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/gNKpWy/">
    jq-plugin: flatpickr</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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