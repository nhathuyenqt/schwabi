<template>
  <div>
    <div class="edu-video-area">
      <div class="video-area">
        <div class="container">
          <div class="video-content videoBg">
            <div
              class="video-btn popup-youtube"
              @click="togglePopup"
              style="cursor: pointer"
            >
              <i class="bx bx-play"></i>
            </div>
          </div>
        </div>
      </div>
      <TrustedByBrands />
    </div>

    <div class="popup-video" v-if="isPopup">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="popup-overlay-close" @click="togglePopup">
            <div class="popup-overlay-close-line"></div>
            <div class="popup-overlay-close-line"></div>
          </div>
          <div class="play-video">
            <iframe
              src="https://www.youtube.com/embed/PWvPbGWVRrU"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import TrustedByBrands from "./TrustedByBrands.vue";

export default defineComponent({
  name: "VideoContent",
  components: {
    TrustedByBrands,
  },
  data() {
    return {
      isPopup: false,
    };
  },
  methods: {
    togglePopup() {
      this.isPopup = !this.isPopup;
    },
  },
});
</script>