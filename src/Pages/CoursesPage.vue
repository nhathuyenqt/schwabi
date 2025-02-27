<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Courses" mainTitle="Courses" />
  <CoursesContent />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import CoursesContent from "../components/Courses/CoursesContent.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "CoursesPage",
  components: {
    MainNavbar,
    PageTitle,
    CoursesContent,
    MainFooter,
  },
});
</script>