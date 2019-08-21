<!doctype html>
<html class="pages contact">
<?php require_once 'include/_head.php' ?>
<body>
    <article id="wrap">
        <v-header></v-header>
        <main class="inside-wrap">
            <section class="inside-main">
                <h2></h2>
                <div class="form-wrap">
                    <p>本站僅供個人學習知識及註記重點使用，若資訊有誤歡迎不吝指教。<br>合作邀約也歡迎來信聯絡洽談。</p>
                    <form id="formContact" name="formContact" class="gform" method="POST"
                        action="https://script.google.com/macros/s/AKfycbzp_4BS5AgYK-Vu13T4JP0Ma6AqKtkuLkm5wG35/exec">
                        <div class="form-elements">
                            <div class="form-input">
                                <label name="name" for="name">Your name</label>
                                <input id="txtName" name="name" type="text" id="name">
                            </div>
                            <div class="form-input">
                                <label name="email" for="email">Your email</label>
                                <input id="txtEmail" name="email" type="text" id="email">
                            </div>
                            <div class="form-input">
                                <label name="message" for="message">Message</label>
                                <textarea id="txtMsg" name="message" id="message"></textarea>
                            </div>
                            <div class="form-btn">
                                <button id="resetBtn" type="reset">Clean</button>
                                <button id="submitBtn" type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="form-resault" style="display: none;">
                            <p>您的留言已送出成功，謝謝。</p>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <v-footer></v-footer>
    </article>
    <!-- js -->
    <script src="js/vue.min.js"></script>
    <script src="js/httpVueLoader.js"></script>
    <script src="js/vue-app.js"></script>
    <script src="js/form-submission-handler.js" data-cfasync="false"></script>
    <script src="js/main.js"></script>
    <script>
        var input = $(".form-input input, .form-input textarea");
        input.focus(function () {
            $(this).parent(".form-input").addClass("focus");
        });
        input.blur(function () {
            $(this).parent(".form-input").removeClass("focus");
            if ($(this).val().length > 0) {
                $(this).parent().find("label").addClass("active");
            }
            else {
                $(this).parent().find("label").removeClass("active");
            }
        });
        $("#resetBtn").click(function () {
            $(".form-input").removeClass("focus");
            $(".form-input label").removeClass("active");
        });
    </script>
</body>

</html>