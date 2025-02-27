<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Blog Grid" mainTitle="Blog Grid" />
  <BlogGrid />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import BlogGrid from "../components/Blog/BlogGrid.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "BlogPage",
  components: {
    MainNavbar,
    PageTitle,
    BlogGrid,
    MainFooter,
  },
});
</script>