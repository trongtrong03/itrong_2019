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
                        <time>2020-02-06</time>
                        <h1>［HTML5］元素分類與內容模型（Content Model）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>CSS 規範規定 HTML 所有元素都有默認的 <em>display</em> 屬性，早期 HTML 標準將元素歸納為兩大類：區塊元素（Block）與行內元素（Inline），分別與 CSS <em>display</em> 屬性中的 <em>display</em> 值和 <em>inline</em> 值相對應。</p>
<p>我們可透過表格來理解兩者的不同之處：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">區塊元素（Block）</span>
        <span class="t-flex1">行內元素（Inline）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">與前後元素標籤隔行。</span>
        <span class="t-flex1">與相鄰的行內元素會並排在一起。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">可設定寬、高。</span>
        <span class="t-flex1">寬、高設定無效。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">可以包含行內元素或部份區塊元素。</span>
        <span class="t-flex1">只能包含其他行內元素，不能包含區塊元素。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>&lt;div&gt;</em>、<em>&lt;h1&gt;</em>～<em>&lt;h6&gt;</em>、<em>&lt;p&gt;</em>、<em>&lt;ul&gt;</em>、<em>&lt;table&gt;</em>、<em>&lt;form&gt;</em>...</span>
        <span class="t-flex1"><em>&lt;span&gt;</em>、<em>&lt;em&gt;</em>、<em>&lt;strong&gt;</em>、<em>&lt;b&gt;</em>、<em>&lt;i&gt;</em>、<em>&lt;a&gt;</em>、<em>&lt;img&gt;</em>、<em>&lt;input&gt;</em>、<em>&lt;textarea&gt;</em>、<em>&lt;select&gt;</em>...</span>
    </div>
</div>
<figure class="mb-0">
    <img src="images/pic/html/contentmodel_1.jpg">
    <figcaption>區塊元素與行內元素的排版示意圖。</figcaption>
</figure>
<br>
<p>隨著網路世代的崛起，設計師對於網頁排版的需求也越來越講究變化與彈性，CSS 甚至出現「<em>inline-block</em>」這種同時兼具兩者特性的屬性，顯然過去標準的二分法已不再適用。在 HTML5 規範標準裡，便將新舊所有元素重新分類，重新定義它們的內容模型（Content Models）。</p>
<p>內容模型（Content Models）將元素劃分七種類型：Flow content、Sectioning content、Heading content、Phrasing content、Embedded content、Interactive content、Metadata content。在詳細介紹它們之前，我們先看下方這張內容模型示意圖：</p>
<figure class="mb-0">
    <img src="images/pic/html/contentmodel_2.jpg">
    <figcaption>內容模型（Content Models）示意圖。</figcaption>
</figure>
<p>由此可知，Flow content 幾乎涵蓋所有其他內容模型的元素，而部分內容模型之間也會有重疊的部份，亦即是說單一 HTML 元素滿足特定情境條件下，就會歸類於不同的內容模型。</p>
<br>
<h2>Flow content：</h2>

<br>
<h2>Sectioning content：</h2>
<br>
<h2>Heading content：</h2>
<br>
<h2>Phrasing content：</h2>
<br>
<h2>Embedded content：</h2>
<br>
<h2>Interactive content：</h2>
<br>
<h2>Metadata content：</h2>
<br>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.itread01.com/p/1028604.html" target="_blank">W3C HTML5標準閱讀筆記4 – 元素分類與內容模型(Content Model)Script</a></li>
    <li><a href="http://caibaojian.com/567.html" target="_blank">HTML5的嵌套与HTML4的嵌套标准对比</a></li>
    <li><a href="https://www.w3.org/TR/2011/WD-html5-20110525/semantics.html#semantics" target="_blank">W3C HTML5</a></li>
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