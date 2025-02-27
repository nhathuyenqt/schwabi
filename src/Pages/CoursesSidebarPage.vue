<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Events" mainTitle="Events" />
  <CoursesContent />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import CoursesContent from "../components/CoursesSidebar/CoursesContent.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "CoursesSidebarPage",
  components: {
    MainNavbar,
    PageTitle,
    CoursesContent,
    MainFooter,
  },
});
</script>