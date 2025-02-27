<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Events" mainTitle="Events" />
  <CoursesList />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import CoursesList from "../components/CoursesList/CoursesList.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "CoursesListPage",
  components: {
    MainNavbar,
    PageTitle,
    CoursesList,
    MainFooter,
  },
});
</script>