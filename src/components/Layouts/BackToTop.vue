<template>
  <div :class="['go-top active', { active: isTop }]" @click="scrollToTop()">
    <i class="bx bx-up-arrow-alt"></i>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "BackToTop",
  data() {
    return {
      isTop: false,
    };
  },
  methods: {
    scrollToTop() {
      window.scrollTo(0, 0);
    },
  },
  mounted() {
    window.addEventListener("scroll", () => {
      let scrollPos = window.scrollY;
      if (scrollPos >= 100) {
        this.isTop = true;
      } else {
        this.isTop = false;
      }
    });
  },
});
</script>

<style lang="scss">
.top-button-icon {
  opacity: 0;
  bottom: 50px;
  position: fixed;
  right: 20px;
  z-index: 9999;

  &.active {
    bottom: 20px;
    opacity: 1;
  }
}
#scrollTopBtn {
  background-color: #fe4a55;
  color: white;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  line-height: 0;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  font-size: 41px;
}
#scrollTopBtn:hover {
  opacity: 1;
}
</style>