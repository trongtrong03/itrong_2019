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
                        <time>2019-06-30</time>
                        <h1>兩張影像的拖曳比較</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;div id="app"&gt;
    &lt;div class="comparison-wrap" ref="comparisonWrap"&gt;
        &lt;div class="comparison-bg" @mousemove="dragScraper($event.clientX)" @touchmove="dragScraper($event.touches[0].clientX)"&gt;
            &lt;img class="comparison-back" src="img01"&gt;
            &lt;div class="comparison-front" ref="comparisonFront"&gt;
                &lt;img src="img02" ref="comparisonAfter"&gt;
            &lt;/div&gt;
            &lt;div class="comparison-ctrl" ref="comparisonCtrl"&gt;
                &lt;i class="fas fa-arrows-alt-h"&gt;&lt;/i&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">new Vue({
    el: '#app',
    data () {
        return {
            innerWidth: window.innerWidth
        }
    },
    created () {
        window.addEventListener('resize', this.setInnerWidth)
    },
    beforeDestroy () {
        window.removeEventListener('resize', this.setInnerWidth)
    },
    computed: {
        minX () {
            return (this.innerWidth - this.$refs.comparisonWrap.clientWidth) / 2
        },
        maxX () {
            return this.$refs.comparisonWrap.clientWidth + this.minX
        }
    },
    methods: {
        setInnerWidth () {
            this.innerWidth = window.innerWidth
        },
        dragScraper (clientX) {
            let px
            let pxRevert

            if (clientX < this.minX) {
                px = 0
            } else if (clientX > this.maxX) {
                px = this.$refs.comparisonWrap.clientWidth
            } else {
                px = clientX - this.minX
            }
            pxRevert = this.$refs.comparisonWrap.clientWidth - px + 'px'
            px = px + 5 + 'px'

            this.$refs.comparisonFront.style.transform = 'translate(-' + pxRevert + ', 0)'
            this.$refs.comparisonCtrl.style.transform = 'translate(' + px + ', 0)'
            this.$refs.comparisonAfter.style.transform = 'translate(' + pxRevert + ', 0)'
        }
    }
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="JQverQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="vue-ex: image-comparison">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JQverQ/">
    vue-ex: image-comparison</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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