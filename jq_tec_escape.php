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
                        <time>2019-07-22</time>
                        <h1>程式碼跳脫字元（escape character）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>電腦程式語言中的跳脫字元英文名叫做「Escape Characters」，指的是這些字元放在程式碼，被編譯輸出時可以對後續、包覆內的其他字元採取替代解釋，例如 HTML 的元素標籤首尾特殊符號 <em>&lt;</em> 及 <em>&gt;</em>。本篇展示的效果即是將 <em>&lt;pre&gt;</em> 區域內的程式碼提取出來，用相對應的編碼符號取代跳脫字元，可方便複製程式碼。</p>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script&gt;
    $(document).ready(function() {
        $("button").click(function(){
            $( ".div-2 pre").html($(".div-1 pre").html().escape());
        });
    });

    String.prototype.escape = function() {
        var tagsToReplace = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;'
        };
        return this.replace(/[&<>]/g, function(tag) {
            return tagsToReplace[tag] || tag;
        });
    };
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="default" data-default-tab="result" data-user="itrong" data-slug-hash="NVjmab" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-tec: escape">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/NVjmab">
    jq-tec: escape</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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