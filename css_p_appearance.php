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
                        <time>2019-08-06</time>
                        <h1>appearance</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>appearance</em> 屬性可用來設置任何元素的瀏覽器默認風格，舉凡 <em>&lt;input&gt;</em> 輸入框、 <em>&lt;select&gt;</em>
    下拉式選單、 <em>&lt;button&gt;</em> 按鈕...等效果，都可以透過 <em>appearance</em> 來渲染。</p>
<p>然而必須注意的是，目前尚未有瀏覽器支援 <em>appearance</em> 屬性，僅有替代屬性 <em>-webkit-appearance</em>（Chrome、Safari）與
    <em>-moz-appearance</em>（Firefox）支援此屬性。</p>
<h3 class="rule"></h3>
<div class="code-area">
    <pre id="area01" class="code-text"><code class="css">selector {
    appearance: value;           /* 目前瀏覽器尚不支援 */
    -moz-appearance: value;      /* Firefox */
    -webkit-appearance: value;   /* Safari 和 Chrome */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
    <pre id="area02" class="code-text"><code class="css">div {
    appearance: button;
    -moz-appearance: button;
    -webkit-appearance: button;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>appearance</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex2">Value</span>
        <span class="t-flex2">Description</span>
        <span class="t-flex1">Notes</span>
    </div>
    <div class="t-row">
        <span class="t-flex2">normal</span>
        <span class="t-flex2">常規【預設值】</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">checkbox</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">checkbox-container</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">checkbox-small</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">button</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">button-bevel</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">push-button</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">square-button</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">field</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">icon</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">listbox</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">listitem</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menu</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menulist</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menulist-button</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menulist-text</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menulist-textfield</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menuitem</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">menupopup</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbar</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbarbutton-up</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbarbutton-down</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbarbutton-left</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbarbutton-right</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbartrack-horizontal</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbartrack-vertical</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbarthumb-horizontal</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbarthumb-vertical</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbargripper-horizontal</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">scrollbargripper-vertical</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">slider-horizontal</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">slider-vertical</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">sliderthumb-horizontal</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">sliderthumb-vertical</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">separator</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">statusbar</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">caret</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">searchfield</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">searchfield-decoration</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">searchfield-results-decoration</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">searchfield-results-button</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">searchfield-cancel-button</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-chrome"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">radio</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">radio-container</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">radio-small</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">textfield</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">textfield-multiline</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">textarea</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">tab</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">tab-left-edge Obsolete</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">tabpanels</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">dialog</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">toolbar</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">toolbarbutton</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">toolbox</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">tooltip</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">treeheadercell</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">treeheadersortarrow</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">treeitem</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">treetwisty</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">treetwistyopen</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">treeview</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">progressbar</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">resizer</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">window</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">-moz-mac-unified-toolbar</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">-moz-win-borderless-glass</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">-moz-win-browsertabbar-toolbox</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">-moz-win-communications-toolbox</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">-moz-win-glass</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
    <div class="t-row">
        <span class="t-flex2">-moz-win-media-toolbox</span>
        <span class="t-flex2"></span>
        <span class="t-flex1"><i class="icon-firefox"></i></span>
    </div>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="JWPrBM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-appearance">
        <span>See the Pen <a href="https://codepen.io/itrong/pen/JWPrBM/">
        CSS-appearance</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area03" class="code-text"><code class="js">object.style.appearance="button"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

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
            <span class="t-flex1 is-none"><i class="fab fa-internet-explorer"></i></span>
            <span class="t-flex1 is-none"><i class="fab fa-edge"></i></span>
            <span class="t-flex1"><i class="fab fa-safari"></i></span>
            <span class="t-flex1"><i class="fab fa-opera"></i></span>
        </div>
        <div class="t-row">
            <span class="t-flex1">-webkit-</span>
            <span class="t-flex1">-moz-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1">-webkit-</span>
            <span class="t-flex1">-o- / -webkit-</span>
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