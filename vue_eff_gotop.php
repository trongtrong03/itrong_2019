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
                        <time>2019-06-03</time>
                        <h1>點擊按鈕返回頂部</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;div id="app"&gt;
    &lt;button @click="goTop"&gt;TOP&lt;/button&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>使用 <em>button</em>、<em>a</em> 甚至是 <em>span</em> 標籤都可以，主要是要點擊觸發至頂的標籤必須寫入 <em>@click="goTop"</em> 指令。</p>
<br>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">new Vue({
    el: '#example',
    methods: {
        goTop () {
            let self = this
            self.timer = setInterval(function () {
                let osTop = document.documentElement.scrollTop || document.body.scrollTop
                let ispeed = Math.floor(-osTop / 5)
                document.documentElement.scrollTop = document.body.scrollTop = osTop + ispeed
                self.isTop = true
                if (osTop === 0) {
                    clearInterval(self.timer)
                }
            }, 30)
        }
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="NVoaOq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="vue-ex: gotop">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/NVoaOq/">
    vue-ex: gotop</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<p>如果要加入向下滑滾一定高度後才出現按鈕，則需要再加入一些函式：</p>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="javascript">new Vue({
    el: '#example',
    data: {
        isTop: true,
    },
    mounted () {
        this.needScroll()
    },
    methods: {
        needScroll () {
            // let clientHeight = document.documentElement.clientHeight
            let clientHeight = 200
            let obtn = this.$refs.btn
            window.onscroll = function () {
                let osTop = document.documentElement.scrollTop || document.body.scrollTop
                if (osTop >= clientHeight) {
                    obtn.style.display = 'block'
                } else {
                    obtn.style.display = 'none'
                }
                if (!this.isTop) {
                    clearInterval(this.timer)
                }
                this.isTop = false
            }
        },
        goTop () {
            let self = this
            self.timer = setInterval(function () {
                let osTop = document.documentElement.scrollTop || document.body.scrollTop
                let ispeed = Math.floor(-osTop / 5)
                document.documentElement.scrollTop = document.body.scrollTop = osTop + ispeed
                self.isTop = true
                if (osTop === 0) {
                    clearInterval(self.timer)
                }
            }, 30)
        }
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>同時，記得將按鈕 <em>display</em> 屬性設置為 <em>none</em>。</p>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">button {
    display: none;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="js,result" data-user="itrong" data-slug-hash="pmGdYV" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="vue-ex: gotop2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/pmGdYV/">
    vue-ex: gotop2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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