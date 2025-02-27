<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Blog Standard" mainTitle="Blog Standard" />
  <BlogStandard />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import BlogStandard from "../components/BlogStandard/BlogStandard.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "BlogStandardPage",
  components: {
    MainNavbar,
    PageTitle,
    BlogStandard,
    MainFooter,
  },
});
</script>