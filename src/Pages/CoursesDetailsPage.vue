<template>
  <MainNavbar class="edu-fixed-nav" />
  <PageTitle pageTitle="Course Details" mainTitle="Course Details" />
  <CoursesDetails />
  <MainFooter />
</template>

<script lang="ts">
import { defineComponent } from "vue";
import MainNavbar from "../components/Layouts/MainNavbar.vue";
import PageTitle from "../components/Common/PageTitle.vue";
import CoursesDetails from "../components/CoursesDetails/CoursesDetails.vue";
import MainFooter from "../components/Layouts/MainFooter.vue";

export default defineComponent({
  name: "CoursesDetailsPage",
  components: {
    MainNavbar,
    PageTitle,
    CoursesDetails,
    MainFooter,
  },
});
</script>