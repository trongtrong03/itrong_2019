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
                        <time>2019-01-11</time>
                        <h1>列表搜尋功能</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;templete&gt;
    &lt;ul&gt;
        &lt;li v-for="item in filterSearch"&gt;
            &lt;h2&gt;{{ item.name }}&lt;/h2&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type="text" placeholder="請輸入關鍵字" v-model="query"&gt;
&lt;/templete&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">new Vue({
    el: '#app',
    data: {
        query: "",
        
        lists: [
            { name: 'A', },
            { name: 'B', },
            { name: 'C', },
        ],
    },
  
    computed: {
        filterSearch: function() {
            var search = this;
            return this.lists.filter(function(item) {
                return item.player.toLowerCase().indexOf(search.query.toLowerCase()) !== -1;
            });
        },
    },
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="default" data-default-tab="result" data-user="itrong" data-slug-hash="PXyQqR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="vue-ex: search">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/PXyQqR">
      vue-ex: search</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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