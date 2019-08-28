<!doctype html>
<html class="pages css view">
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
                        <time>2017-06-17</time>
                        <h1>CSS 自動前綴工具（Autoprefixer）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">gem install sass
gem install compass</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>


<p>注意！需先安裝 Node.JS！</p>
<p><a href="https://github.com/postcss/autoprefixer" target="_blank">Autoprefixer</a> 是一套透過 Compass 來 watch 專案時，自動幫 CSS 加上前輟詞的工具，可用於取代使用 <em>@import "compass/css3"</em> 方式引入 CSS3 前綴的方法。</p>
<p>Autoprefixer 乃依據 <a href="http://caniuse.com/" target="_blank">Can I use</a> 提供的資訊來決定要加上那些瀏覽器前綴，同時也提供很多不同開發平台的導入方法，供各類型的開發者方便使用。</p>
<p>本篇的使用方式是透過 Compass 來編譯。</p>
<br>
<p class="step">
    <span>Step01. 開啟命令提示字元，輸入安裝指令。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="bash">gem install autoprefixer-rails</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>（須注意，安裝於本機的 Ruby 語言版本不能過舊，否則可能無法順利安裝。）</p>
<br>

<p class="step">
    <span>Step02. 於編譯所需的 <em>config.rb</em> 文件添加設定訊息。</span>
</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="bash">Encoding.default_external = "UTF-8"
require 'autoprefixer-rails'
on_stylesheet_saved do |file|
    css = File.read(file)
    map = file + '.map'
    if File.exists? map
        result = AutoprefixerRails.process(css,
            from: file,
            to:   file,
            map:  { prev: File.read(map), inline: false })
        File.open(file, 'w') { |io| io << result.css }
        File.open(map,  'w') { |io| io << result.map }
    else
        File.open(file, 'w') { |io| io << AutoprefixerRails.process(css) }
    end
end</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>之後重新 <em>compass watch</em> 專案，Autoprefixer 就會自行運作囉！</p>
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