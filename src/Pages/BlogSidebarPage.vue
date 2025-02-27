<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle
    pageTitle="Blog Grid with Right Sidebar"
    mainTitle="Blog Grid with Right Sidebar"
  />
  <BlogSidebar />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import BlogSidebar from "../components/BlogSidebar/BlogSidebar.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "BlogSidebarPage",
  components: {
    MainNavbar,
    PageTitle,
    BlogSidebar,
    MainFooter,
  },
});
</script>