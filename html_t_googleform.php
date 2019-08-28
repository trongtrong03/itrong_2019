<!doctype html>
<html class="pages html view">
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
                        <time>2016-09-04</time>
                        <h1>使用 Google 表單建立簡易的聯絡信件</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>如果你和我一樣，想給自己的網站加入表單功能卻又有以下三種症狀：<br>
1. 對資料庫不熟悉。<br>
2. 不想用 <em>mailto</em> 開啟 Outlook 軟體來寄信。<br>
3. 對坊間提供的雲端資料庫感到不信任或不懂使用方法。</p>
<p>那麼，一起使用 Google Sheets 來建立屬於自己的聯絡表單吧，操作方式並不困難，以下將以步驟說明設定過程。</p>
<br>
<p class="step">
    <span>Step01. 複製 Google Sheets 文件。</span>
    <span>點擊「建立副本」按鈕，產生 HTML Form Reponses 文件。</span>
</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-1.jpg">
</figure>
<p>點擊後會產生一份文件，內容大致上是這樣：</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-2.jpg">
</figure>
<p>第一列是欄位名稱，可自行更改其他名稱，而這些名稱將與之後自己的 Html 輸入框的名稱（name）相對應。至於文件內第二列開始的資料屬範例資料，可以刪除。</p>
<br>
<p class="step">
    <span>Step02. 開啟指令碼編輯器功能。</span>
    <span>點擊「工具」→「指令碼編輯器」。</span>
</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-3.jpg">
</figure>
<p>點下去會開啟另一份 JS 文件，內容畫面為：</p>
<figure>
    <img src="images/pic/html/gform-4.jpg">
</figure>
<p class="step">
    <span>Step03. 設置 <em>TO_ADDRESS</em> 參數。</span>
    <span>在第八行找到被註解起來的 <em>TO_ADDRESS</em> 程式碼，取消其註解（Ctrl + /）模式，將 <em>example@email.net</em> 改為自己用來收信的 E-mail 帳號。</span>
</p>
<figure>
    <img src="images/pic/html/gform-5.jpg">
</figure>

<p class="step">
    <span>Step04. 儲存為新的版本。</span>
    <span>點擊「檔案」→「管理版本」。</span>
</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-6.jpg">
</figure>
<p>會跳出一個「管理版本」的浮窗...</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-7.jpg">
</figure>
<p>自行命名後按下「儲存新版本」的按鈕...</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-8.jpg">
</figure>
<p>底下會蹦出版本控管的歷史紀錄表格。</p>
<br>
<p class="step">
    <span>Step05. 將腳本發佈到網路應用程式。</span>
    <span>點擊「發佈」→「部署為網路應用程式...」。</span>
</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-9.jpg">
</figure>
<p>跳出彈窗...</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-10.jpg">
</figure>
<p>確定專案版本是最新的，其餘設定基本上保持預設即可，確認無誤後點擊確定。</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-11.jpg">
</figure>
<p>會出現要求授權的視窗，選擇「核對權限」。<br>
接著系統會要求確認你的使用者身分，選擇自己帳號，接著又跳出警告視窗：</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-12.jpg">
</figure>
<p>選擇「進階」→「前往『html contact form sendEmail』（不安全）」，之後選擇允許，然後系統會出現以下視窗訊息：</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-13.jpg">
</figure>
<p>將已部署為目前網路應用程式的網址記錄下來，可複製暫時貼到記事本上。</p>
<br>
<p class="step">
    <span>Step06. 建立 Html 表單。</span>
    <span>接下來就是在自己的網站建立聯絡表單的輸入項目了，或是直接用已經準備好的表單也可以，記得需使用 <em>&lt;form&gt;</em> 標籤來包覆表單的各個輸入框項目，將第五步驟尾聲產生的網址，貼上至 <em>action</em> 屬性內。</span>
</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;form class="gform" method="POST" action="https://script.google.com/macros/s/AKfycbztVYKwnI3hwvQhpaoNbd2S8ROole1wxedxCALq/exec"&gt;
	&lt;!-- 你的表單內容 --&gt;
&lt;/form&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>以下是簡易的完整表單範例：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;form class="gform" method="POST" action="https://script.google.com/macros/s/AKfycbztVYKwnI3hwvQhpaoNbd2S8ROole1wxedxCALq/exec"&gt;
    &lt;input name="name" type="text" id="name" placeholder="姓名"&gt;
    &lt;input name="email" type="text" id="email" placeholder="信箱"&gt;
    &lt;textarea name="message" id="message" placeholder="內容"&gt;&lt;/textarea&gt;
    &lt;div class="form-btn"&gt;
        &lt;button type="reset"&gt;清除&lt;/button&gt;
        &lt;button id="submitBtn" type="submit"&gt;送出&lt;/button&gt;
    &lt;/div&gt;
&lt;/form</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>前面也有提過，各輸入框的 <em>name</em> 屬性名稱需與資料庫裡的欄位名稱相對應，這樣輸出的資料才會準確地傳送至正確的欄位裡。</p>
<br>
<p class="step">
    <span>Step07. 傳送測試。</span>
    <span>截至第六步為止，聯絡表單雛形已經建立起來，接下來就是要測試輸入的表單內容是否有成功寄到設定的信箱。</span>
</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-14.jpg">
</figure>
<p>填妥表單內容之後點擊送出按鈕，如果有傳送成功，則頁面會跳轉至結果畫面。</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-15.jpg">
</figure>
<p>看到 <em>"result":"success"</em> 基本上就可以確定網站表單與 Google 資料庫有成功互相連結了，之後到自己設定的信箱確認信件...</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-16.jpg">
</figure>
<p>成功收到！同時也可以去第二步驟建立的「HTML Form Reponses - 副本」看一下資料有沒有記錄在裡面...</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-17.jpg">
</figure>
<p>答案是有的，前前後後時間花費不到十分鐘就能搞定在自己網站加入簡易的聯絡表單了。</p>
<br>
<br>
<p>可能很多人會不希望表單送出後離開自己的網頁，導向至純 JSON 數據的結果，那麼可以透過結合 AJAX 來改善它，來看看如何設定：</p>
<p class="step">
    <span>Step01. 複製 AJAX 語法文件。</span>
    <span>複製以下程式碼並命名為「form-submission-handler.js」，要改成別的也不反對，自己看得順眼就好。</span>
</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="javascript">(function() {

function validateHuman(honeypot) {
  if (honeypot) {  //if hidden form filled up
    console.log("Robot Detected!");
    return true;
  } else {
    console.log("Welcome Human!");
  }
}

// get all data in form and return object
function getFormData(form) {
  var elements = form.elements;
  var honeypot;

  var fields = Object.keys(elements).filter(function(k) {
    if (elements[k].name === "honeypot") {
      honeypot = elements[k].value;
      return false;
    }
    return true;
  }).map(function(k) {
    if(elements[k].name !== undefined) {
      return elements[k].name;
    // special case for Edge's html collection
    }else if(elements[k].length > 0){
      return elements[k].item(0).name;
    }
  }).filter(function(item, pos, self) {
    return self.indexOf(item) == pos && item;
  });

  var formData = {};
  fields.forEach(function(name){
    var element = elements[name];
    
    // singular form elements just have one value
    formData[name] = element.value;

    // when our element has multiple items, get their values
    if (element.length) {
      var data = [];
      for (var i = 0; i < element.length; i++) {
        var item = element.item(i);
        if (item.checked || item.selected) {
          data.push(item.value);
        }
      }
      formData[name] = data.join(', ');
    }
  });

  // add form-specific values into the data
  formData.formDataNameOrder = JSON.stringify(fields);
  formData.formGoogleSheetName = form.dataset.sheet || "responses"; // default sheet name
  formData.formGoogleSend
    = form.dataset.email || ""; // no email by default

  console.log(formData);
  return {data: formData, honeypot};
}

function handleFormSubmit(event) {  // handles form submit without any jquery
  event.preventDefault();           // we are submitting via xhr below
  var form = event.target;
  var formData = getFormData(form);
  var data = formData.data;

  // If a honeypot field is filled, assume it was done so by a spam bot.
  if (formData.honeypot) {
    return false;
  }

  disableAllButtons(form);
  var url = form.action;
  var xhr = new XMLHttpRequest();
  xhr.open('POST', url);
  // xhr.withCredentials = true;
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
      console.log(xhr.status, xhr.statusText);
      console.log(xhr.responseText);
      form.reset();
      var formElements = form.querySelector(".form-elements")
      if (formElements) {
        formElements.style.display = "none"; // hide form
      }
      var thankYouMessage = form.querySelector(".form-resault");
      if (thankYouMessage) {
        thankYouMessage.style.display = "block";
      }
      return;
  };
  // url encode form data for sending as post data
  var encoded = Object.keys(data).map(function(k) {
      return encodeURIComponent(k) + "=" + encodeURIComponent(data[k]);
  }).join('&');
  xhr.send(encoded);
}

function loaded() {
  console.log("Contact form submission handler loaded successfully.");
  // bind to the submit event of our form
  var forms = document.querySelectorAll("form.gform");
  for (var i = 0; i < forms.length; i++) {
    forms[i].addEventListener("submit", handleFormSubmit, false);
  }
};
document.addEventListener("DOMContentLoaded", loaded, false);

function disableAllButtons(form) {
  var buttons = form.querySelectorAll("button");
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].disabled = true;
  }
}
})();</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>來源：<a href="https://github.com/dwyl/learn-to-send-email-via-google-script-html-no-server/blob/master/form-submission-handler.js" target="_blank">the following Javascript file</a></p>
<p>並且引用至自己的網頁裡，例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;script src="js/form-submission-handler.js" data-cfasync="false"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step02. 在 Html 表單內增加送出後的結果訊息。</span>
    <span>完成 AJAX 文件引入後，接著就是在自己的 HTML 程式碼裡增加表單送出後的結果訊息，例如：</span>
</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="html">&lt;div class="form-resault" style="display: none;"&gt;
    &lt;h2&gt;您的留言已送出成功，謝謝。&lt;/h2&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>切記！這個結果訊息的 div 必須放置在設定好的 <em>&lt;form&gt;</em> 標籤裡面才有效用。<em></em></p>
<br>
<p class="step">
    <span>Step03. 傳送測試。</span>
    <span>最後一樣測試是否有套用成功...</span>
</p>
<figure class="mb-0">
    <img src="images/pic/html/gform-18.jpg">
</figure>
<p>套用成功！</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://github.com/dwyl/learn-to-send-email-via-google-script-html-no-server" target="_blank">learn-to-send-email-via-google-script-html-no-server
</a></li>
</ul>
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