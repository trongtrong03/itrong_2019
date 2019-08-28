<!doctype html>
<html class="pages res view">
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
                        <time>2017-04-10</time>
                        <h1>什麼是 GPU？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>CPU 指的是「中央處理器」，GPU 則是「圖形處理器」。</p>
<p>GPU（graphic processing unit）主要執行繪圖運算的工作，簡單來說，在電腦上負責畫畫的就是 GPU 。</p>
<p>相較 CPU 只有數顆核心，GPU 則擁有數千個以上，且效能更高、體積更小的核心，有效處理平行運算。</p>
<figure>
    <img src="images/pic/knowledge/cpu-and-gpu.jpg">
    <figcaption>CPU 與 GPU 的核心數目比較圖</figcaption>
</figure>
<p>GPU 是顯示卡的心臟，決定該張顯示卡的性能，同時也是 2D 顯示卡和 3D 顯示卡的區別依據。</p>
<h2>WebGL 流程：</h2>
<p class="step mb-0">
    <span>Step01. 將資料透過 shader 轉換之後送入 GPU。</span>
</p>
<p class="step">
    <span>Step02. GPU 開始依照傳入的資料做繪圖，並且根據 camera 的位置對影像做座標轉換。</span>
</p>
<p>※ shader 可視為一個程式，對影像或多邊形做運算，透過不同的演算法來模擬各種特效。</p>
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