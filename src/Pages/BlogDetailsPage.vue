<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Blog Details" mainTitle="Blog Details" />
  <BlogDetails />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import BlogDetails from "../components/BlogDetails/BlogDetails.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "BlogDetailsPage",
  components: {
    MainNavbar,
    PageTitle,
    BlogDetails,
    MainFooter,
  },
});
</script>