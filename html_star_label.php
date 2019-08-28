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
                        <time>2017-10-12</time>
                        <h1>用 HTML 與 CSS 實現評分效果</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;div class="star-wrap"&gt;                     
    &lt;input type="radio" id="starScore1" class="score score_1" value="1" name="score"&gt;
    &lt;a href="#starScore1" class="star star_1" title="1分"&gt;&lt;label for="starScore1"&gt;1分&lt;/label&gt;&lt;/a&gt;
    &lt;input type="radio" id="starScore2" class="score score_2" value="2" name="score"&gt;
    &lt;a href="#starScore2" class="star star_2" title="2分"&gt;&lt;label for="starScore2"&gt;2分&lt;/label&gt;&lt;/a&gt;
    &lt;input type="radio" id="starScore3" class="score score_3" value="3" name="score"&gt;
    &lt;a href="#starScore3" class="star star_3" title="3分"&gt;&lt;label for="starScore3"&gt;3分&lt;/label&gt;&lt;/a&gt;
    &lt;input type="radio" id="starScore4" class="score score_4" value="4" name="score"&gt;
    &lt;a href="#starScore4" class="star star_4" title="4分"&gt;&lt;label for="starScore4"&gt;4分&lt;/label&gt;&lt;/a&gt;
    &lt;input type="radio" id="starScore5" class="score score_5" value="5" name="score"&gt;
    &lt;a href="#5" class="star star_5" title="5分"&gt;&lt;label for="starScore5"&gt;5分&lt;/label&gt;&lt;/a&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">.star-wrap {
    position: relative;
    width: 100px;
    height: 20px;
    background: #ccc;
    overflow: hidden;
}

.star {
    position: absolute;
    z-index: 3;
    width: 20px;
    height: 100%;
    text-indent: -9999px;
    overflow: hidden;
}

.star:hover {
    left: 0;
    z-index: 2;
    background: #F90 !important;
}

.star_1 { left: 0; }
.star_2 { left: 20px; }
.star_3 { left: 40px; }
.star_4 { left: 60px; }
.star_5 { left: 80px; }
.star_1:hover { width: 20px; }
.star_2:hover { width: 40px; }
.star_3:hover { width: 60px; }
.star_4:hover { width: 80px; }
.star_5:hover { width: 100px; }

label { 
    display: block;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

/* 單選按鈕 */
.score {
    position: absolute; 
    clip: rect(0 0 0 0);
}

.score:checked + .star {
    left: 0;
    z-index: 1;
    background: #F90;
}
.score_1:checked ~ .star_1 { width: 20px; }
.score_2:checked ~ .star_2 { width: 40px; }
.score_3:checked ~ .star_3 { width: 60px; }
.score_4:checked ~ .star_4 { width: 80px; }
.score_5:checked ~ .star_5 { width: 100px; }

.star_bg:hover .star {  background-image: none; }

/* for IE6-IE8 JS 交互 */
.star_checked {
    left: 0;
    z-index: 1;
    background: #F90;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="mBGJbX" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="htmltool-評分效果" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/mBGJbX/">htmltool-評分效果</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="http://www.zhangxinxu.com/wordpress/2013/08/%E7%BA%AFcss%E6%98%9F%E6%98%9F%E8%AF%84%E5%88%86%E4%BA%A4%E4%BA%92-%E5%85%84%E5%BC%9F%E9%80%89%E6%8B%A9%E5%99%A8/" target="_blank">折腾：2颗星星+纯CSS实现星星评分交互效果</a></li>
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