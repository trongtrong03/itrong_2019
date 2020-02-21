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
                        <time>2017-12-12</time>
                        <h1>[Vue warn]: Templates should only be responsible for mapping the state to the UI...</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>使用 Vue 撰寫 Code 的過程中，多少會因各種人為疏失造成程式噴錯，或無法正確渲染至 DOM 裡，打開 Console 確認各種錯誤訊息，若其中一種錯誤回報的敘述是這樣：</p>
<figure>
    <img src="images/pic/vue/vue-warn-1.jpg">
</figure>
<p style="color: red;">[Vue warn]: Templates should only be responsible for mapping the state to the UI. Avoid placing tags with side-effects in your templates, such as &lt;script&gt;.</p>
<p>通常導致此一錯誤的可能是 Html 的標籤嵌套（EX：<em>&lt;div&gt;&lt;/div&gt;</em>）沒有完整閉合的緣故，請檢查 Html 結構是否正確完整。</p>
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