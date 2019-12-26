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
                        <time>2019-06-29</time>
                        <h1>分頁效果（Pagination）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;div class="page-wrap"&gt;
    &lt;div class="page-content"&gt;
        &lt;p&gt;title01&lt;/p&gt;
        &lt;p&gt;title02&lt;/p&gt;
        &lt;p&gt;title03&lt;/p&gt;
        &lt;p&gt;title04&lt;/p&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;p&gt;titleN&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="page-nav"&gt;&lt;/div&gt;
    &lt;div&gt;
        &lt;input type="hidden" id="allPage" /&gt;
        &lt;input type="hidden" id="showPage" /&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p><em>.page-content</em> 中的項目元素可以依照個人需求替換成其他元素，不僅如此，平行元素間也可以插入不同的元素，例如：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;div class="page-content"&gt;
        &lt;p&gt;title01&lt;/p&gt;
        &lt;div&gt;title02&lt;/div&gt;
        &lt;p&gt;title03&lt;/p&gt;
        &lt;div&gt;title04&lt;/div&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;p&gt;titleN&lt;/p&gt;
    &lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>下方兩個 <em>input</em> 則是供作程式腳本判斷用途，它們雖不會顯示於頁面上，但也不能刪除。</p>
<br>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        var show_per_page = 5; 
        var number_of_items = $(".page-content").children().length;
        var number_of_pages = Math.ceil(number_of_items/show_per_page);
        $("#allPage").val(0);
        $("#showPage").val(show_per_page);
        var navigation_html = "&lt;a class='previous_link' href='javascript:previous();'&gt;Prev&lt;/a&gt;";
        var current_link = 0;
        while(number_of_pages &gt; current_link){
            navigation_html += "&lt;a class='page_link' href='javascript:go_to_page(" + current_link +")' longdesc='" + current_link +"'&gt;"+ (current_link + 1) +"&lt;/a&gt;";
            current_link++;
        }
        navigation_html += "&lt;a class='next_link' href='javascript:next();'&gt;Next&lt;/a&gt;";
        $(".page-nav").html(navigation_html);
        $(".page-nav .page_link:first").addClass("active");
        $(".page-content").children().css("display", "none");
        $(".page-content").children().slice(0, show_per_page).css("display", "block");
    });
    function previous(){
        new_page = parseInt($("#allPage").val()) - 1;
        if($(".active").prev(".page_link").length==true){
            go_to_page(new_page);
        }
    }
    function next(){
        new_page = parseInt($("#allPage").val()) + 1;
        if($(".active").next(".page_link").length==true){
            go_to_page(new_page);
        }
        
    }
    function go_to_page(page_num){
        var show_per_page = parseInt($("#showPage").val());
        start_from = page_num * show_per_page;
        end_on = start_from + show_per_page;
        $(".page-content").children().css("display", "none").slice(start_from, end_on).css("display", "block");
        $(".page_link[longdesc=" + page_num +"]").addClass("active").siblings(".active").removeClass("active");
        $("#allPage").val(page_num);
    }
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>可通過設置 <em>show_per_page</em> 屬性的數字，來決定一個分頁要顯示多少項目。</p>
<br>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="zVRLPx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: pageination">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/zVRLPx/">
    jq-plugin: pageination</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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