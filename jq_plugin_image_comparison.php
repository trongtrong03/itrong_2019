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
                        <time>2018-01-10</time>
                        <h1>兩張影像的拖曳比較（Image Comparison）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;div class="slider-wrap"&gt;
    &lt;img src="影像1"&gt;  
    &lt;div class="resize"&gt;
        &lt;img src="影像2"&gt;
    &lt;/div&gt;
    &lt;span class="handle"&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    $(document).ready(function(){
        $('.slider-wrap').each(function(){
            var cur = $(this);
            var width = cur.width()+'px';
            cur.find('.resize img').css('width', width);
            drags(cur.find('.handle'), cur.find('.resize'), cur);
        });
    });

    $(window).resize(function(){
        $('.slider-wrap').each(function(){
            var cur = $(this);
            var width = cur.width()+'px';
            cur.find('.resize img').css('width', width);
        });
    });

    function drags(dragElement, resizeElement, container) {
        dragElement.on('mousedown touchstart', function(e) {

            dragElement.addClass('draggable');
            resizeElement.addClass('resizable');

            var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

            var dragWidth = dragElement.outerWidth(),
            posX = dragElement.offset().left + dragWidth - startX,
            containerOffset = container.offset().left,
            containerWidth = container.outerWidth();

            minLeft = containerOffset + 10;
            maxLeft = containerOffset + containerWidth - dragWidt

            dragElement.parents().on("mousemove touchmove", function(e) {
                var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

                leftValue = moveX + posX - dragWidth;

                if ( leftValue < minLeft) {
                    leftValue = minLeft;
                } else if (leftValue > maxLeft) {
                    leftValue = maxLeft;
                }

                widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
                $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
                    $(this).removeClass('draggable');
                    resizeElement.removeClass('resizable');
                });
                $('.resizable').css('width', widthValue);
            }).on('mouseup touchend touchcancel', function(){
                dragElement.removeClass('draggable');
                resizeElement.removeClass('resizable');
            });
            e.preventDefault();
        }).on('mouseup touchend touchcancel', function(e){
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
        });
    }
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="PEQgPQ" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="jq-plugin: image-comparison-slider" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/PEQgPQ/">jq-plugin: image-comparison-slider</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
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