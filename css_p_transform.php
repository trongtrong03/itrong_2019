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
                        <time>2019-08-16</time>
                        <h1>transform</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>transform</em> 是 CSS3 新增的屬性，掌握網頁元素的「變形」效果，舉凡旋轉、縮放、歪斜、3D 迴旋等，通通可以透過此屬性實現，大大突破過往侷限在矩形方塊的框架。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    transform: transform-functions;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    transform: rotate(180deg);    /* 旋轉 180 度 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>如果元素要同時套用多個 <em>transform</em> 效果，則每一個 <em>transform-functions</em> 用空白格區隔之，例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">div {
    transform: rotate(-45deg) scale(.6);    /* 旋轉 -45 度 並 縮放 0.6 倍 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>transform</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Type</span>
        <span class="t-flex4">Value</span>
        <span class="t-flex4">Description</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">none</span>
        <span class="t-flex4">無【預設值】</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">矩陣</span>
        <span class="t-flex4">matrix(n,n,n,n,n,n)</span>
        <span class="t-flex4">利用 6 個值的設定進行 2D 矩陣變化</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/MWgemYv" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">matrix3d(n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n)</span>
        <span class="t-flex4">利用 16 個值的設定進行 3D 矩陣變化</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">轉換</span>
        <span class="t-flex4">translate(x,y)</span>
        <span class="t-flex4">2D 轉換</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/oNvLWvQ" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">translate3d(x,y,z)</span>
        <span class="t-flex4">3D 轉換</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/pozbPJP" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">translateX(x)</span>
        <span class="t-flex4">水平轉換</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/eYOzWpe" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">translateY(y)</span>
        <span class="t-flex4">垂直轉換</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/aboZWvK" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">translateZ(z)</span>
        <span class="t-flex4">3D 的 Z 軸轉換</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">縮放</span>
        <span class="t-flex4">scale(x,y)</span>
        <span class="t-flex4">2D 縮放</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/yLBJbeX" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">scale3d(x,y,z)</span>
        <span class="t-flex4">3D 縮放</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">scaleX(x)</span>
        <span class="t-flex4">水平縮放</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/aboZWdj" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">scaleY(y)</span>
        <span class="t-flex4">垂直縮放</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/oNvLWbm" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">scaleZ(z)</span>
        <span class="t-flex4">3D 的 Z 軸縮放</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">旋轉</span>
        <span class="t-flex4">rotate(angle)</span>
        <span class="t-flex4">根據設定的角度，以參考點為中心軸進行 2D 旋轉</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/bGbeWpe" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">rotate3d(x,y,z,angle)</span>
        <span class="t-flex4">根據設定的角度，以參考點為中心軸進行 3D 旋轉</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/yLBJbVz" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">rotateX(angle)</span>
        <span class="t-flex4">沿著 X 軸進行 3D 旋轉所設定的角度</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/yLBJbJo" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">rotateY(angle)</span>
        <span class="t-flex4">沿著 Y 軸進行 3D 旋轉所設定的角度</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/aboZWZj" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">rotateZ(angle)</span>
        <span class="t-flex4">沿著 Z 軸進行 3D 旋轉所設定的角度</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">傾斜</span>
        <span class="t-flex4">skew(x-angle,y-angle)</span>
        <span class="t-flex4">以參考點為中心，沿著 X 軸方向傾斜 x 度，沿著 Y 軸方向傾斜 y 度</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/bGbeWwe" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">skewX(angle)</span>
        <span class="t-flex4">以參考點為中心，沿著X 軸方向傾斜 x 度</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/MWgemjO" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">skewY(angle)</span>
        <span class="t-flex4">以參考點為中心，沿著 Y 軸方向傾斜 y 度</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/ExYymgp" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">perspective(n)</span>
        <span class="t-flex4">為 3D 轉換元素定義透視圖</span>
        <span class="t-flex1"><a href="https://codepen.io/itrong/pen/pozbPJP" target="_blank">範例</a></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">inherit</span>
        <span class="t-flex4">繼承父元素的設定值</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">initial</span>
        <span class="t-flex4">使用 CSS 官方制定的初始值</span>
        <span class="t-flex1"></span>
    </div>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="LbjmBK" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-transform">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/LbjmBK/">
    CSS-transform</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area04" class="code-text"><code class="js">object.style.transform="rotate(180deg)"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
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
            <span class="t-flex1 is-none"><i class="fab fa-internet-explorer"></i></span>
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