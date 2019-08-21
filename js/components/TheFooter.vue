<template>
  <footer id="footer">
    <p>Copyright © 2014-2019 iTrong All Rights Reserved.</p>
    <aside class="siderbar">
      <!-- <button class="btn-back" onclick="javascript:history.back()">
                <i class="fas fa-angle-left"></i>
      </button>-->
      <button class="btn-top" @click="goTop" ref="btn" style="display: none;">
        <i class="fas fa-angle-up"></i>
      </button>
    </aside>
    <!-- Line視窗 -->
    <div class="popup-wrap line-wrap" :class="{ 'line-active': isLineActive }">
      <figure>
        <img src="images/line_qrcode.png" />
        <figcaption>
          <span>請開啟LINE應用程式「好友」分頁，</span>
          <span>點選「加入好友」->「行動條碼」。</span>
        </figcaption>
      </figure>
      <button class="popup-close" @click="btnCloseL">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <span class="popup-overlay line-overlay" @click="btnCloseL" :class="{ 'active': isLineActive }"></span>
  </footer>
</template>

<script>
module.exports = {
  data: function() {
    return {
      isTop: true,
      timer: null,
      isActive: false,
      isLineActive: false,
      noScroll: false
    };
  },
  mounted() {
    this.needScroll();
  },
  methods: {
    needScroll() {
      // let clientHeight = document.documentElement.clientHeight
      let clientHeight = 200;
      let obtn = this.$refs.btn;
      window.onscroll = function() {
        let osTop =
          document.documentElement.scrollTop || document.body.scrollTop;
        if (osTop >= clientHeight) {
          obtn.style.display = "block";
        } else {
          obtn.style.display = "none";
        }
        if (!this.isTop) {
          clearInterval(this.timer);
        }
        this.isTop = false;
      };
    },
    goTop() {
      let self = this;
      self.timer = setInterval(function() {
        let osTop =
          document.documentElement.scrollTop || document.body.scrollTop;
        let ispeed = Math.floor(-osTop / 5);
        document.documentElement.scrollTop = document.body.scrollTop =
          osTop + ispeed;
        self.isTop = true;
        if (osTop === 0) {
          clearInterval(self.timer);
        }
      }, 30);
    },

    btnOpenL: function() {
      this.isLineActive = !this.isLineActive;
      this.noScroll = !this.noScroll;
    },

    btnCloseL: function() {
      this.isLineActive = !this.isLineActive;
      this.noScroll = !this.noScroll;
    }
  }
};
</script>