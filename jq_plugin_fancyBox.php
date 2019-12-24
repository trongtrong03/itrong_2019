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
                        <time>2017-08-23</time>
                        <h1>燈箱（FancyBox 2.1.7）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://fancyapps.com/fancybox/" target="_blank">fancyBox</a><br>
本篇使用的版本為 2.1.7，據悉官方已出到第三版（fancyBox3），有興趣的看倌可自行上官網閱讀相關文件。</p>
<br>

<h3>引用：</h3>
<p>開始導入 Fancybox 相關文件前，我們可以先下載 <a href="https://github.com/fancyapps/fancybox/archive/V2.1.7.zip">Download v2.1.7</a> 版本的壓縮包，並將其解壓放入自己的專案目錄中。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;!-- 兩者擇一即可，.pack.js 指的是已壓縮文件，適合專案發布時使用。 --&gt;
&lt;script src="js/jquery.fancybox.pack.js"&gt;&lt;/script&gt;
&lt;script src="js/jquery.fancybox.js"&gt;&lt;/script&gt;

&lt;!-- 支援滑鼠滾輪切換圖片的文件，可視需求添加，不使用也不影響 Lightbox 功能。 --&gt;
&lt;script src="js/jquery.mousewheel.pack.js"&gt;&lt;/script&gt;
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;link rel="stylesheet" href="css/jquery.fancybox.css"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $('.fancybox').fancybox();
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>以上基本所需的各項檔案皆引入後，就可以開始來使用 fancyBox 了。</p>
<br>

<!-- FANCYBOX -->
<link rel="stylesheet" href="js/modules/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="js/modules/fancybox/helpers/jquery.fancybox-thumbs.css">

<h2>基本款：</h2>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="html">&lt;div&gt;
    &lt;a class="fancybox" href="大圖影像" data-fancybox-group="gallery" title="標題"&gt;
        &lt;img src="小圖影像" /&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>其中，<em>data-fancybox-group="gallery"</em> 指的是將該影像視為群組，所有包含群組屬性的影像可以進行前後切換的控制。如果不想將影像歸類為群組一部分，則刪除該屬性即可。</p>
<br>

<h3 class="ex"></h3>
<p>未加入 <em>data-fancybox-group="gallery"</em>：</p>
<h3 class="ex"></h3>
<div>
    <a class="fancybox" href="images/example/example01.jpg" title="Title1" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example01s.jpg" width="200" />
    </a>
    <a class="fancybox" href="images/example/example02.jpg" title="Title2" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example02s.jpg" width="200" />
    </a>
    <a class="fancybox" href="images/example/example03.jpg" title="Title3" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example03s.jpg" width="200" />
    </a>
</div>
<br>
<p>加入 <em>data-fancybox-group="gallery"</em>：</p>
<h3 class="ex"></h3>
<div>
    <a class="fancybox" href="images/example/example01.jpg" data-fancybox-group="gallery" title="Title1" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example01s.jpg" width="200" />
    </a>
    <a class="fancybox" href="images/example/example02.jpg" data-fancybox-group="gallery" title="Title2" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example02s.jpg" width="200" />
    </a>
    <a class="fancybox" href="images/example/example03.jpg" data-fancybox-group="gallery" title="Title3" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example03s.jpg" width="200" />
    </a>
</div>
<br>
<br>

<h2>不同效果：</h2>
<p>根據官方範例，這邊同樣引用四種示範效果：</p>
<h3 class="ex"></h3>
<div>
    <a class="fancybox-E1" href="images/example/example04.jpg" title="Title" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example04s.jpg" width="200" />
    </a>
    <a class="fancybox-E2" href="images/example/example04.jpg" title="Title" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example04s.jpg" width="200" />
    </a>
    <a class="fancybox-E3" href="images/example/example04.jpg" title="Title" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example04s.jpg" width="200" />
    </a>
    <a class="fancybox-E4" href="images/example/example04.jpg" title="Title" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example04s.jpg" width="200" />
    </a>
</div>
<h3>參數：</h3>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="html">&lt;script&gt;
    // 效果一
    $(".fancybox-E1").fancybox({
        helpers: {
            title : {
                type : 'outside'
            },
            overlay : {
                speedOut : 0
            }
        }
    });

    // 效果二
    $(".fancybox-E2").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
            title : {
                type : 'over'
            }
        }
    });

    // 效果三
    $(".fancybox-E3").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
            title : {
                type : 'inside'
            },
            overlay : {
                css : {
                    'background' : 'rgba(238,238,238,0.85)'
                }
            }
        }
    });

    // 效果四
    $(".fancybox-E4").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
            overlay : null
        }
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>不難看出各式效果都是基於參數做些簡單的調整修改，因此，只要了解各個屬性的意義，不需大幅度修改 CSS 樣式表，也能快速調整出理想的效果。</p>
<br>

<h2>縮圖：</h2>
<h3>引用：</h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;!-- CSS --&gt;
&lt;link rel="stylesheet" href="js/jquery.fancybox-thumbs.css"&gt;
&lt;!-- Javascript --&gt;
&lt;script src="js/jquery.fancybox-thumbs.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;div&gt;
    &lt;a class="fancybox-thumbs" href="大圖影像" data-fancybox-group="thumb" title="標題"&gt;
        &lt;img src="小圖影像" /&gt;
    &lt;/a&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;script&gt;
    $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : true,
        arrows    : true,
        nextClick : true,

        helpers : {
            thumbs : {
                width  : 50,
                height : 50
            }
        }
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div>
    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/example/example01.jpg" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example01s.jpg" alt="" />
    </a>
    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/example/example02.jpg" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example02s.jpg" alt="" />
    </a>
    <a class="fancybox-thumbs" data-fancybox-group="thumb" href="images/example/example03.jpg" style="display: inline-block; vertical-align: middle;">
        <img src="images/example/example03s.jpg" alt="" />
    </a>
</div>
<br><br>

<h2>其他形式：</h2>
<p>前面範例著重在 Lightbox 常用於的 Images Gallery，也就是相片畫廊身上，其實，同樣功能也可應用在文章區塊、影音媒體甚至是 Flash 領域，官方範例中提供 Inline、Ajax、Iframe、Swf 等使用方法，不過以下只刊載第一項（因為個人鮮少使用）。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="html">&lt;!-- 點擊項目 --&gt;
&lt;a class="fancybox" href="#inline1" title="標題"&gt;Inline&lt;/a&gt;

&lt;!-- 彈窗內容 --&gt;
&lt;div id="inline1" style="width: 400px; display: none;">
    &lt;!-- 內容區塊 --&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<h3 class="ex"></h3>
<a class="fancybox" href="#inline1" title="標題">Inline</a>
<div id="inline1" style="width:400px;display: none;">
    內容
</div>
<br><br>

<h2>補充：</h2>
<p>幾個常用參數彙整（以下數值皆是預設值）：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="html">&lt;script&gt;
    $(".fancybox").fancybox({
        // 影像父元素的內距
        padding: 0,

        // 自動調整尺寸
        autoSize   : true,
        autoHeight : false,
        autoWidth  : false,

        autoResize  : true,

        // 卷軸 'auto', 'yes', 'no'
        scrolling : 'auto',

        // 是否啟用左右箭頭
        arrows     : true,

        // 是否啟用關閉按鈕
        closeBtn   : true,
        
        // 是否啟用滑鼠滾輪切換
        mouseWheel : true,

        // 是否啟用自動播放
        autoPlay   : false,
        playSpeed  : 3000,

        // 是否啟用關閉所有控制項模式（可視為上面各個控制功能按鈕的總開關）
        modal      : false,

        // 是否啟用循環切換
        loop       : true,
        
        // 切換的漸變方向
        direction : {
            next : 'left',
            prev : 'right'
        },

        // 開啟的效果 'elastic', 'fade' or 'none'
        openEffect  : 'fade',
        openSpeed   : 250,
        openEasing  : 'swing',
        openOpacity : true,
        openMethod  : 'zoomIn',

        // 關閉的效果 'elastic', 'fade' or 'none'
        closeEffect  : 'fade',
        closeSpeed   : 250,
        closeEasing  : 'swing',
        closeOpacity : true,
        closeMethod  : 'zoomOut',

        // 切換至後一項的效果 'elastic', 'fade' or 'none'
        nextEffect : 'elastic',
        nextSpeed  : 250,
        nextEasing : 'swing',
        nextMethod : 'changeIn',

        // 切換至前一項的效果 'elastic', 'fade' or 'none'
        prevEffect : 'elastic',
        prevSpeed  : 250,
        prevEasing : 'swing',
        prevMethod : 'changeOut',

        // 小幫手初始狀態
        helpers : {
            overlay : true,
            title   : true
        }
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<!-- end -->
                </div>
            </section>
        </main>
        <!-- Footer -->
        <v-footer></v-footer>
    </article>
    <?php require_once 'include/_viewjs.php' ?>
    <script src="js/modules/fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/modules/fancybox/jquery.mousewheel.pack.js"></script>
    <script src="js/modules/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
    <script>
        //基本款
        $('.fancybox').fancybox();

        //效果*4
        $(".fancybox-E1").fancybox({
            helpers: {
                title : {
                    type : 'outside'
                },
                overlay : {
                    speedOut : 0
                }
            }
        });
        $(".fancybox-E2").fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            helpers : {
                title : {
                    type : 'over'
                }
            }
        });
        $(".fancybox-E3").fancybox({
            wrapCSS    : 'fancybox-custom',
            closeClick : true,

            openEffect : 'none',

            helpers : {
                title : {
                    type : 'inside'
                },
                overlay : {
                    css : {
                        'background' : 'rgba(238,238,238,0.85)'
                    }
                }
            }
        });
        $(".fancybox-E4").fancybox({
            padding: 0,

            openEffect : 'elastic',
            openSpeed  : 150,

            closeEffect : 'elastic',
            closeSpeed  : 150,

            closeClick : true,

            helpers : {
                overlay : null
            }
        });
        // 縮圖
        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : true,
            arrows    : true,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });
    </script>
</body>

</html>