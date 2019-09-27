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
                        <time>2019-05-29</time>
                        <h1>Learn02-- SVG V.S. Canvas</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在前一篇已大概介紹 SVG 是什麼樣的技術，除了 SVG 可以在瀏覽器直接繪製圖形外，另一款定位相似，同樣耳熟能詳的莫過於 Canvas 了，有關 Canvas 的相關知識與學習暫且保留到以後，本篇僅大略記錄兩者之間的異同。</p>
<br>
<h2>共同點：</h2>
<ol class="decimal">
    <li>對瀏覽器來說都是有效的圖形工具。</li>
    <li>容量一般而言都較點陣圖格式小。</li>
    <li>都遵守全球資訊網聯合會（W3C）標準。</li>
</ol>
<br>
<h2>差異比較：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1"></span>
        <span class="t-flex3">SVG</span>
        <span class="t-flex3">Canvas</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">歷史</span>
        <span class="t-flex3">西元 2001 年發佈</span>
        <span class="t-flex3">較新，由蘋果（Apple）內部發展推出</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">標籤</span>
        <span class="t-flex3"><em>&lt;svg&gt;</em></span>
        <span class="t-flex3"><em>&lt;canvas&gt;</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">HTML</span>
        <span class="t-flex3">通常 <em>&lt;svg&gt;</em> 裡會包含其他元素，例如 <em>&lt;Rect&gt;</em>、<em>&lt;Path&gt;</em>、<em>&lt;Line&gt;</em> ...等</span>
        <span class="t-flex3">只會存在 <em>&lt;canvas&gt;</em> 本身單一元素</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">操作對象</span>
        <span class="t-flex3">圖形元素</span>
        <span class="t-flex3">像素（動態點陣圖）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">生成方式</span>
        <span class="t-flex3">XML（支持 JS 與 CSS）</span>
        <span class="t-flex3">JavaScript</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">圖形</span>
        <span class="t-flex3">向量，不依賴畫素，縮放幾乎不失真</span>
        <span class="t-flex3">較依賴畫素，縮放易失真</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">事件交互</span>
        <span class="t-flex3">圖形元素（<em>&lt;Rect&gt;</em>、<em>&lt;Path&gt;</em>）</span>
        <span class="t-flex3">像素點（x, y）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">維護</span>
        <span class="t-flex3">易</span>
        <span class="t-flex3">難</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">運用</span>
        <span class="t-flex3">較適合向量繪圖</span>
        <span class="t-flex3">較適合像素處理</span>
    </div>
</div>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://zh.wikipedia.org/wiki/Canvas_(HTML%E5%85%83%E7%B4%A0)" target="_blank">Canvas (HTML元素)-維基百科</a></li>
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/API/Canvas_API/Tutorial" target="_blank">Canvas 教學文件</a></li>
    <li><a href="https://www.zhihu.com/question/19690014" target="_blank">SVG 与 HTML5 的 canvas 各有什么优点，哪个更有前途？</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10197083" target="_blank">27% canvas 和 svg</a></li>
    <li><a href="https://www.itread01.com/content/1547265964.html" target="_blank">svg和canvas各自的優缺點</a></li>
</ul>
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