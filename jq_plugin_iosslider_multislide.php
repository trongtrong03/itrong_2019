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
                        <time>2017-10-30</time>
                        <h1>多項目輪播（iosslider）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://iosscripts.com/iosslider/" target="_blank">iosSlider</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;!-- 加入 jquery.easing.1.3.js 使得 Slider 可以支援拖曳切換的動作。 --&gt;
&lt;script src="js/jquery.easing.1.3.js"&gt;&lt;/script&gt;
&lt;script src="js/jquery.iosslider.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="container"&gt;
    &lt;div class="iosSlider"&gt;
        &lt;ul class="slider"&gt;
            &lt;li class="item"&gt;
                &lt;img src="path"&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div class="ctrl"&gt;
        &lt;div class='prev unselectable'&gt;Prev&lt;/div&gt;   
        &lt;div class='next'&gt;Next&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(document).ready(function() {
        $('.iosSlider').iosSlider({
            snapToChildren: true,
            desktopClickDrag: true,
            keyboardControls: true,
            onSliderLoaded: sliderTest,
            onSlideStart: sliderTest,
            onSlideComplete: slideComplete,
            navNextSelector: $('.next'),
            navPrevSelector: $('.prev'),
        });
    });

    function sliderTest(args) {
        try {
            console.log(args);
        } catch(err) {
        }
    }

    function slideComplete(args) {
    $('.next, .prev').removeClass('unselectable');
        if(args.currentSlideNumber == 1) {
            $('.prev').addClass('unselectable');
        }
        else if(args.currentSliderOffset == args.data.sliderMax) {
            $('.next').addClass('unselectable');
        }
    }
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="VrYedo" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-Plugin: iosSlider-multislide" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/VrYedo/">JQ-Plugin: iosSlider-multislide</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
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