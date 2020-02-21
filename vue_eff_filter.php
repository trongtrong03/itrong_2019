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
                        <time>2019-05-27</time>
                        <h1>項目篩選功能</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html" v-pre>&lt;div id="example"&gt;
    &lt;div class="btn"&gt;
        &lt;button :class="{checked : letter == activeLetter }" @click="btnFilter(letter)" v-for="letter in buttons" v-text="letter"&gt;&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="item"&gt;
        &lt;div v-for="item in listFilter" style="background-color: #ccc;"&gt;{{ item.name }}&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="vue"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="javascript">function randomElement(collection){
    return collection[Math.floor(Math.random() * collection.length)]
}

new Vue({
    el : '#example',
    data : {
        items : [
            { 
                type: 'A', name: 'itemA' 
            },
            { 
                type: 'B', name: 'itemB' 
            },
            { 
                type: 'C', name: 'itemC' 
            },
            ...
        ],
        activeLetter : false,
        activeColor: false,
    },
    methods:{
        btnFilter(letter){
            let nextLetter;
            if(this.activeLetter == letter){
                nextLetter = false;
            } else {
                nextLetter = letter;
            }
            this.$nextTick(() => {
                this.activeLetter = nextLetter;
            });
        },
    },
    computed:{
        buttons(){
            return this.items.map(item => {
                return item.type
            }).filter((value, index, self) => {
                return self.indexOf(value) === index;
            });
        },
        listFilter(){
            let listFilter = this.items;
            if(this.activeLetter){
                listFilter = listFilter.filter(item => {
                    return item.type == this.activeLetter;
                })
            }
            if(this.activeColor){
                listFilter = listFilter.filter(item => {
                    return item.bg == this.activeColor;
                })
            }
            return listFilter;
        }
    },
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="YbvXBE" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Vue-ex: filter">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/YbvXBE/">
    Vue-ex: filter</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
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