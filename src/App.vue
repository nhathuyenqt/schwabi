<template>
  <PreLoader v-if="isLoading" />
  <router-view />
  <BackToTop />
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import PreLoader from "./components/Layouts/PreLoader.vue";
import BackToTop from "./components/Layouts/BackToTop.vue";

export default defineComponent({
  name: "App",
  components: {
    PreLoader,
    BackToTop,
  },
  setup() {
    const isLoading = ref(true);

    setTimeout(() => {
      isLoading.value = false;
    }, 2000);

    return {
      isLoading,
    };
  },
});
</script>